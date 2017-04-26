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
    if ($what == 'phone') {
        return constant('PHONE');
    } elseif ($what == ('location' || 'address')) {
        return constant('LOCATION');
    } elseif ($what == 'email') {
        return constant('EMAIL');
    } elseif ($what == ('www' || 'web')) {
        return constant('WEBSITE');
    } elseif ($what == 'name') {
        return constant('COMPANY_NAME');
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
