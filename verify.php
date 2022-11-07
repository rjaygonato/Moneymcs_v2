<?php
	include 'includes/session.php';
	include 'includes/getip.php';
	$conn = $pdo->open();

	date_default_timezone_set("Asia/Manila");
	$now = date('Y-m-d h:i:s');

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
				if($row['status']){
					if(password_verify($password, $row['password'])){
						if($row['type']){
							$_SESSION['admin'] = $row['id'];

							$sql = "UPDATE users SET last_login=:last_login, last_login_ip=:last_login_ip WHERE id=:id";
							$stmt = $conn->prepare($sql);
							$stmt->execute([
								'id' => $row['id'],
								'last_login_ip' => get_ip(),
								'last_login' => $now,
							]);
						}
						elseif ($row['type'] == 2){

							$_SESSION['developer'] = $row['id'];
						}
						else{
							$_SESSION['user'] = $row['id'];

							$sql = "UPDATE users SET last_login=:last_login, last_login_ip=:last_login_ip WHERE id=:id";
							$stmt = $conn->prepare($sql);
							$stmt->execute([
								'id' => $row['id'],
								'last_login_ip' => get_ip(),
								'last_login' => $now,
							]);
						}
					}
					else{
						$_SESSION['error'] = 'Incorrect Password';
					}
				}
				else{
					$_SESSION['error'] = 'Account not activated.';
				}
			}
			else{
				$_SESSION['error'] = 'Email not found';
			}
		}
		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Input login credentails first';
	}

	$pdo->close();

	header('location: index');

?>