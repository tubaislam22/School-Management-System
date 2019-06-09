 <?php
    include_once ("connect.php");
    
    function connect_to_db() {
        $servername = "localhost";
        $username = "id9878526_db_tuba";
        $password = "root123";
        $dbname = "id9878526_schoolmanagement";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
		//echo "failed";
//mysqli_connect($servername, $username, $password);
//mssql_select_db($dbname);
        // Check connection
        if (!$conn) {
			echo "failed";
            die("Connection failed: " . mysqli_connect_error());
			//echo "failed";
        }
        //echo "Connected successfully";
        return $conn;
    }
?>
