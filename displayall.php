<h1>List all members</h1>

<p>This is a list of the entire membership.</p>

<?php

    # create an sql query and execute it
    $sql = "SELECT *
            FROM member_list
            ORDER BY last_name, first_name";
    $rows = mysql_query ($sql) or die("Error getting rows:".mysql_error());

    # list each member
    echo "<!-- got ".mysql_num_rows($rows)." -->";
    echo "<ol>";
    while ($r = mysql_fetch_array($rows)) {

        include "./displayall.inc";

    }
    echo "</ol>";

?>




