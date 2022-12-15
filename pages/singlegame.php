<?php session_start();

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
  
    $ss = $game['gameScreenshots'];
    $screenshots = explode(',', $ss);
    $n = count($screenshots);
  $coverImg = $game['gameCoverImg'];
  $addressCoverImg = '../uploads/games/cover/' . $coverImg;
}


?>



<!DOCTYPE html>
<html lang="en">

<body>
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
        <img src="../uploads/games/ss/<?= $screenshots[0]; ?>" alt="Nature Image #1" />
        <!-- <img src="../images/singlegame/1.jpg" alt="Nature Image #1" /> -->
      </li>
      <?php for ($i = 1; $i < $n; $i++) { ?>
          <li class="slide">
              <img src="../uploads/games/ss/<?= $screenshots[$i]; ?>" alt="Nature Image #2" />
          </li>
        <?php } ?>
    </ul>

      <div class="tagline">
        <p>
          As Spirit Guardians our duty is to help the troubled humans of this world before
          the world collapses.
          <?= $game['gameTagline']; ?>
        </p>
      </div>

      <div class="genre-feature">
        <div class="genre">
          Genre<br>
          <p>Action, Adventure, Strategy</p>
        </div>
        <div class="feature">
          Feature<br>
          <p>Single Player</p>
        </div>
      </div>

      <!--Ratings, Views, Downloads-->
      <!--
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
-->

      <!--Rate & View All-->
      <!--
    <div class="info-box">
      <button id="rate-btn" onclick="AddReview()">Rate this Game</button>
      <button id="all-btn">View all by miHoYo</button>
    </div>
-->

      <!--
    <div class="tagline">
      <p>
      <?= $game['gameTagline']; ?>
      </p>
    </div>  -->
    </div>


    <!--Overview-->

    <div class="card">
      <div class="card-image game" style="background-image: url('<?php echo $addressCoverImg; ?>')"></div>
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
        <p class="sub-title"><?= $game['minOS']; ?></p>
      </div>
      <hr />

      <div class="row">
        <p class="title">Game Status</p>
        <p class="sub-title"><?= $game['releaseStatus']; ?></p>
      </div>
      <hr />
    </div>
  </div>

  <!--Description-->

  <div class="game-details">

  </div>

  <div class="description">
    <p>
      <?= $game['gameDetails']; ?>
    </p>
  </div>



  <!--Reviews-->
  <div class="reviews">
    <h3>Ratings</h3>

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

    <div class="rate-game">
      <button id="rate-btn" onclick="AddReview()">Rate this Game</button>
    </div>

    <div class="review-form" id="review-form">
      <h4>Write a review for Genshin Impact</h4><br>
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
        <textarea name="details" id="details" placeholder="Write somethinghttps://github.com/KavinduPriyanath/indieabode/pull/26/conflict?name=pages%252Fupload.php&ancestor_oid=28074c1e30dee2fde2d68aed9995442d835617d2&base_oid=37233d93a73700f961036609e0416eadc182c437&head_oid=1913d302ae98bbd67f41579c6f668d45a625baa5..."></textarea>
        <input type="submit" value="Post Review" /><br>
      </form>
    </div>

    <div class="game-specification">
      <h3>Specifications</h3>
      <div class="game-spec-details">
        <h3>Windows</h3>
        <hr>

        <table>
          <tr>
            <th>Minimum</th>
            <th>Recommended</th>
          </tr>
          <tr>
            <td>
              <p>OS</p>Windows 10
            </td>
            <td>
              <p>OS</p>Windows 10
            </td>
          </tr>
          <tr>
            <td>
              <p>Processor</p>Intel Core I5
            </td>
            <td>
              <p>Processor</p>Intel Core I5
            </td>
          </tr>
          <tr>
            <td>
              <p>Memory</p>8GB
            </td>
            <td>
              <p>Memory</p>8GB
            </td>
          </tr>
          <tr>
            <td>
              <p>Storage</p>14 GB
            </td>
            <td>
              <p>Storage</p>14 GB
            </td>
          </tr>
          <tr>
            <td>
              <p>Graphics</p>NVIDIA GeForce 1660
            </td>
            <td>
              <p>Graphics</p>NVIDIA GeForce 1660
            </td>
          </tr>
          <tr>
            <td>
              <p>Other</p>English Language Support
            </td>
            <td>
              <p>Other</p>English Language Support
            </td>
          </tr>
        </table>

      </div>

    </div>
  </div>



  <style>
    <?php include('../src/css/footer.css'); ?>
  </style>
  <?php include("../components/footer.php"); ?>

<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
  <script src="../src/js/navbar.js"></script>
<?php } else { ?>
  <script src="../src/js/navbarcopy.js"></script>
<?php } ?>
<script src="../src/js/singlegame.js"></script>

</body>

</html>