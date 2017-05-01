<?php require_once($_SERVER['DOCUMENT_ROOT'] . 'layout/header.php'); ?>

<?php $title = 'Manage subscribers to ' . get_company_info('name') . ' newsletter:'; ?>

<!--
<?php
$dir = dirname(__FILE__);
echo "<p>Full path to this dir: " . $dir . "</p>";
echo "<p>Full path to a .htpasswd file in this dir: " . $dir . "/.htpasswd" . "</p>";
?>
-->
<div class="container">
    <div class="starter-template">
        <h1><?php echo $title; ?></h1>
        <p class="lead">
            <?php echo get_subscriber_info(); ?>
    </div>

    <hr>

    <?php footer(); ?>

</div> <!-- /container -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . 'layout/footer.php'); ?>
