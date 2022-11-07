<?php
	include 'includes/session.php';

	if(isset($_GET['transid'])){
		
		// $user_id = $agent['user_id'];
		$totalp = $_GET['totalp'];
		$trans_id = $_GET['transid'];
		$date = date('Y-m-d');

		$conn = $pdo->open();

		try{
			
			$stmt = $conn->prepare("INSERT INTO subscriptions (user_id, totalp, trans_id, date_added) VALUES (:user_id, :totalp, :trans_id, :date_added)");
			$stmt->execute(['user_id'=>$agent['id'], 'totalp'=>$totalp,'trans_id'=>$trans_id, 'date_added'=>$date]);
			//$salesid = $conn->lastInsertId();
			
			
			$_SESSION['success'] = 'You are now subscribed. To see all the transaction details, log in to your PayPal account. <br>
			It may take a few moments for this transaction to appear in your account.';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	
	header('location: subscription_success');
	
?>