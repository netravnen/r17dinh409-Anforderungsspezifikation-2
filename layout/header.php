<?php
// Set to true if the CP is loaded.
if (explode('/', $_SERVER['REQUEST_URI'])[1] == 'cp') {
    $_cp = true;
} else {
    $_cp = false;
}

// Go up 1-level if CP is loaded
if ($_cp == true) {
    $basepath = '../';
} else {
    $basepath = '';
}

// Required files to be loaded
require_once($basepath . 'config/config.php');
require_once($basepath . 'classes/meekrodb.2.3.class.php');
require_once($basepath . 'includes/functions.php');

// Load functions specific to CP
if ($_cp == true) {
    require_once($basepath . 'includes/functions.cp.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- prevent most search engine web crawlers from indexing -->
    <meta name="robots" content="noindex">

    <!-- Bootstrap -->
    <link href="/lib/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* File: Jumbotron.css */
        /* Move down content because we have a fixed navbar that is 50px tall */
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>

    <!-- Custom CSS -->
    <link href="/lib/bootstrap/3.3.7/css/the-big-picture.css" rel="stylesheet">
</head>

<body class="<?php if (is_home()) {
    echo 'full';
} ?>">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo constant('HOME'); ?>"><?php echo get_company_info('name'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">About<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/about.php">About <?php echo get_company_info('name'); ?></a></li>
                        <li><a href="/contact-us.php">Contact <?php echo get_company_info('name'); ?></a></li>
                    </ul>
                <li><a href="/campaigns.php">Campaigns</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">API<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/add-subscriber.php">Subscribe to newsletter</a></li>
                        <li><a href="/remove-subscriber.php">Unsubscribe from newsletter</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><?php $ua = getBrowser();
                        echo $ua['name']; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a target="_blank" href="<?php echo get_ext_link('asana'); ?>">Asana Workspace</a></li>
                        <li><a target="_blank" href="<?php echo get_ext_link('github'); ?>">GitHub</a></li>
                    </ul>
                </li>
                <li><a href="#"><?php if (isset($_cp) && $_cp == true) {
                            echo 'Control Panel';
                        } ?></a></li>
            </ul>
        </div><!--/.nav - collapse-->
    </div>
</nav>
