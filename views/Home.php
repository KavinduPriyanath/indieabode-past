<?php

include 'includes/homenavbar.php';

?>

<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
    <script src="public/js/navbar.js"></script>
<?php } else { ?>
    <script src="public/js/navbarcopy.js"></script>
<?php } ?>