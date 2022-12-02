<?php
	include 'includes/session.php';

	if(isset($_POST['addcourse'])){

        $course_name = $_POST['course_name'];
		$category = $_POST['category'];
		$language = $_POST['language'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		$price = $_POST['price'];
		$description = $_POST['description'];
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
				$stmt = $conn->prepare("INSERT INTO training_resources (course_name, category, language, start_date, end_date, price, description, features, filenames, type, status) VALUES (:course_name, :category, :language, :start_date, :end_date, :price, :description, :features, :filenames, :type, :status)");
				$stmt->execute(['course_name'=>$course_name, 'category'=>$category , 'language'=>$language, 'start_date'=>$start_date, 'end_date'=>$end_date, 'price'=>$price, 'description'=>$description, 'features'=>$features, 'filenames'=>$filenames, 'type'=>$type , 'status'=>'1']);

				$_SESSION['success'] = 'Training Course added successfully';
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