<?php

session_start();

require '../db/database.php';

$allowed_exts = array("jpg", "jpeg", "png");
$foreignKey = $_SESSION['id'];
$gamesSql = "SELECT * FROM freegame WHERE gameDeveloperID = '$foreignKey'";
$result = mysqli_query($conn, $gamesSql);

$games = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['submit'])) {

    // $date = date('Y-m-d H:i:s');
    $devLogTitle = $_POST['title'];
    $devTagline = $_POST['tagline'];
    $devLogContent = $_POST['devLog-details'];
    $devVisibility = $_POST['dev-visibility'];
    $type = $_POST['type'];
    $gameID = $_POST['game'];



    //upload cover photo
    $devlog_cover_img_name = $_FILES['cover-img']['name'];
    $devlog_cover_img_temp_name = $_FILES['cover-img']['tmp_name'];

    $devlog_cover_img_ext = strtolower(pathinfo($devlog_cover_img_name, PATHINFO_EXTENSION));

    if (in_array($devlog_cover_img_ext, $allowed_exts)) {
        $new_devlog_cover_img_name = "Cover-" . $devLogTitle . '.' . $devlog_cover_img_ext;
        $devlog_cover_upload_path = '../uploads/games/devlogs/cover/' . $new_devlog_cover_img_name;
        move_uploaded_file($devlog_cover_img_temp_name, $devlog_cover_upload_path);
    }


    //upload to database
    $sql = "INSERT INTO devlog(description,name,gameDeveloperID,Visibility,Type, devlogCoverImg, gameID, Tagline) 
                VALUES ('$devLogContent','$devLogTitle','$foreignKey','$devVisibility','$type', '$new_devlog_cover_img_name', '$gameID', '$devTagline')";



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
    <?php include('../src/css/gamejamform.css') ?>
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
                    <span class="details">Games</span>
                    <select id="game" name="game">
                        <option>None</option>
                        <?php foreach ($games as $game) { ?>
                            <option value="<?= $game['gameID']; ?>"><?= $game['gameName']; ?></option>
                        <?php } ?>
                    </select><br><br>
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

            <div class="right">

                <div class="card-box">
                    <span class="details">Upload Cover Image</span>
                    <input type="file" accept=".jpg,.jpeg,.png" placeholder="Upload Cover Image" name="cover-img">
                </div>
            </div>


            <div class="button">
                <input type="submit" name="submit" value="Save & View Page">
            </div>
    </form>

</div>



<style>
    <?php include('../src/css/footer.css') ?>
</style>

<?php include('../components/footer.php') ?>

<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
    <script src="../src/js/navbar.js"></script>
<?php } else { ?>
    <script src="../src/js/navbarcopy.js"></script>
<?php } ?>


</html>