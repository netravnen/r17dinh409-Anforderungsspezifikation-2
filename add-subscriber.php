<?php
/**
 * Created by PhpStorm.
 * User: cdh
 * Date: 26-04-2017
 * Time: 15:14
 */
?>

<?php require_once('./header.php'); ?>

<?php $title = 'Subscribe to ' . get_company_info('name') . ' newsletter:'; ?>

    <div class="container">
        <div class="starter-template">
            <h1><?php echo $title; ?></h1>
            <p class="lead">
                <form action="add_subscriber()" method="post">
            <p>
                <label for="firstName">First Name:</label>
                <input type="text" name="first_name" id="firstName">
            </p>
            <p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="last_name" id="lastName">
            </p>
            <p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="emailAddress">
            </p>
            <input type="submit" value="Submit">
            </form>
        </div>

        <hr>

        <?php footer(); ?>

    </div> <!-- /container -->

<?php require_once('./footer.php'); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    add_subscriber($_POST['first_name'], $_POST['last_name'], $_POST['email']);
}
