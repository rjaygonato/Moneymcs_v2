<?php
	include 'includes/session.php';

	if(isset($_POST['catdelete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM resources WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Resource File deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select Resource File to delete first';
	}

	header('location: resources');
	
?>