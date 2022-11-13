<?php

session_start();

require '../db/database.php';

$allowed_exts = array("jpg", "jpeg", "png");

if (isset($_POST['submit'])) {
    $gamejamTitle = $_POST['title'];
    $gamejamTagline = $_POST['tagline'];
    $jamStartDate = $_POST['Sdate'];
    $jamEndtDate = $_POST['Edate'];
    $jamVEndDate = $_POST['V_E_Date'];
    $jamRanking = $_POST['ranking'];
    $jamContent = $_POST['game-details'];
    $jamVoters = $_POST['voters'];
    $jamCriteria = $_POST['criteria'];
    $jamVisibility = $_POST['visibility'];
    $jamTwitterHashtag = $_POST['twitter'];
    $jamParticipants = $_POST['Max'];
    $foreignKey = $_SESSION['id'];

    //upload cover photo
    $jam_cover_img_name = $_FILES['coverImg']['name'];
    $jam_cover_img_temp_name = $_FILES['coverImg']['tmp_name'];

    $jam_cover_img_ext = strtolower(pathinfo($jam_cover_img_name, PATHINFO_EXTENSION));

    if (in_array($jam_cover_img_ext, $allowed_exts)) {
        $new_jam_cover_img_name = "Cover-" . $gamejamTitle . '.' . $jam_cover_img_ext;
        $jam_cover_upload_path = '../uploads/gamejams/covers/' . $new_jam_cover_img_name;
        move_uploaded_file($jam_cover_img_temp_name, $jam_cover_upload_path);
    }

    if (isset($_POST['Rstrictions1'])) {
        $jamRestrictions1 = "1";
    } else {
        $jamRestrictions1 = "0";
    }


    //upload to database
    $sql = "INSERT INTO gamejam (jamTitle,jamTagline,submissionStartDate,submissionEndDate,votingEndDate,jamType,jamContent,jamVoters,canJoinAfterStarted,jamCriteria,jamVisibility,jamTwitter,maxParticipants,jamCoverImg,jamHostID) 
                VALUES ('$gamejamTitle','$gamejamTagline','$jamStartDate','$jamEndtDate','$jamVEndDate','$jamRanking',' $jamContent','$jamVoters','$jamRestrictions1','$jamCriteria','$jamVisibility','$jamTwitterHashtag','$jamParticipants','$new_jam_cover_img_name','$foreignKey')";



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

<div class="form-container">

    <form method="POST" id="upload-jam" class="input-upload-group" enctype="multipart/form-data">
        <div class="card-details">
            <div class="left">
                <div class="card-box">
                    <span class="details">Title</span>
                    <input type="text" name="title">
                </div>

                <div class="card-box">
                    <span class="details">Tagline</span>
                    <p>One line summery of the jam</p>
                    <input type="text" name="tagline" placeholder="Optional">
                </div>

                <div class="circle-form">
                    <span class="circle-title">Type</span>
                    <div class="category">
                        <input type="radio" name="ranking" value="Non-Ranked" />Non-Ranked - Entries are just submitted<br>
                        <input type="radio" name="ranking" value="Ranked" />Ranked - Entries are voted on and ranked
                    </div>
                </div>

                <div class="card-box">
                    <span class="details">Start Date & Time</span>
                    <input type="datetime_local" name="Sdate" placeholder="yyyy/mm/dd 00:00">
                </div>

                <div class="card-box">
                    <span class="details">End Date & Time</span>
                    <input type="datetime_local" name="Edate" placeholder="yyyy/mm/dd 00:00">
                </div>

                <div class="card-box">
                    <span class="details">Voting End Date & Time</span>
                    <input type="datetime_local" name="V_E_Date" placeholder="yyyy/mm/dd 00:00">
                </div>

                <div class="card-box">
                    <span class="details">Content</span>
                    <p>Makes up the content of your jam page</p>
                    <textarea id="game-details" name="game-details" rows="9" cols="64"></textarea><br><br>
                </div>

                <h3>Voter Settings</h3>
                <div class="circle-form">
                    <span class="circle-title">Who can vote on entries?</span>
                    <div class="category">
                        <input type="radio" name="voters" value="Submitters Only">Submitters Only - Only ones who joined the game jam could vote.<br>
                        <input type="radio" name="voters" value="Moderators Only">Moderators Only - Only ones added as moderators could vote.<br>
                        <input type="radio" name="voters" value="Public">Public - Anyone can vote.
                    </div>
                </div>

                <div class="box-form">
                    <span class="box-details">Rstrictions</span>
                    <div class="checkboxT">
                        <input type="checkbox" name="Rstrictions1">Can join once game-jam started<br>
                        <input type="checkbox" name="Rstrictions2">Limit Participant count
                    </div>
                    <p>Max. Participant Count</p>
                    <input type="number" name="Max" placeholder="eg: 20">
                </div>

                <h3>Jam Settings</h3>
                <div class="card-box">
                    <span class="details">Criteria</span>
                    <p>How should the entries of the jam should be ranked.</p>
                    <input type="text" name="criteria">
                </div>

                <div class="card-box">
                    <span class="details">Twitter Hashtag</span>
                    <p>Submitters will be prompted to tweet this tag after submitting.</p>
                    <input type="text" name="twitter" placeholder="Optional">
                </div>


                <div class="circle-form">
                    <span class="circle-title">Visibility</span>
                    <p>Decide when is your page ready for the public.</p>
                    <div class="category">
                        <input type="radio" name="visibility" value="Draft">Draft - Only those who are added as moderators can view the page.<br>
                        <input type="radio" name="visibility" value="Public">Public - Anyone can view the page, you can enable this after you've saved.
                    </div>
                </div>
            </div>

            <div class="right">

                <div class="card-box">
                    <span class="details">Upload Cover Image</span>

                    <input type="file" name= "coverImg" >
                </div>

                </div>
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