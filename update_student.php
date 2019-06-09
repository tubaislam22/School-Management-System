<!DOCTYPE html>
<html>
	<head>
		<title>School Management</title>
	</head>
	<body>
		<p style="float: right"><a href="logout.php" style="font-size:20px">Logout</a></p>
		<h1>Update Student</h1>
		<table width="75%", align="center", border="1">
			<tr>
				<th>Student Id</th>
				<th>Name</th>
				<th>Parents Name</th>
				<th>Class</th>
				<th>Final_Marks</th>
				<th>Mid_Marks</th>
				<th>Action</th>
			</tr>
				<?php
					include_once ("connect.php");
					$conn = connect_to_db();

					$sql = "SELECT * FROM student";
					$result = mysqli_query($conn, $sql);
					if($result->num_rows> 0){
						while($row = $result->fetch_assoc()){
							$id = $row['student_id'];
							$name = $row['name'];
							$parent = $row['parent'];
							$class = $row['class'];
							$final_marks = $row['final_marks'];
							$mid_marks = $row['mid_marks'];
							echo
							"<tr><form action='update.php' method='post'>
								<td>$id</td>
								<td><input type='text' name = 'nname' value='$name'></td>
								<td><input type='text' name = 'nparent' value='$parent'></td>
								<td><input type='text' name = 'nclass' value='$class'></td>
								<td><input type='text' name = 'nfinal_marks' value='$final_marks'></td>
								<td><input type='text' name = 'nmid_marks' value='$mid_marks'></td>
								<input type='hidden' name='sid' value='$id'>
								<td><input type='submit' name = 'update' value='Update'></td>
							</form></tr>
							";
						}
					}
					?>
		</table>
	</body>
</html>