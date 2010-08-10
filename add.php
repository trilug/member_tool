<h1>Add a member</h1>

<?php

	# check for form submital
	if (! $submit) {
	
		include "./add.inc";

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
		    $telephone            == "" /*||*/
		    /* $employer             == "" || */
		    /* $occupation           == "" || */
		    /* $birth_year           == "" */ ) {
		   
			# error
			$error = "At least one of the required inputs was not supplied.";
			include "./error.inc";
		   
		}
				
		# insert into database
		else {
		
			# create a member id based on the time
			$member_id = time();
			
			# great, create an sql query and execute it
			$sql = "INSERT INTO member_list
			       (member_id,     first_name,    last_name,    address_1,    address_2,   city,     state,    zip_code,    email,    telephone,    employer,    occupation,    birth_year, id_equals_date)
			       VALUES
			       ('$member_id', '$first_name', '$last_name', '$address_1', '$address_2', '$city', '$state', '$zip_code', '$email', '$telephone', '$employer', '$occupation', '$birth_year', 'Y')";
			mysql_query	($sql);
			
			# uncomment for debuggin' purposes
			#echo mysql_errno().": ".mysql_error()."<BR>"; echo "<pre>$sql</pre>";
			
			# get the id of the newly created record
			#$i = mysql_insert_id();
			
			# done
			# email info to them.
	
		echo "<p> Emailing information to " . $last_name . ", " . $first_name . " at ". $email . "...";

	$message = "Dear ".$first_name." ".$last_name." - \n";
	$message = $message."\nThis is a email reminder of your TriLUG membership\ninformation. It is sent to all members at least once,\nto send important registration information, or when a\nmember requests that we send them their current information.\n\nYou membership information follows : \nName : ".$first_name." ".$last_name."\nMember ID : ".$member_id."\nemail : ".$email."\n\nIf this information is incomplete or out of date\nPlease contact the steering committee as soon as\nyou are able to update your records.\n\nThank you,\nTriLUG Steering Committee\n";
	$mailed_id = mail($email,"Your TriLUG membership information", $message,"From:chair@trilug.org\nReply-to:steering@trilug.org");
	if ($mailed_id) {
		echo "succeeded";
	} else {
		echo "failed";
	}
echo "</p>\n";

			echo "<p>Added. The new member's name is <b>$first_name $last_name</b>, and their member ID number is <b>#$member_id</b>. <a href=./?cmd=displayone&id=$member_id>Edit their record</a>.</p>";
				
		}
	
	}

?>
