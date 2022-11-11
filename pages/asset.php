<?php

require '../db/database.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM freeasset WHERE assetID=$id";

    $result = mysqli_query($conn, $sql);
    $asset = mysqli_fetch_assoc($result);

    $gamerID = $asset['assetCreatorID'];
    $gamerSql = "SELECT * FROM gamer WHERE gamerID=$gamerID";

    $result1 = mysqli_query($conn, $gamerSql);
    $gamer = mysqli_fetch_assoc($result1);
}


?>


<!DOCTYPE html>
<html lang="en">
<!--Including Navbar-->
<style>
    <?php include('../src/css/navbar.css'); ?>
</style>
<?php include("../components/navbar.php"); ?>

<style>
    <?php include('../src/css/asset.css'); ?>
</style>



<!--Slideshow and Overview-->

<div class="container">
    <!--Slideshow-->

    <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">
            &#8656;
        </button>
        <button class="carousel-button next" data-carousel-button="next">
            &#8658;
        </button>
        <ul data-slides>
            <li class="slide" data-active>
                <img src="../uploads/assets/ss/<?= $asset['assetScreenshots'] ?>" alt="Nature Image #1" />
            </li>
            <li class="slide">
                <img src="../images/games/2.png" alt="Nature Image #2" />
            </li>
            <li class="slide">
                <img src="../images/games/3.png" alt="Nature Image #3" />
            </li>
        </ul>

        <!--Ratings, Views, Downloads-->

        <div class="ratings">
            <div class="stars">
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Blank Star.png" alt="" />
                <p>(246)</p>
            </div>
        </div>

        <div class="views-downloads">
            <img src="../images/games/view.png" alt="" />
            <p id="views">200</p>
            <img src="../images/games/download.png" alt="" />
            <p id="downloads">10</p>
        </div>

        <!--Rate & View All-->

        <div class="info-box">
            <button id="rate-btn" onclick="AddReview()">Rate this Asset</button>
            <button id="all-btn">View all by Render Kight</button>
        </div>
    </div>

    <!--Overview-->

    <div class="card">
        <h2 class="asset-name">
            <?= $asset['assetName']; ?>
        </h2>
        <div class="profile-info">
            <img src="../images/games/profile.png" alt="" />
            <p><?= $gamer['username']; ?></p>
        </div>
        <div class="category">Tools</div>
        <h1>Free</h1>
        <div class="buy-btn">Buy Now</div>
        <div class="buy-btn">Add to Cart</div>

        <div class="details">
            <div class="row">
                <p class="title">Release Date</p>
                <p class="sub-title">5 Nov 2021</p>
            </div>
            <hr />

            <div class="row">
                <p class="title">Latest Version</p>
                <p class="sub-title">3.1</p>
            </div>
            <hr />

            <div class="row">
                <p class="title">File Size</p>
                <p class="sub-title">113 MB</p>
            </div>
            <hr />

            <div class="row">
                <p class="title">Extension</p>
                <p class="sub-title">.zip</p>
            </div>
            <hr />

            <div class="row">
                <p class="title">License Type</p>
                <p class="sub-title"><?= $asset['assetLicense']; ?></p>
            </div>
        </div>
    </div>
</div>

<!--Description-->

<div class="description">
    <?= $asset['assetDetails']; ?>
</div>

<!--Reviews-->
<div class="reviews">
    <h1>Reviews</h1>

    <div class="review">
        <div class="left">
            <img src="../images/games/profile.png" alt="" />
            <p class="username">Kavindu&nbsp;Priyanath</p>
            <p class="assets-count">Assets:&nbsp;27</p>
            <p class="reviews-count">Reviews:&nbsp;11</p>
        </div>
        <div class="right">
            <div class="rating-stars">
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Blank Star.png" alt="" />
                <p>12 Dec 2021</p>
            </div>
            <h3 class="review-title">Very Customizable</h3>
            <p class="review-detail">
                Hey! The actual sprite without empty space in the image is about
                38x20 pixels, but it depends on the animation as in some theres a
                sword and stuff. So because of that I kept the image size as 120x80
                pixels for every animation. And the character is centered correctly
                to be in the middle/bottom of the whole image.
            </p>
        </div>
    </div>

    <div class="review">
        <div class="left">
            <img src="../images/games/profile.png" alt="" />
            <p class="username">Kavindu&nbsp;Priyanath</p>
            <p class="assets-count">Assets:&nbsp;27</p>
            <p class="reviews-count">Reviews:&nbsp;11</p>
        </div>
        <div class="right">
            <div class="rating-stars">
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Blank Star.png" alt="" />
                <p>12 Dec 2021</p>
            </div>
            <h3 class="review-title">Very Customizable</h3>
            <p class="review-detail">
                Hey! The actual sprite without empty space in the image is about
                38x20 pixels, but it depends on the animation as in some theres a
                sword and stuff. So because of that I kept the image size as 120x80
                pixels for every animation. And the character is centered correctly
                to be in the middle/bottom of the whole image.
            </p>
        </div>
    </div>

    <div class="review">
        <div class="left">
            <img src="../images/games/profile.png" alt="" />
            <p class="username">Kavindu&nbsp;Priyanath</p>
            <p class="assets-count">Assets:&nbsp;27</p>
            <p class="reviews-count">Reviews:&nbsp;11</p>
        </div>
        <div class="right">
            <div class="rating-stars">
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Filled Star.png" alt="" />
                <img src="../images/games/Blank Star.png" alt="" />
                <p>12 Dec 2021</p>
            </div>
            <h3 class="review-title">Very Customizable</h3>
            <p class="review-detail">
                Hey! The actual sprite without empty space in the image is about
                38x20 pixels, but it depends on the animation as in some theres a
                sword and stuff. So because of that I kept the image size as 120x80
                pixels for every animation. And the character is centered correctly
                to be in the middle/bottom of the whole image.
            </p>
        </div>
    </div>

    <div class="review-form" id="review-form">
        <h2>Write a review for Fantasy Skybox</h2>
        <p>
            Please describe what you liked or disliked about this asset and
            whether you recommend it to others
        </p>
        <p>Please remember to be polite and follow the Rules and Guidelines.</p>
        <form action="#">
            <label for="topic">Title: </label>
            <input type="text" id="topic" name="topic" placeholder="Enter a topic..." />
            <br />
            <label for="rate">Rating: </label> <br />
            <label for="details">Details:</label>
            <textarea name="details" id="details" placeholder="Write something..."></textarea>
            <input type="submit" value="Post Review" />
        </form>
    </div>
</div>



<!--Including Footer-->

<style>
    <?php include('../src/css/footer.css'); ?>
</style>
<?php include("../components/footer.php"); ?>



<script src="../src/js/asset.js"></script>

<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
    <script src="../src/js/navbar.js"></script>
<?php } else { ?>
    <script src="../src/js/navbarcopy.js"></script>
<?php } ?>

</html>