<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
  <?php
  include('../src/css/navbar.css');
  include('../src/css/portfolio.css');
  include('../src/css/home.css');
  ?>
</style>
<?php include("../components/navbar.php"); ?>

<div class="user-detail-container">
  <div class="user-detail-container-item">
    <img src="../images/portfolio/profile-pic.png" id="profile-pic">
  </div>

  <div class="name-role">
    <h1 id="user-name">Name</h1>
    <h4 id="user-role">Game Developer</h4>
  </div>

  <div class="user-detail-container-item" id="user-follow-detail">
    <div class="user-follow-count-container">
      <div class="user-follow-post">
        <!--post counting-->
        <p>20</p>
        <p>Posts</p>
      </div>
      <div class="user-follow-follower">
        <!--follower counting-->
        <p>134</p>
        <p>Followers</p>
      </div>
      <div class="user-follow-following">
        <!--following counting-->
        <p>13</p>
        <p>Following</p>
      </div>
      <div class="user-follow-btn">
        <button class="follow-btn">Follow</button>
      </div>
    </div>
  </div>
</div>

<div class="portfolio-container-2">
  <h2>Hello Guys, </h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
    fugiat nulla pariatur. Excepteur sint occaecat
    cupidatat non proident, sunt in culpa qui officia deserunt
    mollit anim id est laborum
  </p>
</div>

<div class="container" id="card-container">
  <div class="card">
    <div class="card-image game-1"></div>
    <div class="game-intro">
      <h3>Riley & Rochelle</h3>
    </div>
    <div class="tagline">
      A narrative puzzle game about love and pop in the 90s
    </div>
    <div class="game-classification">
      Action
    </div>
  </div>

  <div class="card">
    <div class="card-image game-2"></div>
    <div class="game-intro">
      <h3>Late Night Mop</h3>
    </div>
    <div class="tagline">A haunted house cleaning simulators</div>
    <div class="game-classification">
      Action
    </div>
  </div>

  <div class="card">
    <div class="card-image game-1"></div>
    <div class="game-intro">
      <h3>Riley & Rochelle</h3>
    </div>
    <div class="tagline">
      A narrative puzzle game about love and pop in the 90s
    </div>
    <div class="game-classification">
      Action
    </div>
  </div>

  <div class="card">
    <div class="card-image game-2"></div>
    <div class="game-intro">
      <h3>Late Night Mop</h3>
    </div>
    <div class="tagline">A haunted house cleaning simulators</div>
    <div class="game-classification">
      Action
    </div>
  </div>

  <div class="card">
    <div class="card-image game-3"></div>
    <div class="game-intro">
      <h3>The Spirit and the Mouse</h3>
    </div>
    <div class="tagline">
      Bring kindness and light to the people of Sainte-et-Claire as Lila—a
      tiny mouse with a big heart!
    </div>
    <div class="game-classification">
      Action
    </div>
  </div>

  <div class="card">
    <div class="card-image game-4"></div>
    <div class="game-intro">
      <h3>World of Anterra</h3>
    </div>
    <div class="tagline">
      An innovative, open world RPG, influenced by classic and modern games.
    </div>
    <div class="game-classification">
      Action
    </div>
  </div>
</div>


<!--footer-->
<style>
  <?php include('../src/css/footer.css'); ?>
</style>
<?php include("../components/footer.php"); ?>

<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
  <script src="../src/js/navbar.js"></script>
<?php } else { ?>
  <script src="../src/js/navbarcopy.js"></script>
<?php } ?>
</body>

</html>