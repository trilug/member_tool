<?php

    # index.php - a trilug membership list

    # Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
    # Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

    # 08/09/10 - make "telephone" field optional,
    #          - formatting (tabs/spaces, CR/LF),
    #          - store source code in a local 'git' repository.

    # 04/05/09 - Restored to newly-built server (pilot).

    # 05/05/06 - changed header.inc to add spacing between commands
    # so we don't accidentally email the whole membership (again)

    # 05/02/02 - fixes for the new php - KES
    # 12/07/00 - finished first pass at documentation
    # 10/27/00 - changed member_id to the date
    # 10/28/00 - added postal address information,
    #            changed age to year of birth, and started a manual
    # 10/22/00 - added edit, delete, and search
    # 10/21/00 - first investigations


    # define sum constants
    $gDbHost       = "localhost";
    $gDatabase     = "membership";
    $gUsername     = "membership-www";
    $gPassword     = "foobarbaz";
    $gHome         = "http://www.trilug.org/";
    $gDate         = "April 5, 2009";
    $gContactName  = "Member Tool Maintainers";
    $gContactEmail = "member-tool@trilug.org";

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

    # new member record
    elseif ($cmd == "add") {

        include "add.php";

    }

    # display all members
    elseif ($cmd == "displayall") {

        include "./displayall.php";

    }

    # display a member
    elseif ($cmd == "displayone") {

        include "displayone.php";

    }

    # delete record
    elseif ($cmd == "delete") {

        include "delete.php";

    }

    # edit record
    elseif ($cmd == "edit") {

        include "edit.php";

    }

    # search
    elseif ($cmd == "search") {

        include "search.php";

    }

    # email all
    elseif ($cmd == "emailall") {
        include "emailall.php";
    }

    # email
    elseif ($cmd == "email") {
        include "email.php";
    }

    # manual
    elseif ($cmd == "manual") {

        include "manual.inc";

    }

    # unknown command
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
