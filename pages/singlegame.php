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
        <div class="category">Base Game</div>
        <h3>Rs.199/=</h3>
        <div class="buy-btn">Buy Now</div>
        <div class="buy-btn">Add to Cart</div>

        <div class="row">
          <p class="title">Release Date</p>
          <p class="sub-title">5 Nov 2021</p>
        </div>
        <hr />

        <div class="row">
          <p class="title">Developer</p>
          <p class="sub-title">miHiYo Studios</p>
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
          <p class="sub-title">Released</p>
        </div>
      </div>
    </div>

    <!--Description-->

    <div class="description">
      <p>
        Version 3.2 "Akasha Pulses, the Kalpa Flame Rises" is now available! New
        Characters: Nahida and Layla New Event: Version Main Event "Fabulous
        Fungus Frenzy" New Stories: New Archon Quest and Story Quest New Weapon:
        A Thousand Floating Dreams New Monsters: Shouki no Kami, the Prodigal
        and Dendro Hypostasis MASSIVE OPEN WORLD Climb any mountain, swim across
        any river, and glide over the world below, taking in the jaw-dropping
        scenery each step of the way. And if you stop to investigate a wandering
        Seelie or strange mechanism, who knows what you might discover?
        ELEMENTAL COMBAT SYSTEM Harness the seven elements to unleash elemental
        reactions. Anemo, Electro, Hydro, Pyro, Cryo, Dendro, and Geo interact
        in all sorts of ways, and Vision wielders have the power to turn this to
        their advantage. Will you vaporize Hydro with Pyro, electro-charge it
        with Electro, or freeze it with Cryo? Your mastery of the elements will
        give you the upper hand in battle and exploration. BEAUTIFUL VISUALS
        Feast your eyes on the world around you, with a stunning art style,
        real-time rendering, and finely tuned character animations delivering
        you a truly immersive visual experience. Lighting and weather all change
        naturally over time, bringing every detail of this world to life.
        SOOTHING SOUNDTRACK Let the beautiful sounds of Teyvat draw you in as
        you explore the expansive world around you. Performed by the world's top
        orchestras such as London Philharmonic Orchestra and Shanghai Symphony
        Orchestra, the soundtrack changes seamlessly with the time and gameplay
        to match the mood. BUILD YOUR DREAM TEAM Team up with a diverse cast of
        characters in Teyvat, each with their own unique personalities, stories,
        and abilities. Discover your favorite party combinations and level up
        your characters to help you conquer even the most daunting of enemies
        and domains. JOURNEY WITH FRIENDS Team up with friends across various
        platforms to trigger more elemental action, tackle tricky boss fights,
        and conquer challenging domains together to reap rich rewards. As you
        stand atop the peaks of Jueyun Karst and take in the rolling clouds and
        vast terrain stretching out before you, you may wish to stay in Teyvat a
        little longer... But until you are reunited with your lost sibling, how
        can you rest? Go forth, Traveler, and begin your adventure! SUPPORT If
        you encounter any issues during the game, you can send us feedback via
        the in-game Customer Service Center. Customer Service Email:
        genshin_cs@hoyoverse.com
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
    <?php include('../src/js/singlegame.js')?>
    </script>

  </body>
</html>
