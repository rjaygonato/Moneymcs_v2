<?php
	include 'includes/session.php';

	if(isset($_POST['bannerdelete'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM resources WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Banner deleted successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select a Banner to delete first';
	}

	header('location: banner');
	
?>