<?php
	include '../includes/conn.php';
	session_start();

	if(!isset($_SESSION['agent']) || trim($_SESSION['agent']) == ''){
		header('location: ../index');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
	$stmt->execute(['id'=>$_SESSION['agent']]);
	$agent = $stmt->fetch();

	$pdo->close();

?>