<!DOCTYPE html>
<html>
<?php
include_once ("connect.php");
$conn = connect_to_db();

$student_id = mysqli_real_escape_string($conn, $_REQUEST['student_id']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
$birth_date = mysqli_real_escape_string($conn, $_REQUEST['birth_date']);
$gender = mysqli_real_escape_string($conn, $_REQUEST['gender']);
$class = mysqli_real_escape_string($conn, $_REQUEST['class']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$final_marks = mysqli_real_escape_string($conn, $_REQUEST['final_marks']);
$mid_marks = mysqli_real_escape_string($conn, $_REQUEST['mid_marks']);
$parent = mysqli_real_escape_string($conn, $_REQUEST['parent']);
$contact_no = mysqli_real_escape_string($conn, $_REQUEST['contact_no']);

// attempt insert query execution
//echo "i am ";
$sql = "INSERT INTO student (student_id,name,age,birth_date,gender,class,address,final_marks,mid_marks,parent,contact_no) 
		VALUES ('".$student_id."', '".$name."', '".$age."','".$birth_date."','".$gender."','".$class."', '".$address."','".$final_marks."','".$mid_marks."','".$parent."','".$contact_no."')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
	} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
</html>
