<?php

// Use function to replace chars deemed illegal in output
/**
 * @param $str
 * @return string
 */
function replace_illegal_chars($str)
{
    return htmlentities($str, $flags = ENT_COMPAT | ENT_XML);
}

function get_db_connection()
{
    DB::$user = constant('DB_USER');
    DB::$password = constant('DB_PASSWD');
    DB::$dbName = constant('DB_NAME');
    DB::$host = constant('DB_HOST');
    DB::$port = constant('DB_PORT');
    DB::$connect_options = array(MYSQLI_OPT_CONNECT_TIMEOUT => 10);
}
