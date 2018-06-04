<?php
    // index.php - a trilug membership list

    // Copyright (c) 2000 Eric Lease Morgan  <eric_morgan@infomotions.com>
    // Licensed under the GNU GPLv3 (http://www.gnu.org/licenses/gpl-3.0.html)

    // Updated 2018-06-01 by BDMcC

    // Include non-version-controlled configuration file
    include("config.inc");

    $cmd = "" ;

    // let's get started; no editing should be necessary below this line

    include("php7_postvars.php");

    // open a connection to the database server
    $dsn = "mysql:host=" . $gDbHost . ";dbname=" . $gDatabase ;
    try {
        $pdo = new PDO( $dsn, (string)$gUsername, (string)$gPassword, array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, ) ) ;
    } catch ( PDOException $pe ) {
        echo "Could not open database : " . $pe->getMessage();
        die() ;
    }
    
    // display the header
    include "header.inc";



    echo "<!-- the command is : $cmd  -->\n";
    // process the command
    if (! $cmd) {
        // display the home page
        include "home.inc";
    }
    elseif ($cmd === "add") {
        include "add.php";
    }
    elseif ($cmd === "displayall") {
        include "displayall.php";
    }
    elseif ($cmd === "displayone") {
        include "displayone.php";
    }
    elseif ($cmd === "delete") {
        include "delete.php";
    }
    elseif ($cmd === "edit") {
        include "edit.php";
    }
    elseif ($cmd === "search") {
        include "search.php";
    }
    elseif ($cmd === "emailall") {
        include "emailall.php";
    }
    elseif ($cmd === "email") {
        include "email.php";
    }
    elseif ($cmd === "manual") {
        include "manual.inc";
    }
    else {
        // error
        $error = "Unknown value for cmd ($cmd).";
        include "error.inc";
    }

    // display the footer
    include "footer.inc";

