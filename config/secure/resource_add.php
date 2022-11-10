<?php
	include 'includes/session.php';

	if(isset($_POST['addresource'])){

        $resources = $_POST['resources'];
		$category = $_POST['category'];
		$type = $_POST['type'];
        $filenames = $_FILES['filenames']['name'];

		$conn = $pdo->open();

        if(!empty($filenames)){
            move_uploaded_file($_FILES['filenames']['tmp_name'], '../files/'.$filenames);
            $filename = $filenames;	
        }
        else{
            $filename = $user['filenames'];
        }

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM resources WHERE resources=:resources");
		$stmt->execute(['resources'=>$resources]);

		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Resource File already exist';
		}
		else{	
			try{
				$stmt = $conn->prepare("INSERT INTO resources (resources, filenames, category, type, status) VALUES (:resources, :filenames, :category, :type, :status)");
				$stmt->execute(['resources'=>$resources , 'filenames'=>$filenames , 'category'=>$category , 'type'=>$type , 'status'=>'1']);

				$_SESSION['success'] = 'Resource File added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up resources form first';
	}

	header('location: resources');

?>