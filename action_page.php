<?php 

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "elms";

$db=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
// Check connection
if (mysqli_connect_error())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    $youremail = $_POST['youremail'];
    $emailto = $_POST['emailto'];
	$message = $_POST['message'];
    $sql = "INSERT INTO contact (your_email, email_to, message) VALUES ('$youremail', '$emailto', '$message')";
    if($db->query($sql)=== TRUE){
        header("Location: myprofile.php");
    }
?>
