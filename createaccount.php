<?php
	include 'includes/session.php';
	include 'includes/getip.php';

	if ( !isset($_POST['captcha']) || $_POST['captcha'] != $_SESSION['captcha_code'] ) {
		$_SESSION['error'] = 'Incorrect verification code';
		header('location: create');
		return;
	}

	if(isset($_POST['create']) && isset($_SESSION['token']) && $_POST['token'] == md5($_SESSION['token']) ){
		unset($_SESSION['token']);

		$firstname = trim(stripcslashes($_POST['firstname']));
        $lastname = trim(stripcslashes($_POST['lastname']));
		$contact_info = trim(stripcslashes($_POST['contact_info']));
		$email = trim(stripcslashes($_POST['email']));
		$password = trim(stripcslashes($_POST['password']));
		$repassword = trim(stripcslashes($_POST['repassword'])); 

		if ( empty($firstname) || empty($lastname) || empty($contact_info) || empty($email) || empty($password) || empty($repassword) ) {

			$_SESSION['error'] = 'Some fields are required';
			header('location: create');
			return;
		}

		// if ( $age < 15 ) {
		// 	$_SESSION['error'] = '15 years old below are not allowed to register';
		// 	header('location: register');
		// 	return;
		// }

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		
		$row = $stmt->fetch();

		if($password != $repassword) {
			$_SESSION['error'] = 'Passwords did not match, Please try again';
			header('location: create');
			return;
		}
		else {
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email or Username is already used. Please use another keyword, Thank you.';
				header('location: create');
				return;
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
	
				date_default_timezone_set("Asia/Manila");
				$now = date('Y-m-d h:i:s');
				
				//generate code
				$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$regcode='1234567890';
				$code=substr(str_shuffle($set), 0, 15);
				$moneymcid=substr(str_shuffle($regcode), 0, 5);
				
				try{
					$stmt = $conn->prepare("INSERT INTO users (regcode, moneymcid, firstname, lastname, contact_info, email, password, type, status, created_on, ip) VALUES (:code, :moneymcid, :firstname, :lastname, :contact_info, :email, :password, :type, :status, :created_on, :ip)");
					$stmt->execute(['code'=>$code, 'moneymcid'=>$moneymcid, 'firstname'=>$firstname, 'lastname'=>$lastname, 'contact_info'=>$contact_info, 'email'=>$email, 'password'=>$password, 'type'=>'1', 'status'=>'1', 'created_on'=>$now, 'ip' => get_ip()]);
                    
					$_SESSION['success'] = 'Sign in now and get your referral link';
				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
				}
			}
	
			$pdo->close();
		}
	}
	else{
		$_SESSION['error'] = 'Fill up registration form first';
		header('location: create');
	}

	header('location: index');
?>