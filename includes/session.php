<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['agent'])){
		header('location: pages/home');
	}

	if(isset($_SESSION['free_user'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
			$stmt->execute(['id'=>$_SESSION['free_user']]);
			$free_user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

		$pdo->close();
	}
?>