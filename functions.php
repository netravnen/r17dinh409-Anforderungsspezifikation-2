<?php
/**
 * Created by PhpStorm.
 * User: cdh
 * Date: 25-04-2017
 * Time: 10:50
 */

/*
 * Return Company information.
 */
function get_company_info($what)
{
    if ($what == 'name') {
        return constant('COMPANY_NAME');
    } elseif ($what == 'phone') {
        return constant('PHONE');
    } elseif ($what == 'location') {
        return constant('LOCATION');
    } elseif ($what == 'email') {
        return constant('EMAIL');
    } elseif ($what == 'website') {
        return constant('WEBSITE');
    } else {
        return;
    }
}

/*
 * Print footer copyright statement.
 */
function footer()
{
    ?>
    <footer>
        <p>&copy; 2005 - <?php echo date('Y'); ?> <?php echo get_company_info('name'); ?> All Rights Reserved.</p>
    </footer>
    <?php
}

/*
 * Validate if string is email.
 */
function is_email($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        return true;
    } else {
        return false;
    }
}

/*
 * Database functions
 */
function get_db_connection()
{
    require_once './lib/meekrodb.2.3.class.php';
    require_once './db-config-dummy.php';
    DB::$user = constant('DB_USER');
    DB::$password = constant('DB_PASSWD');
    DB::$dbName = constant('DB_NAME');
}

function get_subscriber_info()
{
    get_db_connection();

    $results = DB::query("SELECT first_name, last_name, email FROM newsletter_subscribers");

    $return = '';
    foreach ($results as $row) {
        $return .= "Name: " . $row['first_name'] . " " . $row['last_name'] . "\n" .
            "E-mail: " . $row['email'] . "\n" .
            "-------------\n";
    }
    return '<pre>' . $return . '</pre>';
}
