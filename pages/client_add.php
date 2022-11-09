<?php
	include 'includes/session.php';
	$conn = $pdo->open();
	
	
	if(isset($_POST['add'])) {
		
		$firstname = ($_POST['firstname']);
		$lastname = ($_POST['lastname']);
		$email = ($_POST['email']);
		$phonenum = ($_POST['phonenum']);
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
			
			$stmt = $conn->prepare("INSERT INTO clients(user_id, firstname, lastname, email, phonenum, state, type) VALUES (:user_id, :firstname, :lastname, :email, :phonenum, :state, :type)");
			$stmt->execute(['user_id'=>$agent['id'], 'firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email, 'phonenum'=>$phonenum, 'state'=>$state, 'type'=>$type]);
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

	
	header('location: clients');
?>