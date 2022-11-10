<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<?php include("components/navbar.php"); ?>

<!--Including Home Content-->

<style>
    <?php include('src/css/home.css'); ?>
</style>
<?php include("pages/home.php"); ?>

<!--Including Footer-->

<style>
    <?php include('src/css/footer.css'); ?>
</style>
<?php include("components/footer.php"); ?>


<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
    <script src="src/js/navbar.js"></script>
<?php } else { ?>
    <script src="src/js/navbarcopy.js"></script>
<?php } ?>

</body>

</html>