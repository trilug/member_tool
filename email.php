<?php

	if (! $id) {
	
		# error
		$error = "This function requires an ID for input.";
		include "./error.inc";

	}
	
	else {
	
		# create an sql query and execute it
		$sql = "SELECT *
	        	FROM member_list
	        	WHERE member_id = $id";
		$r = mysql_fetch_array(mysql_query ($sql));
		
		# display the result
		include "./email.inc";
				
	}
	
?>
