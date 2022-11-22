<?php
	include 'includes/session.php';

	if(isset($_POST['editbanner'])){

		$id = $_POST['id'];

		$resources = $_POST['resources'];
		$category = $_POST['category'];
		$type = $_POST['type'];
		$filenames = $_POST['filenames'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM resources WHERE status=:status");
		$stmt->execute(['status'=>1]);
		
		try{
			$stmt = $conn->prepare("UPDATE resources SET resources=:resources, category=:category, type=:type, filenames=:filenames WHERE id=:id");
			$stmt->execute(['resources'=>$resources, 'category'=>$category, 'type'=>$type, 'filenames'=>$filenames, 'id'=>$id]);

			$_SESSION['success'] = 'Banner updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Banner form first';
	}

	header('location: banner');

?>