<?php
	include 'includes/session.php';
	$conn = $pdo->open();
	
	
	if(isset($_POST['add'])) {
		$company_name = ($_POST['company_name']);
		$firstname = ($_POST['firstname']);
		$lastname = ($_POST['lastname']);
		$email = ($_POST['email']);
		$phonenum = ($_POST['phonenum']);
		$paid_user = ($_POST['paid_user']);
		$date_added = date('Y-m-d');
		$state = ($_POST['state']);
		$type = ($_POST['type']);

		if(empty($firstname)||empty($lastname)||empty($email)||empty($phonenum)||empty($state)||empty($type)){
			$_SESSION['error'] = 'Please dont leave the form blank';
			header('location: clients');
			return;
		}
		else{
			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM clients WHERE email=:email OR phonenum=:phonenum");
			$stmt->execute(['email'=>$email,'phonenum'=>$phonenum]);
		
			$row = $stmt->fetch();
		
			if($row['numrows'] > 0){
				$_SESSION['error'] = 'Email or Phone Number is already used. Please use another keyword, Thank you.';
				header('location: clients');
				return;
			}
		else{
		
		try{
			
			$stmt = $conn->prepare("INSERT INTO clients(user_id, company_name, firstname, lastname, email, phonenum, paid_user, date_added, state, type) VALUES (:user_id, :company_name, :firstname, :lastname, :email, :phonenum, :paid_user, :date_added, :state, :type)");
			$stmt->execute(['user_id'=>$agent['id'], 'company_name'=>$company_name, 'firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email, 'phonenum'=>$phonenum, 'paid_user'=>$paid_user, 'date_added'=>$date_added,'state'=>$state, 'type'=>$type]);
			//$salesid = $conn->lastInsertId();
			
			
			$_SESSION['success'] = 'Client Added Successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
	}
	}
		
	}	
	$pdo->close();

	
	//header('location: clients');
?>