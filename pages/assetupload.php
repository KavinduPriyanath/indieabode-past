<?php

session_start();



require '../db/database.php';

$new_asset_file_name = null;
$new_cover_img_name = null;
$noTitleError = null;
$error_msg = null;
$incompatibleFileType = false;
$incompatibleImageType = false;


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
    } else if (!in_array($cover_img_ext, $allowed_exts) && $cover_img_name) {
        $incompatibleImageType = true;
    }

    //Screenshots
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
    } else if (!in_array($asset_file_ext, $allowed_asset_types) && $asset_file) {
        $incompatibleFileType = true;
    }


    //upload to db
    $sql = "INSERT INTO freeasset (assetName, assetTagline, assetCreatorID, assetCoverImg, assetClasification, assetScreenshots, assetDetails, assetReleaseStatus, assetTags, assetLicense, assetFile, assetVisibility, assetVideoURL, assetType, assetStyle) VALUES ('$assetName', '$assetTagline', '$foreignKey', '$new_cover_img_name', '$assetClassification', '$screenshotsURL', '$assetDetails', '$assetStatus', '$assetTags', '$assetLicense', '$new_asset_file_name', '$assetVisibility', '$assetVideoUrl', '$assetType', '$assetStyle')";

    if ($assetName == null) {
        $error_msg =  "Asset Name is required.";
    } else if ($incompatibleFileType) {
        $error_msg = "Incompatible file type";
    } else if ($new_asset_file_name == null) {
        $error_msg = "Asset file should be added.";
    } else if ($incompatibleImageType) {
        $error_msg = "Image type is not compatible.";
    } else if ($new_cover_img_name == null) {
        $error_msg = "Cover Image should be added.";
    } else if (mysqli_query($conn, $sql)) {
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

<div class="outer-box">
    <div class="form-box">
        <div class="upload-topic">
            Create a new project
        </div>
        <hr>
        <div class="btn-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="uploadGame()">Game</button>
            <button type="button" class="toggle-btn" id="asset-active">Assets</button>
        </div><br>




        <!--upload assets form-->

        <form method="POST" id="upload-asset-form" class="input-upload-group" enctype="multipart/form-data">
            <!--Display error Messages-->
            <?php if ($error_msg != null) { ?>
                <div class="errors-display" id="errors">
                    <?php echo "*" . $error_msg; ?>
                </div>
            <?php } ?>
            <div class="upload-row">

                <!--Display error Messages-->



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
                    <input type="radio" id="asset-free" name="asset-price" value="free" checked>
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
                    <input type="radio" id="asset-draft" name="asset-visibility" value="draft" checked>
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
            <button type="submit" class="submit-btn" name="asset-submit" onsubmit="uploadAsset()" id="asset-submit">Save & View Page</button>
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