<?php session_start();

require '../db/database.php';

//get jams from database
$sql = "SELECT * FROM gamejam, gamer where gamejam.jamHostID = gamer.gamerID";
$result = mysqli_query($conn, $sql);

$gamejams = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>

<!DOCTYPE html>
<html lang="en">
<!--Including Navbar-->
<style>
  <?php include('../src/css/navbar.css'); ?>
</style>
<?php include("../components/navbar.php"); ?>

<style>
  <?php include('../src/css/gamejam.css'); ?>
</style>


<!--Page Topic-->
<div class="page-topic">
  <h1>Game Jams</h1>
</div>


<!--  Filters-->


<div class="side-nav" id="side-menu">
  <p>Types</p>

  <div class="type-filter">
    <div class="elements">
      <input type="checkbox" name="" id="Windows" class="checkbox" />
      <label for="Windows">Sprite</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Mac" class="checkbox" />
      <label for="Mac">Character</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Linux" class="checkbox" />
      <label for="Linux">Skybox</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Android" class="checkbox" />
      <label for="Android">Tileset</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Web" class="checkbox" />
      <label for="Webx">Engine</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Web" class="checkbox" />
      <label for="Webx">Font</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Web" class="checkbox" />
      <label for="Webx">Background</label>
    </div>
  </div>

  <p>Price</p>

  <div class="type-filter">
    <div class="elements">
      <input type="radio" name="" id="Released" class="checkbox" />
      <label for="Released">Free</label>
    </div>

    <div class="elements">
      <input type="radio" name="" id="Early" class="checkbox" />
      <label for="Early">5 or less</label>
    </div>

    <div class="elements">
      <input type="radio" name="" id="Upcoming" class="checkbox" />
      <label for="Upcoming">10 or less</label>
    </div>
  </div>

  <p>Release Status</p>

  <div class="type-filter">
    <div class="elements">
      <input type="checkbox" name="" id="Released" class="checkbox" />
      <label for="Released">Released</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Early" class="checkbox" />
      <label for="Early">Prototype</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Upcoming" class="checkbox" />
      <label for="Upcoming">Upcoming</label>
    </div>
  </div>

  <p>Styles</p>

  <div class="type-filter">
    <div class="elements">
      <input type="checkbox" name="" id="Released" class="checkbox" />
      <label for="Released">Pixel Art</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Early" class="checkbox" />
      <label for="Early">8-Bit</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Upcoming" class="checkbox" />
      <label for="Upcoming">16-Bit</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Upcoming" class="checkbox" />
      <label for="Upcoming">Low Poly</label>
    </div>

    <div class="elements">
      <input type="checkbox" name="" id="Upcoming" class="checkbox" />
      <label for="Upcoming">Voxel</label>
    </div>
  </div>
</div>

<div class="upper-break">
  <div class="trigger" onclick="openSideMenu()">
    <i class="fa fa-angle-double-right" id="filter-off"></i>
    <i class="fa fa-angle-double-left" id="filter-on"></i> filters
  </div>
  <div class="sort" id="sort">
    <img src="/images/sort.png" alt="" /> sort by: <span>Release Date</span>
  </div>
</div>

<hr id="topic-break" />



<!--Cards-->

<div class="container" id="card-container">


  <?php foreach ($gamejams as $jam) { ?>
    <a href="singlejam.php?id=<?php echo $jam['gameJamID'] ?>">
      <div class="card">

        <div class="first-row">
          <div class="card-image">
            <img src="../uploads/gamejams/covers/<?= $jam['jamCoverImg'] ?>" alt="" />
          </div>
          <div class="jam-name">
            <h3><?php echo $jam['jamTitle'] ?></h3>
            <div class="tagline">
              <p><?php echo $jam['jamTagline'] ?></p>
            </div>

          </div>
        </div>
        <div class="details">
          <div class="host">Hosted by, <span><?php echo $jam['firstName'] . ' ' . $jam['lastName'] ?></span></div>
          <div class="deadline">Starts on, 
            
          </div>
          <div class="count">
            <h2>56</h2>
            joined
          </div>

        </div>
      </div>
    </a>
  <?php } ?>





</div>

<!--Pagination-->

<div class="pagination">
  <a href="#"><i class="fa fa-angle-left"></i></a>
  <a href="#" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#"><i class="fa fa-angle-right"></i></a>
</div>




<!--Including Footer-->

<style>
  <?php include('../src/css/footer.css'); ?>
</style>
<?php include("../components/footer.php"); ?>

<script src="../src/js/gamejam.js"></script>
<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
  <script src="../src/js/navbar.js"></script>
<?php } else { ?>
  <script src="../src/js/navbarcopy.js"></script>
<?php } ?>

</html>