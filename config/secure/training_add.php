<?php
	include 'includes/session.php';

	if(isset($_POST['addcourse'])){

        $course_name = $_POST['course_name'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$features = $_POST['features'];
		$type = $_POST['type'];
        $filenames = $_FILES['filenames']['name'];
		$type=$_FILES['filenames']['type'];
		$temp=$_FILES['file']['tmp_name'];

		$conn = $pdo->open();

        if(!empty($filenames)){
            move_uploaded_file($_FILES['filenames']['tmp_name'], '../../images/'.$filenames);
            $filename = $filenames;	
        }
        else{
            $filename = $user['filenames'];
        }

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM training_resources WHERE course_name=:course_name");
		$stmt->execute(['course_name'=>$course_name]);

		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Course already exist';
		}
		else{	
			try{
				$stmt = $conn->prepare("INSERT INTO training_resources (course_name, category, description, price, features, filenames, type, status) VALUES (:course_name, :category, :description, :price, :features, :filenames, :type, :status)");
				$stmt->execute(['course_name'=>$course_name, 'category'=>$category , 'description'=>$description, 'price'=>$price, 'features'=>$features, 'filenames'=>$filenames, 'type'=>$type , 'status'=>'1']);

				$_SESSION['success'] = 'Course added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up Training Resources form first';
	}

	header('location: trainingresources');

?>