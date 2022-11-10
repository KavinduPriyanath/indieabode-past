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

    <form method="POST" id="upload-game" class="input-upload-group">
        <div class="card-details">
            <div class="left">
                <div class="card-box">
                    <span class="details">Title</span>
                    <input type="text">
                </div>

                <div class="card-box">
                    <span class="details">Tagline</span>
                    <p>One line summery of the devlog</p>
                    <input type="text" placeholder="Optional">
                </div>

                <div class="card-box">
                    <span class="details">Type</span>
                    <p>What this post is about</p>
                    <input type="text" placeholder="">
                </div>


                <div class="card-box">
                    <span class="details">Content</span>
                    <p>Write your content</p>
                    <textarea id="game-details" name="game-details" rows="9" cols="64"></textarea><br><br>
                </div>


                <div class="circle-form">
                    <span class="circle-title">Visibility</span>
                    <p>Decide when is your page ready for the public.</p>
                    <div class="category">
                        <input type="radio" name="Draft">Draft - Only you can view the page.<br>
                        <input type="radio" name="Public">Public - Anyone can view the page, you can enable this after you've saved.
                    </div>
                </div>
            </div>

            <div class="right">

                <div class="card-box">
                    <span class="details">Upload Cover Image</span>
                    <input type="image" placeholder="Upload Cover Image">
                </div>
            </div>

        </div>

        <div class="button">
            <input type="submit" value="Save & View Page">
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