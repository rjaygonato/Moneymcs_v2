<?php
	include 'includes/session.php';
	$conn = $pdo->open();
	
	
	if(isset($_POST['delete'])) {
		$id = $_POST['delete_id'];

		try{
			
			$stmt = $conn->prepare("DELETE FROM clients WHERE id=:id");
			$stmt->execute(['id'=>$id]);
			
			
			$_SESSION['success'] = 'Client Deleted Successfully';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		
	}	
	$pdo->close();

	
	header('location: clients');
?>