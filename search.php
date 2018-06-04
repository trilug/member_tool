<?php
// Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
// Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

// Updated 2018-06-01 by BDMcC



if (!$search_string) {

    // display the search form
    include "./search.inc";

} else {

    // great, create an sql update query and execute it
    $sql = "SELECT *
                FROM member_list
                WHERE $search_field $search_operator '$search_string'
                ORDER BY last_name, first_name";

    // uncomment for debuggin' purposes
    // echo mysql_errno().": ".mysql_error()."<BR>";  echo"<pre>$sql</pre>";

    // display the results
    include "results.inc";

    // list each member
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

}

