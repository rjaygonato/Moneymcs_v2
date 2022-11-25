<?php
	include 'includes/session.php';

	if(isset($_POST['client_upsave'])){

		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenum = $_POST['phonenum'];
        $state = $_POST['state'];
        $type = $_POST['type'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM clients WHERE status=:status");
		$stmt->execute(['status'=>1]);
		
		try{
			$stmt = $conn->prepare("UPDATE clients SET firstname=:firstname, lastname=:lastname, email=:email, phonenum=:phonenum, state=:state, type=:type  WHERE id=:id");
			$stmt->execute(['firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'phonenum'=>$phonenum, 'state'=>$state, 'type'=>$type, 'id'=>$id]);

			$_SESSION['success'] = 'Client updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up client form first';
	}

	header('location: clients');

?>