<?php
# Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
# Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

// Updated 2018-06-01 by BDMcC
?>

    <h1>List all members</h1>

    <p>This is a list of the entire membership.</p>

<?php

# create an sql query and execute it
$sql = "SELECT *
            FROM member_list
            ORDER BY last_name, first_name";

echo "<ol>";

try {
    foreach ($pdo->query($sql) as $r) {

        include "./displayall.inc";

    }
} catch (PDOException $pe) {
    echo "SQL Error: " . $pe->getMessage();
    die();
}

echo "</ol>";

# list each member
//    echo "<!-- got ".mysqli_num_rows($rows)." -->";






