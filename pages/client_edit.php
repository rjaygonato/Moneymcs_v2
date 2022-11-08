<?php
	include 'includes/session.php';
	$conn = $pdo->open();
	
	
	if(isset($_POST['edit'])) {
		$id = $_POST['update_id'];

		$firstname = ($_POST['firstname']);
		$lastname = ($_POST['lastname']);
		$email = ($_POST['email']);
		$phonenum = ($_POST['phonenum']);
		$state = ($_POST['state']);
		$type = ($_POST['type']);

		try{
			
			$stmt = $conn->prepare("UPDATE clients SET firstname=:firstname, lastname=:lastname, email=:email, phonenum=:phonenum, state=:state, type=:type WHERE id=:id");
			$stmt->execute(['firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email, 'phonenum'=>$phonenum, 'state'=>$state, 'type'=>$type]);
			
			
			
			$_SESSION['success'] = 'Client Updated Successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		
	}	
	$pdo->close();

	
	//header('location: clients');
?>