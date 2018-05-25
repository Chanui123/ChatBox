<?php
require_once("/home/gmn7929/conf/settings.php"); //using require_once to include/add another file, which contains sensitive information about the database in the conf folder

	// mysqli_connect returns false if connection failed, otherwise a connection value
	$conn = @mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);	//connecting to the database using the information that has been provided from settings.php file, which I included earlier
  
	// Checks the connection status to see if it it's a successful connection or a failure one.
	if (!$conn) {
		echo "Database connection failure";	//Display error message to the user
	}	
	
	$table = "CREATE TABLE IF NOT exists UserRecords ( 	
								Existed_Questions VARCHAR(255))";
								
								//using mysqli_query to execute the query to create the table
								//using the INSERT INTO command to insert data into the table by the following rows
								if (mysqli_query($conn, $table)) {
									$insertValues ="INSERT INTO UserRecords(
									statuscode, status, share, date, allow)		
									values('$status_code','$status','$share','$date','$allow')";

									//using mysqli_query again to execute the insert command
									if(mysqli_query($conn, $insertValues)){
									echo "<br>";
									echo "<br> Thank you for completing the form";
									echo "<br> Your record has been inserted to the database";
									}
								}
	
	
	
	

?>
