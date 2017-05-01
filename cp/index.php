<?php require_once('layout/header.php'); ?>

<?php $title = 'Manage subscribers to ' . get_company_info('name') . ' newsletter:'; ?>

<div class="container">
    <div class="starter-template">
        <h1><?php echo $title; ?></h1>
        <p class="lead">
            <?php echo get_subscriber_info(); ?>
        </p>
        <pre><?php
            $dir = dirname(__FILE__);
            echo "Full path to this dir: " . $dir . "\n";
            echo "Full path to a .htpasswd file in this dir: " . $dir . "/.htpasswd";
            ?>
        </pre>
    </div>

    <hr>

    <?php footer(); ?>

</div> <!-- /container -->

<?php require_once('layout/footer.php'); ?>
