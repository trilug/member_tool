<?php

    echo "<li>" . $r["last_name"] . ", " . $r["first_name"] . " - " . $r["member_id"] . " <small>(<a href=./?cmd=displayone&id=". $r["member_id"] . ">full record</a> | <a href=./?cmd=edit&id=" . $r["member_id"] . ">edit</a> | <a href=./?cmd=delete&id=" . $r["member_id"] . ">delete</a> | <a href=./?cmd=email&id=" .$r["member_id"] . ">email info</a>)</small>";

?>

