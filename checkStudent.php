<!DOCTYPE html>
<html>
<?php
session_start();
include_once ("connect.php");
$conn = connect_to_db();

if(isset($_POST['login']))
{
	$name = $_POST['name'];
	$id = $_POST['id'];
}
$sql = "SELECT * FROM student WHERE name='$name' AND student_id='$id'";
$result = mysqli_query($conn, $sql);
if($result->num_rows> 0){
	$_SESSION['ssn']='$ssn';
	echo "<script>window.open('view.php','_self')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
</html>
