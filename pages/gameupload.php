<?php

session_start();



require '../db/database.php';

$new_game_file_name = null;
$new_game_cover_img_name = null;
$noTitleError = null;
$error_msg = null;
$incompatibleFileType = false;
$incompatibleImageType = false;

$allowed_exts = array("jpg", "jpeg", "png");
$screenshots = array();

if (isset($_POST['game-submit'])) {
    $gameName = $_POST['game-title'];
    $gameTagline = $_POST['game-tagline'];
    $foreignKey = $_SESSION['id'];
    $gameClassification = $_POST['game-classification'];
    $gameStatus = $_POST['game-status'];
    $gameDetails = $_POST['game-details'];
    $gameTags = $_POST['game-tags'];
    $gameFeatures = $_POST['game-features'];
    $gameIllustrationVedio = $_POST['game-illustration-vedio'];

    $minGameOS = $_POST['min-game-OS'];
    $minGameProcessor = $_POST['min-game-processor'];
    $minGameMemory = $_POST['min-game-memory'];
    $minGameStorage = $_POST['min-game-storage'];
    $minGameGraphics = $_POST['min-game-graphics'];
    $minGameOther = $_POST['min-game-other'];
    $GameOS = $_POST['game-OS'];
    $GameProcessor = $_POST['game-processor'];
    $GameMemory = $_POST['game-memory'];
    $GameStorage = $_POST['game-storage'];
    $GameGraphics = $_POST['game-graphics'];
    $GameOther = $_POST['game-other'];

    // $gamePricing = 
    // $game =
    $gameVisibility = $_POST['game-visibility'];

    //cover image
    //$cover_img_size = $_FILES['asset-upload-cover-img']['size'];
    $game_cover_img_name = $_FILES['game-upload-cover-img']['name'];
    $game_cover_img_temp_name = $_FILES['game-upload-cover-img']['tmp_name'];

    $game_cover_img_ext = strtolower(pathinfo($game_cover_img_name, PATHINFO_EXTENSION));

    if (in_array($game_cover_img_ext, $allowed_exts)) {
        $new_game_cover_img_name = "Cover-" . $gameName . '.' . $game_cover_img_ext;
        $game_cover_upload_path = '../uploads/games/cover/' . $new_game_cover_img_name;
        move_uploaded_file($game_cover_img_temp_name, $game_cover_upload_path);
    }else if (!in_array($game_cover_img_ext, $allowed_exts) && $game_cover_img_name) {
        $incompatibleImageType = true;
    }

    //Screenshots
    
        //Screenshots
    $ssCount = count($_FILES['game-screenshots']['name']);
    for ($i = 0; $i < $ssCount; $i++) {
        $ssName = $_FILES['game-screenshots']['name'][$i];
        $ssExt = strtolower(pathinfo($ssName, PATHINFO_EXTENSION));
        if (in_array($ssExt, $allowed_exts)) {
    
            $newSSName = "SS-" . $gameName . '-' . $i . '.' . $ssExt;
            $ss_upload_path = '../uploads/games/ss/' . $newSSName;
    
            move_uploaded_file($_FILES['game-screenshots']['tmp_name'][$i], $ss_upload_path);
    
            array_push($screenshots, $newSSName);
        }
    }
    
    // $game_ss_img_name = $_FILES['game-screenshots']['name'];
    // $game_ss_img_temp_name = $_FILES['game-screenshots']['tmp_name'];

    // $game_ss_img_ext = strtolower(pathinfo($game_ss_img_name, PATHINFO_EXTENSION));

    // if (in_array($game_ss_img_ext, $allowed_exts)) {
    //     $new_game_ss_img_name = "SS-" . $gameName . '.' . $game_ss_img_ext;
    //     $game_ss_upload_path = '../uploads/games/ss/' . $new_game_ss_img_name;
    //     move_uploaded_file($game_ss_img_temp_name, $game_ss_upload_path);
    // }

    $screenshotsURL = implode(',', $screenshots);

    //Game File
    $game_file = $_FILES['upload-game']['name'];
    $game_file_size = $_FILES['upload-game']['size'];
    $game_file_temp_name = $_FILES['upload-game']['tmp_name'];

    $game_file_ext = strtolower(pathinfo($game_file, PATHINFO_EXTENSION));

    $allowed_game_types = array("zip", "blend", "rar");

    if (in_array($game_file_ext, $allowed_game_types)) {
        $new_game_file_name = "Game-" . $gameName . '.' . $game_file_ext;
        $game_upload_path = '../uploads/games/file/' . $new_game_file_name;
        move_uploaded_file($game_file_temp_name, $game_upload_path);
    } else if (!in_array($game_file_ext, $allowed_game_types) && $game_file) {
        $incompatibleFileType = true;
    }

    //upload to db
    $sql = "INSERT INTO freegame (gameName, gameTagline, gameDeveloperID, gameCoverImg, gameClassification, gameScreenshots, gameDetails, releaseStatus, gameTags, gameFeatures, gameFile, minOS, minProcessor ,minMemory,minStorage,minGraphics,minOther, recommendOS, recommendProcessor ,recommendMemory,recommendStorage,recommendGraphics,recommendOther,gameVisibility,gameTrailor) VALUES ('$gameName', '$gameTagline', '$foreignKey', '$new_game_cover_img_name', '$gameClassification', '$screenshotsURL', '$gameDetails', '$gameStatus', '$gameTags', '$gameFeatures','$new_game_file_name','$minGameOS','$minGameProcessor','$minGameMemory','$minGameStorage','$minGameGraphics','$minGameOther','$GameOS','$GameProcessor','$GameMemory','$GameStorage','$GameGraphics','$GameOther','$gameVisibility','$gameIllustrationVedio')";

    if ($gameName == null) {
        $error_msg =  "Game Name is required.";
    } else if ($incompatibleFileType) {
        $error_msg = "Incompatible file type";
    } else if ($new_game_file_name == null) {
        $error_msg = "Game file should be added.";
    } else if ($incompatibleImageType) {
        $error_msg = "Image type is not compatible.";
    } else if ($new_game_cover_img_name == null) {
        $error_msg = "Cover Image should be added.";
    } else if (mysqli_query($conn, $sql)) {
        echo "Upload successful!";
    } else {
        echo "error";
    }
    // if (mysqli_query($conn, $sql)) {
    //     echo "Upload successful!";
    // } else {
    //     echo "error";
    // }
}

?>

<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
    <?php
    include('../src/css/navbar.css');
    include('../src/css/upload.css');
    ?>
</style>
<?php include("../components/navbar.php"); ?>

<!--Including Home Content-->
<style>
    <?php include('../src/css/assets.css'); ?>
</style>

<div class="outer-box">
    <div class="form-box">
        <div class="upload-topic">
            Create a new project
        </div>
        <hr>
        <div class="btn-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" id="game-active" style="background-color:#749ABD">Game</button>
            <button type="button" class="toggle-btn" onclick="uploadAsset()">Assets</button>
        </div><br>

        <form method="POST" id="upload-game-form" class="input-upload-group" enctype="multipart/form-data">
            
            <?php if ($error_msg != null) { ?>
                <div class="errors-display" id="errors">
                    <?php echo "*" . $error_msg; ?>
                </div>
            <?php } ?>
            <div class="upload-row">
                <div class="upload-col">

                    <label id="game-title" for="game-title">Title</label><span>*</span><br>
                    <input type="text" name="game-title" id="game-title" placeholder="game title" required /><br><br>

                    <label id="game-tagline" for="game-tagline">Tagline</label><br>
                    <p>Shown when we link your game to other pages</p>
                    <input type="text" name="game-tagline" id="game-tagline" placeholder="Short Description about your game" /><br><br>

                    <!--classification details-->
                    <label id="game-classification" for="game-classification">Classification</label><span>*</span><br>
                    <p>Choose the category your game suits the most</p>
                    <select id="game-classification" name="game-classification" required>
                        <option value="adventure">Adventure Games</option>
                        <option value="action" selected>Action Games</option>
                        <option value="RPG">RPG Games</option>
                        <option value="racing">Racing Games</option>
                        <option value="simulation">Simulation Games</option>
                        <option value="strategy">Strategy Games</option>
                    </select><br><br>

                    <!--Releasing status-->
                    <label id="game-status" for="game-status">Release Status</label><span>*</span><br>
                    <select id="game-status" name="game-status" required>
                        <option value="released" selected>Released</option>
                        <option value="early access">Early Access</option>
                        <option value="upcoming">Upcoming</option>
                    </select><br><br>

                    <label id="game-details" for="game-details">Details</label><br>
                    <p id="p">This will be the content of your game page</p><br>
                    <textarea id="game-details" name="game-details" rows="9" cols="50"></textarea><br><br>

                    <label id="game-tags" for="game-tags">Tags</label><br>
                    <p id="p">Keywords that someone would search to find your game</p><br>
                    <input type="text" id="game-tags" name="game-tags" /> <br><br>

                    <!--
                    <label id="game-price" for="game-price">Pricing</label><br><br>
                    <input type="radio" id="game-free" name="game-price" value="free" checked>
                    <label for="game-free">Free</label><br>
                    <input type="radio" id="game-paid" name="game-price" value="paid">
                    <label for="game-paid">Paid</label><br>
                    <p id="p">Minimum Price - Set to $0 for free games</p>
                    <input type="text" id="game-price-val" name="game-price-val" /><br><br>
            -->
                    <label id="game-price" for="game-price">Pricing</label><br>
                    <input type="radio" id="game-free" name="game-price" value="free" checked>
                    <label for="game-free">Free</label><br>
                    <input type="radio" id="game-paid" name="game-price" value="paid">
                    <label for="game-paid">Paid</label><br>
                    <p id="p">Minimum Price - Set to $0 for free games</p>
                    <input type="text" id="game-price-val" name="game-price-val" /><br><br>

                    <label id="game-features" for="game-features">Features</label><br>
                    <p id="p">Special features your game has that players would prefer</p><br>
                    <input type="text" id="game-features" name="game-features"/> <br><br>
                    <!--
                    <label id="upload-game" for="upload-game">Upload Game</label><br>
                    <input type="file" id="upload-game" name="upload-game"><br><br>
-->
                    <label>Game Specification</label><br><br>
                    <div class="game-spec-type">
                        <p class="game-spec-item">Minimum</p>
                        <p class="game-spec-item">Recommended</p><br><br>
                    </div>
                    <div class="game-spec-type">
                        <div class="game-spec-item-details">


                            <label id="min-game-OS" for="min-game-OS">OS</label><span>*</span><br>
                            <input type="text" name="min-game-OS" id="min-game-OS" placeholder="Windows 10" required /><br><br>
                            <label id="min-game-processor" for="min-game-processor">Processor</label><span>*</span><br>
                            <input type="text" name="min-game-processor" id="min-game-processor" placeholder="Intel Core I5" required/><br><br>
                            <label id="min-game-memory" for=" min-game-memory">Memory</label><span>*</span><br>
                            <input type="text" name="min-game-memory" id="min-game-memory" placeholder="8 GB" required/><br><br>
                            <label id="min-game-storage" for="min-game-storage">Storage</label><span>*</span><br>
                            <input type="text" name="min-game-storage" id="min-game-storage" placeholder="14 GB" required/><br><br>
                            <label id="min-game-graphics" for="min-game-graphics">Graphics</label><span>*</span><br>
                            <input type="text" name="min-game-graphics" id="min-game-graphics" placeholder="NVIDIA GeForce 1660" required/><br><br>
                            <label id="min-game-other" for="min-game-other">Other</label><span>*</span><br>
                            <input type="text" name="min-game-other" id="min-game-other" placeholder="English Language Support" required/><br><br>

                        </div>
                        <div class="game-spec-item-details">

                            <label id="game-OS" for="game-OS">OS</label><br>
                            <input type="text" name="game-OS" id="game-OS" placeholder="Windows 10" /><br><br>
                            <label id="game-processor" for="game-processor">Processor</label><br>
                            <input type="text" name="game-processor" id="game-processor" placeholder="Intel Core I5" /><br><br>
                            <label id="game-memory" for="game-memory">Memory</label><br>
                            <input type="text" name="game-memory" id="game-memory" placeholder="8 GB" /><br><br>
                            <label id="game-storage" for="game-storage">Storage</label><br>
                            <input type="text" name="game-storage" id="game-storage" placeholder="14 GB" /><br><br>
                            <label id="game-graphics" for="game-graphics">Graphics</label><br>
                            <input type="text" name="game-graphics" id="game-graphics" placeholder="NVIDIA GeForce 1660" /><br><br>
                            <label id="game-other" for="game-other">Other</label><br>
                            <input type="text" name="game-other" id="game-other" placeholder="English Language Support" /><br><br>

                        </div>
                    </div>

                    <label id="game-visibility" for="game-visibility">Visibility</label><span>*</span><br>
                    <div class="visibility">
                        <p>Decide when is your page ready for the public</p><br>
                        <input type="radio" id="game-draft" name="game-visibility" value="draft" checked>
                        <label for="game-draft">Draft - Only those who can edit the project can view the page</label><br>
                        <input type="radio" id="game-public" name="game-visibility" value="public">
                        <label for="game-public">Public - Anyone can view the page, you can enable this after you've saved</label><br><br>
                    </div>

                </div>

                <div class="upload-col">

                    <label id="game-upload-cover-img" for="game-upload-cover-img">Upload Cover Image</label><br>
                    <p>Used when we link your game with other parts of the site</p><br>
                    <input type="file" id="game-upload-cover-img" name="game-upload-cover-img" accept=".jpg,.jpeg,.png"><br><br>

                    <label id="game-illustration-vedio" for="game-illustration-vedio">Game Illustration Video</label><br>
                    <p>Add the link to your Youtube video</p><br>
                    <input type="url" id="game-illustration-vedio" name="game-illustration-vedio" placeholder="eg: https://www.youtube.com/"><br><br>

                    <label id="upload-game" for="upload-game">Upload Game</label><span>*</span><br>
                    <p>(Required file types : .zip, .rar, .blend)</p><br>
                    <input type="file" id="upload-game" name="upload-game" required><br><br>

                    <label id="game-screenshots" for="game-screenshots">Screenshots</label><br>
                    <p>These will appear on your game's page. Optional but highly recommended. Upload 3 to 5 for best results</p><br>
                    <input type="file" id="game-screenshots" name="game-screenshots[]" accept=".jpg,.jpeg,.png" multiple="multiple"><br><br>
                </div>
            </div>
            <br><br>
            <button type="submit" class="submit-btn" name="game-submit">Upload Game</button>
            <!-- <button type="submit" class="submit-btn" name="game-submit"><a href="singlegame.php?id=<?= $game['gameID']; ?>">Save & View Page</a></button> -->
        </form>



    </div>
</div>


<!-- footer -->
<style>
    <?php include('../src/css/footer.css'); ?>
</style>
<?php include("../components/footer.php"); ?>




<!--script-->
<script src="../src/js/redactor.js"></script>
<script src="../src/js/upload.js"></script>
<script src="https://use.fontawesome.com/a31a3f8384.js"></script>
<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
    <script src="../src/js/navbar.js"></script>
<?php } else { ?>
    <script src="../src/js/navbarcopy.js"></script>
<?php } ?>

</body>

</html>