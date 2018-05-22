<?php
# Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
# Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)
?>

<h1>List all members</h1>

<p>Emailing membership information to everyone.</p>

<?php

    # create an sql query and execute it
    $sql = "SELECT *
            FROM member_list
            ORDER BY last_name, first_name";
/*
    # test query
    $sql = "SELECT *
            FROM member_list WHERE member_group = 'steer'
            ORDER BY last_name, first_name";
*/
    $rows = mysql_query ($sql);

    # list each member
    echo "<ol>";
    while ($r = mysql_fetch_array($rows)) {

        include "./email.inc";

    }
    echo "</ol>";

?>
