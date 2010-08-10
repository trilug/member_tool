<?php
	
	echo "<p> Emailing " . $r["last_name"] . ", " . $r["first_name"] . " <small>(<a href=./?cmd=displayone&id=". $r["member_id"] . ">full record</a>)</small>...";

	$message = "Dear ".$r["first_name"]." ".$r["last_name"]." - \n";
	$message = $message."\nThis is a email reminder of your TriLUG membership\ninformation. It is sent to all members at least once,\nto send important registration information, or when a\nmember requests that we send them their current information.\n\nYou membership information follows : \nName : ".$r["first_name"]." ".$r["last_name"]."\nMember ID : ".$r["member_id"]."\nemail : ".$r["email"]."\n\nIf this information is incomplete or out of date,\nplease contact the steering committee soon \nto update your records.\n\nTriLUG Steering Committee\nhttp://www.trilug.org/contact\n";
	$mailed_id = mail($r["email"],"Your TriLUG membership information", $message,"From: Triangle Linux Users Group <sysadmin@trilug.org>\nReply-to: Triangle Linux Users Group <sysadmin@trilug.org>");
	if ($mailed_id) {
		echo "succeeded";
	} else {
		echo "failed";
	}
echo "</p>\n";
?>
