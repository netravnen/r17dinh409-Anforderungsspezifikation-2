<?php
/**
 * Created by PhpStorm.
 * User: cdh
 * Date: 25-04-2017
 * Time: 10:57
 */
?>

<?php require_once('./header.php'); ?>

<div class="container">
    <div class="starter-template">
        <h1>Get <?php echo get_company_info('name'); ?> Newsletter Subscribers:</h1>
        <p class="lead">
            <?php echo get_subscriber_info(); ?>
    </div>

    <hr>

    <?php footer(); ?>

</div> <!-- /container -->

<?php require_once('./footer.php'); ?>
