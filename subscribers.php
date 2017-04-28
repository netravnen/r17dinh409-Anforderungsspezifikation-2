<?php require_once('./header.php'); ?>

<?php $title = 'Get ' . get_company_info('name') . ' Newsletter Subscribers:'; ?>

<div class="container">
    <div class="starter-template">
        <h1><?php echo $title; ?></h1>
        <p class="lead">
            <?php echo get_subscriber_info(); ?>
    </div>

    <hr>

    <?php footer(); ?>

</div> <!-- /container -->

<?php require_once('./footer.php'); ?>
