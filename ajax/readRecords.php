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
	
	if(mysqli_num_rows($result) > 0){								
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result)){					
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['first_name'].'</td>
				<td>'.$row['last_name'].'</td>
				<td>'.$row['email'].'</td>
			</tr>';
    		$number++;
    	}
    }else{															
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';											

    echo $data;	
							
?>