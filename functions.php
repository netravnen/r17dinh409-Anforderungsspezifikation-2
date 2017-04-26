<?php
/**
 * Created by PhpStorm.
 * User: cdh
 * Date: 25-04-2017
 * Time: 10:50
 */

/*
 * Required for running DB:queries against the database
 */
require_once './lib/meekrodb/2.3/meekrodb.2.3.class.php';

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
        return '';
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
/*
function get_browser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version = '';

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    } elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }

    // Next get the name of the useragent yes seperately and for good reason
    if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    } elseif (preg_match('/Firefox/i', $u_agent)) {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    } elseif (preg_match('/Chrome/i', $u_agent)) {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    } elseif (preg_match('/Safari/i', $u_agent)) {
        $bname = 'Apple Safari';
        $ub = "Safari";
    } elseif (preg_match('/Opera/i', $u_agent)) {
        $bname = 'Opera';
        $ub = "Opera";
    } elseif (preg_match('/Netscape/i', $u_agent)) {
        $bname = 'Netscape';
        $ub = "Netscape";
    }

    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
        ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }

    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
            $version = $matches['version'][0];
        } else {
            $version = $matches['version'][1];
        }
    } else {
        $version = $matches['version'][0];
    }

    // check if we have a number
    if ($version == null || $version == "") {
        $version = "?";
    }

    return array(
        'userAgent' => $u_agent,
        'name' => $bname,
        'version' => $version,
        'platform' => $platform,
        'pattern' => $pattern
    );
}
*/