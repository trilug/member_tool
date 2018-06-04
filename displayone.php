<?php
// Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
// Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

// Updated 2018-06-01 by BDMcC


if (!$id) {

    // error
    $error = "This function requires an ID for input.";
    include "./error.inc";

} else {

    // create an sql query and execute it
    $sql = "SELECT *
                FROM member_list
                WHERE member_id = $id";

    foreach( $pdo->query($sql) as $r ) {

        // display the result
        include "./displayone.inc";

    }

}
