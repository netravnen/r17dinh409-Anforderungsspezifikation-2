<?php
/**
 * Created by PhpStorm.
 * User: cdh
 * Date: 27-04-2017
 * Time: 15:14
 */
?>

<?php require_once('./header.php'); ?>

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

<?php require_once('./footer.php'); ?>
