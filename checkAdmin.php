<!DOCTYPE html>
<html>
<?php
session_start();
include_once ("connect.php");
//include_once ("");
$conn = connect_to_db();

if(isset($_POST['signin']))
{
	$ssn = $_POST['ssn'];
	$pass = $_POST['password'];
}
$sql = "SELECT * FROM admin WHERE ssn='$ssn' AND password='$pass'";
$result = mysqli_query($conn, $sql);
if($result->num_rows> 0){
	$_SESSION['ssn']='$ssn';
    echo "<script>alert('Logged in successfully.')</script>";
	echo "<script>window.open('main.html','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
</html>
