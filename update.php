<?php
include_once ("connect.php");
$conn = connect_to_db();

if(isset($_POST['update']))
{
	$id = $_POST['sid'];
	$name = $_POST['nname'];
	$parent = $_POST['nparent'];

	$sql = "UPDATE student SET name='$name', parent='$parent' WHERE student_id='$id'";

	if(mysqli_query($conn, $sql)){
		echo "Records updated successfully.";
		header('Location: update_student.php');
		} 
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}
}
?>
