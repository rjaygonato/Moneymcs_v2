<?php
	include 'includes/session.php';

	if(isset($_GET['transid'])){
		
		$user_id = $admin['user_id'];
		$trans_id = $_GET['transid'];
		$date = date('Y-m-d');

		$conn = $pdo->open();

		try{
			
			$stmt = $conn->prepare("INSERT INTO subscriptions (user_id, trans_id, date_added) VALUES (:user_id, :trans_id, :date_added)");
			$stmt->execute(['user_id'=>$admin['id'], 'trans_id'=>$trans_id,'date_added'=>$date]);
			//$salesid = $conn->lastInsertId();
			
			
			$_SESSION['success'] = 'Transaction successful. Thank you.';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	
	header('location: subscription_success');
	
?>