<?php

require '../db/database.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM freegame WHERE gameID=$id";

    $result = mysqli_query($conn, $sql);
    $game = mysqli_fetch_assoc($result);

    $gamerID = $game['gameDeveloperID'];
    $gamerSql = "SELECT * FROM gamer WHERE gamerID=$gamerID";

    $result1 = mysqli_query($conn, $gamerSql);
    $gamer = mysqli_fetch_assoc($result1);
}


?>



<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
    <?php
         include('../src/css/navbar.css'); 
         include('../src/css/singlegame.css'); 
    ?>
</style>
<?php include("../components/navbar.php"); ?>

<div class="game-name">
      <h1>Genshin Impact</h1>
    </div>

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
            <img src="../images/singlegame/1.jpg" alt="Nature Image #1" />
          </li>
          <li class="slide">
            <img src="../images/singlegame/2.jpeg" alt="Nature Image #2" />
          </li>
          <li class="slide">
            <img src="../images/singlegame/3.jpg" alt="Nature Image #3" />
          </li>
        </ul>

        <!--Ratings, Views, Downloads-->

        <div class="ratings">
          <div class="stars">
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Blank Star.png" alt="" />
            <p>(246)</p>
          </div>
        </div>

        <div class="views-downloads">
          <img src="../images/singlegame/view.png" alt="" />
          <p id="views">200</p>
          <img src="../images/singlegame/download.png" alt="" />
          <p id="downloads">10</p>
        </div>

        <!--Rate & View All-->

        <div class="info-box">
          <button id="rate-btn" onclick="AddReview()">Rate this Game</button>
          <button id="all-btn">View all by miHoYo</button>
        </div>

        <div class="tagline">
          <p>
            Embark on a journey across Teyvat to find your lost sibling and seek
            answers from The Seven — the gods of each element. Explore this
            wondrous world, join forces with a diverse range of characters, and
            unravel the countless mysteries that Teyvat holds...
          </p>
        </div>
      </div>

      <!--Overview-->

      <div class="card">
        <div class="card-image game"></div>
        <div class="category"><?= $game['gameName']; ?></div>
        <h3>Free</h3>
        <div class="buy-btn">Buy Now</div>
        <div class="buy-btn">Add to Cart</div>

        <div class="row">
          <p class="title">Release Date</p>
          <p class="sub-title">5 Nov 2021</p>
        </div>
        <hr />

        <div class="row">
          <p class="title">Developer</p>
          <p class="sub-title"><?= $gamer['username']; ?></p>
        </div>
        <hr />

        <div class="row">
          <p class="title">Publisher</p>
          <p class="sub-title">miHiYo Studios</p>
        </div>
        <hr />

        <div class="row">
          <p class="title">Platform</p>
          <p class="sub-title">Windows 10</p>
        </div>
        <hr />

        <div class="row">
          <p class="title">Game Status</p>
          <p class="sub-title"><?= $game['releaseStatus']; ?></p>
        </div>
      </div>
    </div>

    <!--Description-->

    <div class="description">
      <p>
        <?= $game['gameDetails']; ?>
      </p>
    </div>

    <!--Reviews-->
    <div class="reviews">
      <h1>Reviews</h1>

      <div class="review">
        <div class="left">
          <img src="../images/singlegame/profile.png" alt="" />
          <p class="username">Kavindu&nbsp;Priyanath</p>
          <p class="assets-count">Assets:&nbsp;27</p>
          <p class="reviews-count">Reviews:&nbsp;11</p>
        </div>
        <div class="right">
          <div class="rating-stars">
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Blank Star.png" alt="" />
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
          <div class="like-buttons">
            <img src="../images/singlegame/like.png" alt="" />
            <img src="../images/singlegame/dislike.png" alt="" />
          </div>
        </div>
      </div>

      <div class="review">
        <div class="left">
          <img src="../images/singlegame/profile.png" alt="" />
          <p class="username">Kavindu&nbsp;Priyanath</p>
          <p class="assets-count">Assets:&nbsp;27</p>
          <p class="reviews-count">Reviews:&nbsp;11</p>
        </div>
        <div class="right">
          <div class="rating-stars">
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Blank Star.png" alt="" />
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
          <div class="like-buttons">
            <img src="../images/singlegame/like.png" alt="" />
            <img src="../images/singlegame/dislike.png" alt="" />
          </div>
        </div>
      </div>

      <div class="review">
        <div class="left">
          <img src="../images/singlegame/profile.png" alt="" />
          <p class="username">Kavindu&nbsp;Priyanath</p>
          <p class="assets-count">Assets:&nbsp;27</p>
          <p class="reviews-count">Reviews:&nbsp;11</p>
        </div>
        <div class="right">
          <div class="rating-stars">
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Filled Star.png" alt="" />
            <img src="../images/singlegame/Blank Star.png" alt="" />
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
          <div class="like-buttons">
            <img src="../images/singlegame/like.png" alt="" />
            <img src="../images/singlegame/dislike.png" alt="" />
          </div>
        </div>
      </div>

      <div class="review-form" id="review-form">
        <h2>Write a review for Genshin Impact</h2>
        <p>
          Please describe what you liked or disliked about this asset and
          whether you recommend it to others
        </p>
        <p>Please remember to be polite and follow the Rules and Guidelines.</p>
        <form action="#">
          <label for="topic">Title: </label>
          <input
            type="text"
            id="topic"
            name="topic"
            placeholder="Enter a topic..."
          />
          <br />
          <label for="rate">Rating: </label> <br />
          <label for="details">Details:</label>
          <textarea
            name="details"
            id="details"
            placeholder="Write something..."
          ></textarea>
          <input type="submit" value="Post Review" />
        </form>
      </div>
    </div>

    <style>
        <?php include('../src/css/footer.css'); ?>
    </style>
    <?php include("../components/footer.php"); ?>

    <script src="../src/js/navbar.js"></script>
    <script src="../src/js/singlegame.js"></script>
   

  </body>
</html>
