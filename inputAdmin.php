<!DOCTYPE html>
<html>
<?php
include_once ("connect.php");
$conn = connect_to_db();
//$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
//$a_ssn = mysqli_real_escape_string($conn, $_REQUEST['a_ssn']);
//$contact_no = mysqli_real_escape_string($conn, $_REQUEST['contact_no']);

// attempt insert query execution

if(isset($_POST['signup']))
{
	$name = $_POST['name'];
	$ssn = $_POST['ssn'];
	$pass = $_POST['password'];
	$cont = $_POST['contact'];
}
$sql = "INSERT INTO admin (name, ssn, password, contact_no) 
		VALUES ('$name', '$ssn', '$pass', '$cont')";

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Records added successfully.')</script>";
	echo "<script>window.open('admin.html','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
</html>
