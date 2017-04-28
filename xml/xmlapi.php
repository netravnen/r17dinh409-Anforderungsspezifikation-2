<?php

/*
 * Set content-type
 */
header("Content-type: text/xml");

require_once('../lib/meekrodb/2.3/meekrodb.2.3.class.php');
require_once('../db-config-dummy.php');
require_once('../include/functions.api.php');

/*
 * DB connection info
 */
DB::$user = constant('DB_USER');
DB::$password = constant('DB_PASSWD');
DB::$dbName = constant('DB_NAME');

/*
 * Query the actual db table for rows
 */
$ID_name = $_GET['input'];
 /* Query the actual db table for rows
 */
if (isset($_GET['user_id'])) { // Lookup a row by column id
    $results = DB::queryFirstRow("SELECT * FROM newsletter_subscribers WHERE id=%s", $_GET['user_id']);
} elseif (isset($_GET['email_addr'])) { // Lookup a row by column email
    $results = DB::queryFirstRow("SELECT * FROM newsletter_subscribers WHERE email=%s", $_GET['email_addr']);
} else { // Fallback behaviour goes here
    $results = DB::query("SELECT * FROM newsletter_subscribers");
}

/*
 * Begin Actual XML Output
 */
$xml_output = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml_output .= '<entries>' . "\n";

/*
 * Go through the rows and append to string $xml_output
 */
foreach ($results as $row) {
    $xml_output .= "\t" . '<entry>' . "\n";
    $xml_output .= "\t\t" . '<email>' . replace_illegal_chars($row['email']) . '</email>' . "\n";
    $xml_output .= "\t\t" . '<text>' . replace_illegal_chars($row['first_name']) . ' ' . replace_illegal_chars($row['last_name']) . '</text>' . "\n";
    $xml_output .= "\t" . '</entry>' . "\n";
}

/*
 * END of XML output
 */
$xml_output .= '</entries>';

/*
 * Print the whole lot
 */
echo $xml_output;
