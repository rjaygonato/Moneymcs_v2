<?php
	include 'includes/session.php';

	if(isset($_POST['editcat'])){

		$id = $_POST['id'];
		$category = $_POST['category'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM resource_category WHERE status=:status");
		$stmt->execute(['status'=>1]);
		
		try{
			$stmt = $conn->prepare("UPDATE resource_category SET category=:category WHERE id=:id");
			$stmt->execute(['category'=>$category, 'id'=>$id]);

			$_SESSION['success'] = 'Category updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up category form first';
	}

	header('location: categories');

?>