<?php

	if (! $id) {
	
		# error
		$error = "This function requires an ID for input.";
		include "./error.inc";

	}
	
	elseif (! $confirm) {

		# confirm
		include "./confirm.inc";		
	
	}
	
	else {
	
		# create and sql query and execute it
		$sql = "DELETE
		        FROM member_list
		        WHERE member_id = $id";
		mysql_db_query ($gDatabase, $sql);

		# done
		include "delete.inc";
	
	}

?>
