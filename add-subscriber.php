<?php
/**
 * Created by PhpStorm.
 * User: cdh
 * Date: 26-04-2017
 * Time: 15:14
 */
?>

<?php require_once('./header.php'); ?>

<?php
if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['emailAddress'])) {
    add_subscriber($_POST['firstName'], $_POST['lastName'], $_POST['emailAddress']);
    return;
}
?>

<?php $title = 'Subscribe to ' . get_company_info('name') . ' newsletter:'; ?>

<div class="container">
    <div class="starter-template">
        <h1><?php echo $title; ?></h1>
        <form name="form1" method="post" action="">
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName">
            </p>
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName">
            </p>
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
