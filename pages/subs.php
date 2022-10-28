<?php
	include 'includes/session.php';

	if(isset($_POST['autosave'])){
		
		// $user_id = $admin['user_id'];
		$trans_id = $_POST['trans_id'];
		$date = date('Y-m-d');

		$conn = $pdo->open();

		try{
			
			$stmt = $conn->prepare("INSERT INTO subscriptions (trans_id, date_added) VALUES (:trans_id, :date_added)");
			$stmt->execute(['trans_id'=>$trans_id, 'date_added'=>$date]);
			//$salesid = $conn->lastInsertId();
			
			
			$_SESSION['success'] = 'Transaction successful. Thank you.';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	
	header('location: subscription_success.html');
	
?>