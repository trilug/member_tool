<?php
# Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
# Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
?>

<h1>List all members</h1>

<p>This is a list of the entire membership.</p>

<?php

    # create an sql query and execute it
    $sql = "SELECT *
            FROM member_list
            ORDER BY last_name, first_name";
    $rows = mysqli_query ($db_conn, $sql) or die("Error getting rows:".mysqli_error());

    # list each member
    echo "<!-- got ".mysqli_num_rows($rows)." -->";
    echo "<ol>";
    while ($r = mysqli_fetch_array($rows)) {

        include "./displayall.inc";

    }
    echo "</ol>";

?>




