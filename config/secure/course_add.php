
<?php
	include 'includes/session.php';

	if(isset($_POST['training_save'])){

		$course_name = $_POST['course_name'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $features = $_POST['features'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM training_resources WHERE course_name=:course_name");
		$stmt->execute(['course_name'=>$course_name]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Title is already exist';
		}
		else{	
			try{
				$stmt = $conn->prepare("INSERT INTO training_resources (course_name, category, description, price, features, status) VALUES (:course_name, :category, :description, :price, :features, :status)");
				$stmt->execute(['course_name'=>$course_name, 'category'=>$category, 'description'=>$description, 'price'=>$price, 'features'=>$features, 'status'=>'1']);
				
				$_SESSION['success'] = 'Course added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up course form first';
	}

	header('location: trainingresources');

?>