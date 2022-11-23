<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM resources WHERE id=:id");
		$stmt->execute(['id'=>$id]);
		//$row = $stmt->fetch();

		while($row = $stmt->fetch())
          {
            $dir = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
            $imgdir = dirname($dir, 2);
			echo "
            <textarea class='form-control' id='' rows='3' scrollable><a href='http://joinmoneymcs.com/createref.php?referral=".$agent['regcode']." target='_blank'><img src=".$imgdir."/images/".$row['filenames']." border='0'></a></textarea>

            <p>This is what the banner will look like:</p>

            <a href='http://joinmoneymcs.com/createref.php?referral=".$agent['regcode']." target='_blank'><img src=".$imgdir."/images/".$row['filenames']." border='0'></a>
            ";

          }
		$pdo->close();

		//echo json_encode($row);
	}
?>