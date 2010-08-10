









<?
///////////////////////////////////////////////////////////////////////////////
// php4-1-0_varfix.php January 09, 2001
// by Tom Harrison (thetomharrison@hotmail.com)
//
// According the the PHP Changelog, the version 4.1.0 release of PHP contains
// a drastic change in the way form, cookie and server values are made
// available. Instead of the old way 
// (file.php?myvar=foobar yielding $myvar = "foobar"), such values are only 
// assigned to associative arrays ($_GET, $_POST, $_COOKIE, $_SERVER 
// and $_ENV). This has the effect of not only deprecating the $HTTP_*_VARS 
// arrays and $fieldname = "fieldvalue" variables, but also
// voiding hundreds, if not thousands of existing web applications. As of
// 4.1.1, the $HTTP_*_VARS variables still exist, but the
// $fieldname = "fieldvalue" variables are completely gone. 
//
// In an effort to preserve backwards compatability, this script cycles through
// these new structures and creates variables out of the field values. This 
// means if you include this script at the top of your own scripts and run them
// on php 4.1.0, $yourformvalue or $yourcookievalue will contain the value 
// you're expecting instead of nothing (as is the case if you ran your script 
// without some kind of fix like this).
//
// The entire situation can be avoided by enabling register_globals. In 4.1.0, 
// register_globals is deprecated but still on by default. In 4.1.1 however, it
// is off by default. This snippet is intended for those who don't have control
// over php's settings (such as virtually hosted sites) and need a quick fix
// while they transition their scripts to this arguably more secure method
// of making data available.
//
// For more information, see http://www.php.net/ChangeLog-4.php
///////////////////////////////////////////////////////////////////////////////

if (isset($_REQUEST)) {
    while(list($varname, $varvalue) = each($_REQUEST)) { $$varname = $varvalue; }
}
if (isset($_SERVER)) { 
    while (list($varname, $varvalue) = each($_ENV)) { $$varname = $varvalue; }
    while (list($varname, $varvalue) = each($_SERVER)) { $$varname = $varvalue; }
}

/*
There is no use yet for this function, but is included in anticipation of the 
possibility of the $HTTP_*_VARS being fully deprecated.

function create_HTTP_VARS($type)
{
    $temp = array();
    switch(strtoupper($type))
    {
        case 'POST':   $temp2 = &$_POST;   break;
        case 'GET':    $temp2 = &$_GET;    break;
        case 'COOKIE': $temp2 = &$_COOKIE; break;
        case 'SERVER': $temp2 = &$_SERVER; break;
        case 'ENV':    $temp2 = &$_ENV;    break;
        default: return 0;
    }
    while (list($varname, $varvalue) = each($temp2)) { 
        $temp[$varname] = $varvalue;
    }
    return ($temp);
}

if (!isset($HTTP_POST_VARS)) { 
    $HTTP_POST_VARS = create_HTTP_VARS('POST');
    $HTTP_GET_VARS = create_HTTP_VARS('GET');
    $HTTP_COOKIE_VARS = create_HTTP_VARS('COOKIE');
    $HTTP_SERVER_VARS = create_HTTP_VARS('SERVER');
    $HTTP_ENV_VARS = create_HTTP_VARS('ENV');
}
*/
?>



