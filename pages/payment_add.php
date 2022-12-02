
<?php
	include 'includes/session.php';

	if(isset($_POST['add_paymentmethod'])){
		$user_id = $_POST['user_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$contact = $_POST['contact'];
		$country = $_POST['country'];
		$address = $_POST['address'];	
		$postal = $_POST['postal'];
		$province = $_POST['province'];
		$city = $_POST['city'];
		$organization = $_POST['organization'];
		$tax_id = $_POST['tax_id'];
		$card_num = $_POST['card_num'];
		$card_type = $_POST['card_type'];
		$exp_date_month = $_POST['exp_date_month'];
		$exp_date_year = $_POST['exp_date_year'];
		$sec_code = $_POST['sec_code'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM payment_method WHERE card_num=:card_num");
		$stmt->execute(['card_num'=>$card_num]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Card information is already exist';
		}
		else{	

			date_default_timezone_set("Asia/Manila");
			$now = date('Y-m-d h:i:s');
			
			try{
				$stmt = $conn->prepare("INSERT INTO payment_method (user_id, firstname, lastname, contact, country, address, postal, province, city, organization, tax_id, card_num, card_type, exp_date_month, exp_date_year, sec_code, date_added) VALUES (:user_id,:firstname, :lastname, :contact, :country, :address, :postal, :province, :city, :organization, :tax_id, :card_num, :card_type, :exp_date_month, :exp_date_year, :sec_code, :date_added)");

				$stmt->execute(['user_id'=>$user_id, 'firstname'=>$firstname, 'lastname'=>$lastname, 'contact'=>$contact, 'country'=>$country, 'address'=>$address, 'postal'=>$postal, 'province'=>$province, 'city'=>$city, 'organization'=>$organization, 'tax_id'=>$tax_id, 'card_num'=>$card_num, 'card_type'=>$card_type,'exp_date_month'=>$exp_date_month, 'exp_date_year'=>$exp_date_year, 'sec_code'=>$sec_code, 'date_added'=>$now]);

				$_SESSION['success'] = 'Card information was added successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up payment method form first';
	}

	header('location: payment');

?>