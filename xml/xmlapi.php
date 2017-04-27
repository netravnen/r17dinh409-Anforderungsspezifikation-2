<?php

$xml_output = null;

/* Query for DB info */
require_once('../db-config-dummy.php');

/* DB connection info */
$host = "localhost";
$user = constant('DB_USER');
$pass = constant('DB_PASSWD');
$database = constant('DB_NAME');

/* Connect to DB host */
$linkID = mysql_connect($host, $user, $pass) or die("Could not connect to host.");

/* Look for the actual database */
mysql_select_db($database, $linkID) or die("Could not find database.");

/* Query the actual db table for rows */
$query = "SELECT first_name,last_name,email FROM newsletter_subscribers";

/* Store the rows from the DB in $resultID */
$resultID = mysql_query($query, $linkID) or die("Data not found.");

function replace_illegal_chars($str)
{
    return str_replace(array("&", "<", ">", "\"), array(" &#38;", "&#60;", "&#62;", "&#92;"), $str);
}

/* Set content-type */
header("Content-type: text/xml");

/* Begin Actual XML Output */
$xml_output .= '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml_output .= '<entries>' . "\n";

/* Go through the rows and append to string $xml_output */
for ($x = 0; $x < mysql_num_rows($resultID); $x++) {
    $row = mysql_fetch_assoc($resultID);
    $xml_output .= "\t" . '<entry>' . "\n";
    $xml_output .= "\t\t" . '<email>' . replace_illegal_chars($row['email']) . '</email>' . "\n";
    $xml_output .= "\t\t" . '<text>' . replace_illegal_chars($row['first_name']) . ' ' . replace_illegal_chars($row['last_name']) . '</text>' . "\n";
    $xml_output .= "\t" . '</entry>' . "\n";
}

/* END of XML output */
$xml_output .= '</entries>';

/* Print the whole lot */
echo $xml_output;
