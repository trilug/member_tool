<?php

	if (! $id) {

		# error
		$error = "This function requires an ID for input.";
		include "./error.inc";

	}

	elseif (! $submit) {

		# create an sql query and execute it
		$sql = "SELECT *
	        	FROM member_list
	        	WHERE member_id = $id";
		$r = mysql_fetch_array(mysql_query ($sql));

		# display the result
		include "./edit.inc";

	}

	else {

		# make sure all fields have content
		if ($first_name           == "" ||
		    $last_name            == "" ||
		    $address_1            == "" ||
		    $city                 == "" ||
		    $state                == "" ||
		    $zip_code             == "" ||
		    $email                == "" ||
		    $telephone            == "" ||
		    $employer             == "" ||
		    $occupation           == "" ||
		    $birth_year           == "" ) {

			# error
			$error = "At least one of the required inputs was not supplied.";
			include "./error.inc";

		}

		# update the database
		else {

			# great, create an sql update query and execute it
			$sql = "UPDATE member_list
		            SET first_name  = '$first_name',
		            	last_name   = '$last_name',
		            	address_1   = '$address_1',
		            	address_2   = '$address_2',
		            	city        = '$city',
		            	state       = '$state',
		            	email       = '$email',
		            	telephone   = '$telephone',
		            	occupation  = '$occupation',
		            	employer    = '$employer',
		            	birth_year  = '$birth_year'
		            WHERE member_id = $id";
			mysql_query	($sql);

			# uncomment for debuggin' purposes
			#echo mysql_errno().": ".mysql_error()."<BR>"; echo "<pre>$sql</pre>";

			# done
			echo "<h1>Edited</h1> <p>Thank you.</p>";

		}

	}

?>
