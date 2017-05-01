<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/layout/header.php'); ?>

<?php
if (isset($_POST['emailAddress'])) {
    echo remove_subscriber($_POST['emailAddress']);
}
?>
<?php $title = 'Unsubscribe from ' . get_company_info('name') . ' newsletter:'; ?>

<div class="container">
    <div class="starter-template">
        <h1><?php echo $title; ?></h1>
        <form name="form1" method="post" action="">
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="emailAddress" id="emailAddress">
            </p>
            <input type="submit" value="Submit">
        </form>
    </div>

    <hr>

    <?php footer(); ?>

</div> <!-- /container -->

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php'); ?>
