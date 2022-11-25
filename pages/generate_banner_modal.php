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
			<p>Copy the text in the box below and paste it into any web page to generate a link tracking banner!</p>
            <textarea class='form-control' id='' rows='3' scrollable><a href='".$imgdir."/createref.php?referral=".$agent['regcode']." target='_blank'><img src=".$imgdir."/images/".$row['filenames']." border='0'></a></textarea>

            <p>This is what the banner will look like:</p>

            <a href='".$imgdir."/createref.php?referral=".$agent['regcode']." target='_blank'><img src=".$imgdir."/images/".$row['filenames']." border='0'></a>

			<div class='modal-footer'>
            <button type='button' class='btn btn-outline-secondary' data-bs-dismiss='modal'>
            Close
            </button>
            ";

          }
		$pdo->close();

		//echo json_encode($row);
	}
?>