<?php
/**
 * Created by PhpStorm.
 * User: cdh
 * Date: 25-04-2017
 * Time: 10:57
 */
?>

<?php require_once('./header.php'); ?>
<?php require_once './lib/meekrodb.2.3.class.php'; ?>

<div class="container">
    <div class="starter-template">
        <h1>Get <?php echo get_company_info('name'); ?> Newsletter Subscribers:</h1>
        <?php DB::debugMode(); ?>
        <p class="lead">
            <?php echo get_subscriber_info(); ?>
    </div>

</div><!-- /.container -->

<?php require_once('./footer.php'); ?>
