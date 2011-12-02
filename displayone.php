<?php
# Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
# Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

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
		include "./displayone.inc";
				
	}
	
?>
