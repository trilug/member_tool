<?php
# Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
# Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

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
