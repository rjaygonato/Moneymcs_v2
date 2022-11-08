<?php
	include 'includes/session.php';
	$conn = $pdo->open();
	
	
	
		
		$firstname = ($_POST['firstname']);
		$lastname = ($_POST['lastname']);
		$email = ($_POST['email']);
		$phonenum = ($_POST['phonenum']);
		$state = ($_POST['state']);
		$type = ($_POST['type']);
		

		try{
			
			$stmt = $conn->prepare("INSERT INTO clients (user_id, firstname, lastname, email, phonenum, state, type) VALUES (:user_id, :firstname, :lastname, :email, :phonenum, :state, :type)");
			$stmt->execute(['user_id'=>$agent['id'], 'firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email, 'phonenum'=>$phonenum, 'state'=>$state, 'type'=>$type]);
			//$salesid = $conn->lastInsertId();
			
			
			$_SESSION['success'] = 'Client Added Successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		
		
	$pdo->close();

	
	header('location: clients');
?>