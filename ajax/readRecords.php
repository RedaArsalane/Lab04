<?php

	include("db_connection.php");			
		$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Name</th>
							<th>Country</th>
							<th>Email Address</th>
							
						</tr>';

	$query = "SELECT * FROM users";									

	if (!$result = mysqli_query($con, $query)) {					
        exit(mysqli_error($con
    }
	
							
?>