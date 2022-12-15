<?php

require '../db/database.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM devlog WHERE devLogID=$id";

    $result = mysqli_query($conn, $sql);
    $devlog = mysqli_fetch_assoc($result);

    // $gamerID = $devlog['gameDeveloperID'];
    // $gamerSql = "SELECT * FROM gamer WHERE gamerID=$gamerID";

    // $result1 = mysqli_query($conn, $gamerSql);
    // $gamer = mysqli_fetch_assoc($result1);

    // $sqld = "SELECT * FROM freegame WHERE devLogID=$id";
    // $resultd = mysqli_query($conn, $sqld);
    // $freegame = mysqli_fetch_assoc($resultd);
}


?>


<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
    <?php
         include('../src/css/navbar.css'); 
         include('../src/css/singledev.css'); 
    ?>
</style>
<?php include("../components/navbar.php"); ?>



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
            <img src="../uploads/devlog/<?= $devlog['devlogImg'] ?>" alt="Nature Image #1" />
          </li>
          
        </ul>

        <!--Ratings, Views, Downloads-->

        <div class="devTitle">
            <p><h1><?= $devlog['name']; ?></h1>
        </div>    

        <div class="devdate">
            <p>Published <?= $devlog['publishDate']; ?></p>
        </div>
        

        <div class="views-downloads">
          <img src="../images/singledev/heart.png" alt="" />
          <p id="downloads">10</p>
        </div>

        
      <!--Overview-->

      <div class="card">
       
        <div class="category">
          <p><?= $devlog['gameName']; ?></p>
        </div>
        
        <div class="buy-btn">Add to Cart</div>

        <div class="row">
          <p class="title">Status</p>
          <p class="sub-title">Released</p>
        </div>
        <hr />
        
        <!-- <div class="row">
          <p class="title">Author</p>
          <p class="sub-title"><?= $gamer['username']; ?></p>
        </div>
        <hr /> -->

        <div class="row">
          <p class="title">Genre</p>
          <p class="sub-title">Action</p>
        </div>
        <hr />

        <div class="row">
          <p class="title">Release Date</p>
          <p class="sub-title"><?= $devlog['ReleaseDate']; ?></p>
        </div>
        <hr />

    
      </div>
    </div>

    <!--Description-->

    <div class="description">
      <p>
      <?= $devlog['description']; ?>
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

    <script>
    <?php include('../src/js/navbar.js')?>
    </script>

  </body>
</html>
