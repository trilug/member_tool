<?php
// Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
// Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

// Updated 2018-06-01 by BDMcC
?>

    <h1>List all members</h1>

    <p>Emailing membership information to everyone.</p>

<?php

// create an sql query and execute it
$sql = "SELECT *
            FROM member_list
            ORDER BY last_name, first_name";
/*
    // test query
    $sql = "SELECT *
            FROM member_list WHERE member_group = 'steer'
            ORDER BY last_name, first_name";
*/

// list each member
echo "<ol>";

try {
    foreach ($pdo->query($sql) as $r ) {

        include "./email.inc";

    }
} catch (PDOException $pe) {
    echo "SQL Error: " . $pe->getMessage();
    die();
}
echo "</ol>";

