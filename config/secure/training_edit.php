<?php
	include 'includes/session.php';

	if(isset($_POST['edittraining'])){

		$id = $_POST['id'];

		$course_name = $_POST['course_name'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$features = $_POST['features'];
		$type = $_POST['type'];
		$filenames = $_POST['filenames'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM training_resources WHERE status=:status");
		$stmt->execute(['status'=>1]);
		
		try{
			$stmt = $conn->prepare("UPDATE training_resources SET course_name=:course_name, category=:category, description=:description, price=:price, features=:features, filenames=:filenames, type=:type WHERE id=:id");
			$stmt->execute(['course_name'=>$course_name, 'category'=>$category , 'description'=>$description, 'price'=>$price, 'features'=>$features, 'filenames'=>$filenames, 'id'=>$id]);

			$_SESSION['success'] = 'Training Course updated successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Training Resources form first';
	}

	header('location: trainingresources');

?>