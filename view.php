<!DOCTYPE html>
<html>
	<head>
		<title>School Management</title>
	</head>
	<body>
		<p style="float: right"><a href="logout.php" style="font-size:20px">Logout</a></p>
		<h1>Details of view</h1>
		<table width="75%", align="center", border="1">
			<tr>
				<th>Student Id</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Class</th>
				<th>Final Marks</th>
				<th>Mid Marks</th>
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
							$gender = $row['gender'];
							$class = $row['class'];
							$final_marks = $row['final_marks'];
							$mid_marks = $row['mid_marks'];
							echo
							"<tr>
								<td>$id</td>
								<td>$name</td>
								<td>$gender</td>
								<td>$class</td>
								<td>$final_marks</td>
								<td>$mid_marks</td>
							</tr>
							";
						}
					}
					?>
		</table>
	</body>
</html>