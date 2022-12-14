<?php

session_start();

$id = $_SESSION['id'];

echo $id;


require '../db/database.php';

$allowed_exts = array("jpg", "jpeg", "png");
$screenshots = array();

if (isset($_POST['asset-submit'])) {
    $assetName = $_POST['asset-title'];
    $assetTagline = $_POST['asset-tagline'];
    $foreignKey = $_SESSION['id'];
    $assetClassification = $_POST['asset-classification'];
    $assetStatus = $_POST['asset-status'];
    $assetDetails = $_POST['asset-details'];
    $assetTags = $_POST['asset-tags'];
    $assetType = $_POST['asset-type'];
    $assetStyle = $_POST['asset-style'];
    // $assetPricing = 
    $assetLicense = $_POST['asset-license'];
    $assetVideoUrl = $_POST['asset-illustration-video'];
    $assetVisibility = $_POST['asset-visibility'];

    //cover image
    //$cover_img_size = $_FILES['asset-upload-cover-img']['size'];
    $cover_img_name = $_FILES['asset-upload-cover-img']['name'];
    $cover_img_temp_name = $_FILES['asset-upload-cover-img']['tmp_name'];

    $cover_img_ext = strtolower(pathinfo($cover_img_name, PATHINFO_EXTENSION));

    if (in_array($cover_img_ext, $allowed_exts)) {
        $new_cover_img_name = "Cover-" . $assetName . '.' . $cover_img_ext;
        $cover_upload_path = '../uploads/assets/cover/' . $new_cover_img_name;
        move_uploaded_file($cover_img_temp_name, $cover_upload_path);
    }

    //Screenshots
    // $ss_img_name = $_FILES['asset-screenshots']['name'];
    // $ss_img_temp_name = $_FILES['asset-screenshots']['tmp_name'];

    // $ss_img_ext = strtolower(pathinfo($ss_img_name, PATHINFO_EXTENSION));

    // if (in_array($ss_img_ext, $allowed_exts)) {
    //     $new_ss_img_name = "SS-" . $assetName . '.' . $ss_img_ext;
    //     $ss_upload_path = '../uploads/assets/ss/' . $new_ss_img_name;
    //     move_uploaded_file($ss_img_temp_name, $ss_upload_path);
    // }

    $ssCount = count($_FILES['asset-screenshots']['name']);
    for ($i = 0; $i < $ssCount; $i++) {
        $ssName = $_FILES['asset-screenshots']['name'][$i];
        $ssExt = strtolower(pathinfo($ssName, PATHINFO_EXTENSION));
        if (in_array($ssExt, $allowed_exts)) {

            $newSSName = "SS-" . $assetName . '-' . $i . '.' . $ssExt;
            $ss_upload_path = '../uploads/assets/ss/' . $newSSName;

            move_uploaded_file($_FILES['asset-screenshots']['tmp_name'][$i], $ss_upload_path);

            array_push($screenshots, $newSSName);
        }
    }

    $screenshotsURL = implode(',', $screenshots);

    //Asset File
    $asset_file = $_FILES['upload-asset']['name'];
    $asset_file_size = $_FILES['upload-asset']['size'];
    $asset_file_temp_name = $_FILES['upload-asset']['tmp_name'];

    $asset_file_ext = strtolower(pathinfo($asset_file, PATHINFO_EXTENSION));

    $allowed_asset_types = array("zip", "blend", "txt");

    if (in_array($asset_file_ext, $allowed_asset_types)) {
        $new_asset_file_name = "Asset-" . $assetName . '.' . $asset_file_ext;
        $asset_upload_path = '../uploads/assets/file/' . $new_asset_file_name;
        move_uploaded_file($asset_file_temp_name, $asset_upload_path);
    }


    //upload to db
    $sql = "INSERT INTO freeasset (assetName, assetTagline, assetCreatorID, assetCoverImg, assetClasification, assetScreenshots, assetDetails, assetReleaseStatus, assetTags, assetLicense, assetFile, assetVisibility, assetVideoURL, assetType, assetStyle) VALUES ('$assetName', '$assetTagline', '$foreignKey', '$new_cover_img_name', '$assetClassification', '$screenshotsURL', '$assetDetails', '$assetStatus', '$assetTags', '$assetLicense', '$new_asset_file_name', '$assetVisibility', '$assetVideoUrl', '$assetType', '$assetStyle')";

    if (mysqli_query($conn, $sql)) {
        echo "Upload successful!";
    } else {
        echo "error";
    }
} elseif (isset($_POST['game-submit'])) {
    $gameName = $_POST['game-title'];
    $gameTagline = $_POST['game-tagline'];
    $foreignKey = $_SESSION['id'];
    $gameClassification = $_POST['game-classification'];
    $gameStatus = $_POST['game-status'];
    $gameDetails = $_POST['game-details'];
    $gameTags = $_POST['game-tags'];
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
    }

    //Screenshots
    $game_ss_img_name = $_FILES['game-screenshots']['name'];
    $game_ss_img_temp_name = $_FILES['game-screenshots']['tmp_name'];

    $game_ss_img_ext = strtolower(pathinfo($game_ss_img_name, PATHINFO_EXTENSION));

    if (in_array($game_ss_img_ext, $allowed_exts)) {
        $new_game_ss_img_name = "SS-" . $gameName . '.' . $game_ss_img_ext;
        $game_ss_upload_path = '../uploads/games/ss/' . $new_game_ss_img_name;
        move_uploaded_file($game_ss_img_temp_name, $game_ss_upload_path);
    }

    //Asset File
    $game_file = $_FILES['upload-game']['name'];
    $game_file_size = $_FILES['upload-game']['size'];
    $game_file_temp_name = $_FILES['upload-game']['tmp_name'];

    $game_file_ext = strtolower(pathinfo($game_file, PATHINFO_EXTENSION));

    $allowed_game_types = array("zip", "blend", "txt");

    if (in_array($game_file_ext, $allowed_game_types)) {
        $new_game_file_name = "Game-" . $gameName . '.' . $game_file_ext;
        $game_upload_path = '../uploads/games/file/' . $new_game_file_name;
        move_uploaded_file($game_file_temp_name, $game_upload_path);
    }

    //upload to db
    $sql = "INSERT INTO freegame (gameName, gameTagline, gameDeveloperID, gameCoverImg, gameClassification, gameScreenshots, gameDetails, releaseStatus, gameTags, gameFile, minOS, minProcessor ,minMemory,minStorage,minGraphics,minOther, recommendOS, recommendProcessor ,recommendMemory,recommendStorage,recommendGraphics,recommendOther,gameVisibility,gameTrailor) VALUES ('$gameName', '$gameTagline', '$foreignKey', '$new_game_cover_img_name', '$gameClassification', '$new_game_ss_img_name', '$gameDetails', '$gameStatus', '$gameTags', '$new_game_file_name','$minGameOS','$minGameProcessor','$minGameMemory','$minGameStorage','$minGameGraphics','$minGameOther','$GameOS','$GameProcessor','$GameMemory','$GameStorage','$GameGraphics','$GameOther','$gameVisibility','$gameIllustrationVedio')";

    if (mysqli_query($conn, $sql)) {
        echo "Upload successful!";
    } else {
        echo "error";
    }
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

<div class="page-topic">
    <h1>Upload Projects</h1>
</div>

<div class="outer-box">
    <div class="form-box">
        <div class="btn-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="uploadGame()">Game</button>
            <button type="button" class="toggle-btn" onclick="uploadAsset()">Assets</button>
        </div><br>

        <!--Game Form-->

        <form method="POST" id="upload-game" class="input-upload-group" enctype="multipart/form-data">
            <div class="upload-row">
                <div class="upload-col">

                    <label id="game-title" for="game-title">Title</label><br>
                    <input type="text" name="game-title" id="game-title" required /><br><br>

                    <label id="game-tagline" for="game-tagline">Tagline</label><br>
                    <input type="text" name="game-tagline" id="game-tagline" placeholder="Optional" /><br><br>

                    <!--classification details-->
                    <label id="game-classification" for="game-classification">Classification</label><br>
                    <select id="game-classification" name="game-classification">
                        <option value="adventure">Adventure Games</option>
                        <option value="action" selected>Action Games</option>
                        <option value="RPG">RPG Games</option>
                        <option value="racing">Racing Games</option>
                        <option value="simulation">Simulation Games</option>
                        <option value="strategy">Strategy Games</option>
                    </select><br><br>

                    <!--Releasing status-->
                    <label id="game-status" for="game-status">Release Status</label><br>
                    <select id="game-status" name="game-status">
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
                    <label id="upload-game" for="upload-game">Upload Game</label><br>
                    <input type="file" id="upload-game" name="upload-game"><br><br>

                    <label id="game-visibility" for="game-visibility">Visibility</label><br>
                    <p>Decide when is your page ready for the public</p><br>
                    <input type="radio" id="game-draft" name="game-visibility" value="draft" checked>
                    <label for="game-draft">Draft - Only those who can edit the project can view the page</label><br>
                    <input type="radio" id="game-public" name="game-visibility" value="public">
                    <label for="game-public">Public - Anyone can view the page, you can enable this after you've saved</label><br><br>

                    <label>Game Specification</label><br><br>
                    <div class="game-spec-type">
                        <p class="game-spec-item">Minimum</p>
                        <p class="game-spec-item">Recommended</p><br><br>
                    </div>
                    <div class="game-spec-type">
                        <div class="game-spec-item-details">


                            <label id="min-game-OS" for="min-game-OS">OS</label><br>
                            <input type="text" name="min-game-OS" id="min-game-OS" placeholder="Windows 10" /><br><br>
                            <label id="min-game-processor" for="min-game-processor">Processor</label><br>
                            <input type="text" name="min-game-processor" id="min-game-processor" placeholder="Intel Core I5" /><br><br>
                            <label id="min-game-memory" for=" min-game-memory">Memory</label><br>
                            <input type="text" name="min-game-memory" id="min-game-memory" placeholder="8 GB" /><br><br>
                            <label id="min-game-storage" for="min-game-storage">Storage</label><br>
                            <input type="text" name="min-game-storage" id="min-game-storage" placeholder="14 GB" /><br><br>
                            <label id="min-game-graphics" for="min-game-graphics">Graphics</label><br>
                            <input type="text" name="min-game-graphics" id="min-game-graphics" placeholder="NVIDIA GeForce 1660" /><br><br>
                            <label id="min-game-other" for="min-game-other">Other</label><br>
                            <input type="text" name="min-game-other" id="min-game-other" placeholder="English Language Support" /><br><br>

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

                </div>

                <div class="upload-col">

                    <label id="game-upload-cover-img" for="game-upload-cover-img">Upload Cover Image</label><br>
                    <p>This image will be shown and used to identify your game</p><br>
                    <input type="file" id="game-upload-cover-img" name="game-upload-cover-img" accept=".jpg,.jpeg,.png"><br><br>

                    <label id="game-illustration-vedio" for="game-illustration-vedio">Game Illustration Vedio</label><br>
                    <p>Provide a link to youtube</p><br>
                    <input type="url" id="game-illustration-vedio" name="game-illustration-vedio" placeholder="eg: https://www.youtube.com/"><br><br>

                    <label id="game-screenshots" for="game-screenshots">Screenshots</label><br>
                    <p>These will appear on your game's page. Optional but highly recommended. Upload 3 to 5 for best results</p><br>
                    <input type="file" id="game-screenshots" name="game-screenshots" accept=".jpg,.jpeg,.png" multiple="multiple"><br><br>
                </div>
            </div>
            <br><br>
            <button type="submit" class="submit-btn" name="game-submit"><a href="singlegame.php?id=<?= $game['gameID']; ?>">Save & View Page</a></button>
        </form>


        <!--upload assets form-->

        <form method="POST" id="upload-asset" class="input-upload-group" enctype="multipart/form-data">
            <div class="upload-row">
                <div class="upload-col">
                    <label id="asset-title" for="asset-title">Title</label><br>
                    <input type="text" name="asset-title" id="asset-title" /><br><br>

                    <label id="asset-tagline" for="asset-tagline">Tagline</label><br>
                    <input type="text" name="asset-tagline" id="asset-tagline" placeholder="Optional" /><br><br>

                    <!--classification details-->
                    <label id="asset-classification" for="asset-classification">Classification</label><br>
                    <select id="asset-classification" name="asset-classification">
                        <option value="2d">2D</option>
                        <option value="3d" selected>3D</option>
                        <option value="audio">Audio</option>
                        <option value="visualEffects">Visual Effects</option>
                        <option value="textures">Textures</option>
                        <option value="maps">Maps</option>
                        <option value="tools">Tools</option>
                    </select><br><br>

                    <!--Releasing status-->
                    <label id="asset-status" for="asset-status">Release Status</label><br>
                    <select id="asset-status" name="asset-status">
                        <option value="released" selected>Released</option>
                        <option value="Prototype">Prototype</option>
                        <option value="Upcoming">Upcoming</option>
                    </select><br><br>

                    <label for="asset-details">Details</label><br>
                    <p id="p">This will be the content of your assets page</p><br>
                    <!--<textarea id="asset-details" name="asset-details" rows="9" cols="50"></textarea>-->



                    <div class="main-content">
                        <div class="text-editor-header">
                            <button type="button" class="rbtn" data-element="bold">
                                <i class="fa fa-bold"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="italic">
                                <i class="fa fa-italic"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="underline">
                                <i class="fa fa-underline"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="insertUnorderedList">
                                <i class="fa fa-list-ul"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="insertOrderedList">
                                <i class="fa fa-list-ol"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="createLink">
                                <i class="fa fa-link"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="justifyLeft">
                                <i class="fa fa-align-left"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="justifyCenter">
                                <i class="fa fa-align-center"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="justifyRight">
                                <i class="fa fa-align-right"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="justifyFull">
                                <i class="fa fa-align-justify"></i>
                            </button>
                            <button type="button" class="rbtn" data-element="insertImage">
                                <i class="fa fa-image"></i>
                            </button>
                        </div>
                        <!--Content-->
                        <div class="content-box" id="redactor" contenteditable="true"></div>
                    </div>
                    <input type="hidden" name="asset-details" id="asset-details">









                    <br><br>

                    <label id="asset-tags" for="asset-tags">Tags</label><br>
                    <p id="p">Keywords that someone would search to find your assets</p><br>
                    <input type="text" id="asset-tags" name="asset-tags" /> <br><br>

                    <label id="asset-price" for="asset-price">Pricing</label><br>
                    <input type="radio" id="asset-free" name="asset-price" value="free">
                    <label for="asset-free">Free</label><br>
                    <input type="radio" id="asset-paid" name="asset-price" value="paid">
                    <label for="asset-paid">Paid</label><br>
                    <p id="p">Minimum Price - Set to $0 for free assets</p>
                    <input type="text" id="asset-price-val" name="asset-price-val" /><br><br>

                    <label id="upload-asset" for="upload-asset">Upload Assets</label><br>
                    <input type="file" id="upload-asset" name="upload-asset"><br><br>

                    <!--License-->
                    <label id="asset-license" for="asset-license">License</label><br>
                    <p>Decide when is your page ready for the public</p><br>
                    <select id="asset-license" name="asset-license">
                        <option value="open-source" selected>Open Source</option>
                        <option value="proprietary">Proprietary</option>
                        <option value="permissive">Permissive</option>
                        <option value="copyleft">Copy Left</option>
                    </select><br><br>

                    <!--AssetType-->
                    <label id="asset-type" for="asset-type">Type</label><br>
                    <p>Helps viewers to filter your asset. Select the most suitable one</p><br>
                    <select id="asset-type" name="asset-type">
                        <option value="sprite" selected>Sprite</option>
                        <option value="skybox">Skybox</option>
                        <option value="character">Character</option>
                        <option value="tileset">Tileset</option>
                    </select><br><br>

                    <!--AssetStyle-->
                    <label id="asset-style" for="asset-style">Style</label><br>
                    <p>Helps viewers to filter your asset. Select the most suitable one</p><br>
                    <select id="asset-style" name="asset-style">
                        <option value="pixelart" selected>Pixel Art</option>
                        <option value="8bit">8-Bit</option>
                        <option value="16bit">16-Bit</option>
                        <option value="lowpoly">Low Poly</option>
                        <option value="voxel">Voxel</option>
                    </select><br><br>

                    <label id="asset-visibility" for="asset-visibility">Visibility</label><br>
                    <p>Decide when is your page ready for the public</p><br>
                    <input type="radio" id="asset-draft" name="asset-visibility" value="draft">
                    <label for="asset-draft">Draft - Only those who can edit the project can view the page</label><br>
                    <input type="radio" id="asset-public" name="asset-visibility" value="public">
                    <label for="asset-public">Public - Anyone can view the page, you can enable this after you've saved</label><br>

                </div>

                <div class="upload-col">

                    <label id="asset-upload-cover-img" for="asset-upload-cover-img">Upload Cover Image</label><br>
                    <p>This image will be shown and used to identify your asset</p><br>
                    <input type="file" id="asset-upload-cover-img" name="asset-upload-cover-img" accept=".jpg,.jpeg,.png"><br><br>

                    <label id="asset-illustration-vedio" for="asset-illustration-vedio">Asset Illustration Video</label><br>
                    <p>Provide a link to youtube</p><br>
                    <input type="url" id="asset-illustration-vedio" name="asset-illustration-video" placeholder="eg: https://www.youtube.com/"><br><br>

                    <label id="asset-screenshots" for="asset-screenshots">Screenshots</label><br>
                    <p>These will appear on your asset's page. Optional but highly recommended. Upload 3 to 5 for best results</p><br>
                    <input type="file" id="asset-screenshots" name="asset-screenshots[]" accept=".jpg,.jpeg,.png" multiple="multiple"><br><br>
                </div>
            </div>
            <br><br>
            <button type="submit" class="submit-btn" name="asset-submit" id="asset-submit">Save & View Page</button>
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