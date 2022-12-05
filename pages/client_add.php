
<?php
	include 'includes/session.php';

	if(isset($_POST['client_save'])){
        $user_id = $_POST['user_id'];
        $firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phonenum = $_POST['phonenum'];
		$state = $_POST['state'];
		$type = $_POST['type'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM clients WHERE firstname=:firstname");
		$stmt->execute(['firstname'=>$firstname]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Please check if client is already exist';
		}
		else{	
			try{
                date_default_timezone_set("Asia/Manila");
				$now = date('Y-m-d h:i:s');

				$stmt = $conn->prepare("INSERT INTO clients (user_id, firstname, lastname, email, phonenum, state, type, status, date_join) VALUES (:user_id, :firstname, :lastname, :email, :phonenum, :state, :type, :status, :date_join)");
				$stmt->execute(['user_id'=>$user_id,'firstname'=>$firstname, 'lastname'=>$lastname, 'email'=>$email, 'phonenum'=>$phonenum, 'state'=>$state,'type'=>$type, 'status'=>1, 'date_join'=>$now]);
				$_SESSION['success'] = 'Client added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up clients form first';
	}

	header('location: clients');

?>