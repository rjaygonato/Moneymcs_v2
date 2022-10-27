<?php
	include 'includes/session.php';

	if(isset($_GET['pay'])){
		
		$user_id = $user['id'];
		$payid = $_GET['pay'];
		$date = date('Y-m-d');

		$conn = $pdo->open();

		try{
			
			$stmt = $conn->prepare("INSERT INTO subscriptions (user_id, pay_id, date_added) VALUES (:user_id, :pay_id, :date_added)");
			$stmt->execute(['user_id'=>$user['id'], 'pay_id'=>$payid, 'date_added'=>$date]);
			$salesid = $conn->lastInsertId();
			
			
			$_SESSION['success'] = 'Transaction successful. Thank you.';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	
	header('location: home.php');
	
?>