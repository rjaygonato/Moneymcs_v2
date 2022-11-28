<?php
	include 'includes/session.php';

	if(isset($_POST['deletecourse'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM training_resources WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Training Course deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select a Course to delete first';
	}

	header('location: trainingresources');
	
?>