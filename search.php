<?php
# Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
# Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

    if (! $search_string) {

        # display the search form
        include "./search.inc";

    }

    else {

        # great, create an sql update query and execute it
        $sql = "SELECT *
                FROM member_list
                WHERE $search_field $search_operator '$search_string'
                ORDER BY last_name, first_name";
        $rows = mysql_query ($sql);

        # uncomment for debuggin' purposes
        # echo mysql_errno().": ".mysql_error()."<BR>";  echo"<pre>$sql</pre>";

        # display the results
        include "results.inc";

        # list each member
        echo "<ol>";
        while ($r = mysql_fetch_array($rows)) {

            include "./displayall.inc";

        }
        echo "</ol>";

    }

?>

