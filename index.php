<?php
    # index.php - a trilug membership list

    # Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
    # Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

    # Include non-version-controlled configuration file
    include("config.inc");

    # let's get started; no editing should be necessary below this line

    include("php4-1-1_varfix.php");

    # open a connection to the database server
    $db_conn = mysql_connect("$gDbHost","$gUsername","$gPassword") or
      die("Cound not open database : ".mysql_error());
    $the_db = mysql_select_db("$gDatabase",$db_conn) or
      die("Mysql Error : ".mysql_error());
    # display the header
    include "header.inc";

    echo "<!-- the command is : $cmd  -->\n";
    # process the command
    if (! $cmd) {
        # display the home page
        include "./home.inc";
    }
    elseif ($cmd == "add") {
        include "add.php";
    }
    elseif ($cmd == "displayall") {
        include "./displayall.php";
    }
    elseif ($cmd == "displayone") {
        include "displayone.php";
    }
    elseif ($cmd == "delete") {
        include "delete.php";
    }
    elseif ($cmd == "edit") {
        include "edit.php";
    }
    elseif ($cmd == "search") {
        include "search.php";
    }
    elseif ($cmd == "emailall") {
        include "emailall.php";
    }
    elseif ($cmd == "email") {
        include "email.php";
    }
    elseif ($cmd == "manual") {
        include "manual.inc";
    }
    else {
        # error
        $error = "Unknown value for cmd ($cmd).";
        include "error.inc";
    }

    # display the footer
    include "footer.inc";

    # close the database connection
    mysql_close($db_conn);

?>
