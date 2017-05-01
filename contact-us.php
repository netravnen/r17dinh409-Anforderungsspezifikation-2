<?php require_once($_SERVER['DOCUMENT_ROOT'] . 'layout/header.php'); ?>

<div class="container">
    <h1 class="starter-template">Contact Address</h1><br>
    <div class="row text-center">
        <div class="col-sm-3 col-xs-6 first-box">
            <h1><span class="glyphicon glyphicon-earphone"></span></h1>
            <h3>Phone</h3>
            <p><?php echo get_company_info('phone'); ?></p><br>
        </div>
        <div class="col-sm-3 col-xs-6 second-box">
            <h1><span class="glyphicon glyphicon-home"></span></h1>
            <h3>Location</h3>
            <p><?php echo get_company_info('location'); ?></p><br>
        </div>
        <div class="col-sm-3 col-xs-6 third-box">
            <h1><span class="glyphicon glyphicon-send"></span></h1>
            <h3>E-mail</h3>
            <p><?php echo get_company_info('email'); ?></p><br>
        </div>
        <div class="col-sm-3 col-xs-6 fourth-box">
            <h1><span class="glyphicon glyphicon-leaf"></span></h1>
            <h3>Web</h3>
            <p><?php echo get_company_info('website'); ?></p><br>
        </div>
    </div>

    <hr>
    <?php footer(); ?>

</div> <!-- /container -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . 'layout/footer.php'); ?>
