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
function get_subscriber_info($email)
{
    if (!is_numeric($email) && is_string($email) && is_email($email)) {
        require_once './lib/meekrodb.2.3.class.php';
        require_once './db-config-dummy.php';
    } else {
        return;
    }
}