<?php
	include 'includes/session.php';
	$conn = $pdo->open();
	
	
	if(isset($_POST['firstname'])) {
		
		$firstname = ($_POST['firstname']);
		$lastname = "lastname";
		$email = "email";
		$phonenum = "phonenum";
		$state = "state";
		$type = "type";
		

		try{
			
			$stmt = $conn->prepare("INSERT INTO clients (user_id, firstname, lastname, email, phonenum, state, type) VALUES (:user_id, :firstname, :lastname, :email, :phonenum, :state, :type)");
			$stmt->execute(['user_id'=>$admin['id'], 'firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email, 'phonenum'=>$phonenum, 'state'=>$state, 'type'=>$type]);
			//$salesid = $conn->lastInsertId();
			
			
			$_SESSION['success'] = 'Client Added Successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		
	}	
	$pdo->close();

	
	//header('location: clients');
?>