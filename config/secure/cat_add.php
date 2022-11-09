
<?php
	include 'includes/session.php';

	if(isset($_POST['addcat'])){
		$category = $_POST['category'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM resource_category WHERE category=:category");
		$stmt->execute(['category'=>$category]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Category already exist';
		}
		else{	
			try{
				$stmt = $conn->prepare("INSERT INTO resource_category (category, status) VALUES (:category, :status)");
				$stmt->execute(['category'=>$category , 'status'=>'1']);
				$_SESSION['success'] = 'Category added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up category form first';
	}

	header('location: categories');

?>