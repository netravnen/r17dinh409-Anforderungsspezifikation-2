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
<?php DB::debugMode(); ?>
<?php echo get_subscriber_info(); ?>


<?php require_once('./footer.php'); ?>
