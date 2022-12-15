<?php

session_start();

require '../db/database.php';

$allowed_exts = array("jpg", "jpeg", "png");

if (isset($_POST['submit'])) {

    // $date = date('Y-m-d H:i:s');
    $devLogTitle = $_POST['title'];
    // $devTagline = $_POST['tagline'];
    $devLogContent = $_POST['devLog-details'];
    $devVisibility = $_POST['dev-visibility'];
    $type = $_POST['type'];
    $tagline = $_POST['tagline'];

    $foreignKey = $_SESSION['id'];

    // //upload cover photo


    $ss_img_name = $_FILES['devlog_ss']['name'];
    $ss_img_temp_name = $_FILES['devlog_ss']['tmp_name'];

    $ss_img_ext = strtolower(pathinfo($ss_img_name, PATHINFO_EXTENSION));

    if (in_array($ss_img_ext, $allowed_exts)) {
        $new_ss_img_name = "SS-" . $devLogTitle . '.' . $ss_img_ext;
        $ss_upload_path = '../uploads/devlog/' . $new_ss_img_name;
        move_uploaded_file($ss_img_temp_name, $ss_upload_path);
    }


    // $gamesQuery = "SELECT * FROM freegame WHERE gameDeveloperID = '$foreignKey'";
    // $gamesD = mysqli_query($conn, $gamesQuery);



    // -- upload to database
    $sql = "INSERT INTO devlog (description,name,Visibility,Type,Tagline,devlogImg) VALUES ('$devLogContent','$devLogTitle','$devVisibility','$type','$tagline','$new_ss_img_name')";



    if (mysqli_query($conn, $sql)) {
        echo "Upload successful!";
    } else {
        echo "error";
    }
}


?>



<!DOCTYPE html>

<html>
<style>
    <?php include('../src/css/navbar.css') ?>
</style>

<?php include('../components/navbar.php') ?>

<style>
    <?php include('../src/css/devlogform.css') ?>
</style>

<h1>Devlog Form</h1>

<div class="form-container">

    <form method="POST" id="upload-game" class="input-upload-group" enctype="multipart/form-data">
        <div class="card-details">
            <div class="left">
                <div class="card-box">
                    <span class="details">Title</span>
                    <input type="text" name="title">
                </div>

                <div class="card-box">
                    <span class="details">Tagline</span>
                    <p>One line summery of the devlog</p>
                    <input type="text" name="tagline" placeholder="Optional">
                </div>


                <div class="card-box">

                    <span class="details">Type</span>
                    <select id="type" name="type">
                        <option value="Game Design">Game Design</option>
                        <option value="Tutorial">Tutorial</option>
                        <option value="Major Update">Major Update</option>

                    </select><br><br>

                </div>


                <div class="card-box">
                    <span class="details">Content</span>
                    <p>Write your content</p>
                    <textarea id="devLog-details" name="devLog-details" rows="9" cols="64"></textarea><br><br>
                </div>

                <div class="card-box">
                    <span class="details">Game Name</span>
                    <p>Game related with the devlog</p>
                    <input type="text" name="gameName" placeholder="Optional">
                </div>


                <div class="circle-form">
                    <span class="circle-title">Visibility</span>
                    <p>Decide when is your page ready for the public.</p>
                    <div class="category">
                        <input type="radio" id="dev-draft" name="dev-visibility" value="draft">
                        <label for="dev-draft">Draft - Only those who can edit the project can view the page</label><br>
                        <input type="radio" id="dev-public" name="dev-visibility" value="public">
                        <label for="dev-public">Public - Anyone can view the page, you can enable this after you've saved</label><br>
                    </div>
                </div>
            </div>
            <div class="button">
                <input type="submit" name="submit" value="Save & View Page">
            </div>
            <div class="right">

                <div class="card-box">
                    <p>These will appear on your asset's page. Optional but highly recommended. Upload 3 to 5 for best results</p><br>
                    <input type="file" id="devlog_ss" name="devlog_ss" accept=".jpg,.jpeg,.png" multiple="multiple"><br><br>
                </div>
            </div>

        </div>


    </form>
</div>



<style>
    <?php include('../src/css/footer.css') ?>
</style>

<?php include('../components/footer.php') ?>

<script>
    <?php include('../src/js/navbar.js') ?>
</script>


</html>