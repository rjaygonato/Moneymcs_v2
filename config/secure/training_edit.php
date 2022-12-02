<?php
	include 'includes/session.php';

	if(isset($_POST['edittraining'])){

		$id = $_POST['id'];

		$course_name = $_POST['course_name'];
		$category = $_POST['category'];
		$language = $_POST['language'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$features = $_POST['features'];
		$type = $_POST['type'];
		//$filenames = $_POST['filenames'];
		$filenames = $_FILES['filenames']['name'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM training_resources WHERE status=:status");
		$stmt->execute(['status'=>1]);
		
		try{
			$stmt = $conn->prepare("UPDATE training_resources SET course_name=:course_name, category=:category, language=:language, start_date=:start_date, end_date=:end_date, price=:price, description=:description, features=:features, filenames=:filenames, type=:type WHERE id=:id");
			$stmt->execute(['course_name'=>$course_name, 'category'=>$category , 'language'=>$language, 'start_date'=>$start_date, 'end_date'=>$end_date, 'price'=>$price, 'description'=>$description, 'features'=>$features, 'filenames'=>$filenames, 'type'=>$type, 'id'=>$id]);

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