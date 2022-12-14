
<?php session_start();

require '../db/database.php';

//get assets from database
$sql = "SELECT * FROM devlog";
$result = mysqli_query($conn, $sql);

$devlogs = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
    <?php include('../src/css/navbar.css'); ?>
</style>
<?php include("../components/navbar.php"); ?>

<!--Including Home Content-->
<style>
    <?php include('../src/css/devlogs.css'); ?>
</style>

<!--Page Topic-->
<div class="page-topic">
    <h1>Devlogs</h1>
</div>

<!-- Filters-->

<div class="side-nav" id="side-menu">
    <p>Post Type</p>

    <div class="type-filter">
        <div class="elements">
            <input type="checkbox" name="" id="Windows" class="checkbox" />
            <label for="Windows">Major Update</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Mac" class="checkbox" />
            <label for="Mac">Postmortem</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Linux" class="checkbox" />
            <label for="Linux">Game Design</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Android" class="checkbox" />
            <label for="Android">Tutorials</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Web" class="checkbox" />
            <label for="Webx">Marketing</label>
        </div>
    </div>
</div>
<div class="upper-break">
    <div class="trigger" onclick="openSideMenu()">
        <i class="fa fa-angle-double-right" id="filter-off"></i>
        <i class="fa fa-angle-double-left" id="filter-on"></i> filters
    </div>
    <div class="sort" id="sort">
        <img src="images/assets/sort.png" alt="" /> sort by: <span>Release Date</span>
    </div>
</div>

<hr id="topic-break" />

<!--Cards-->

<div class="container" id="card-container">

<?php foreach ($devlogs as $devlog) { ?>
    <a href="singledevlog.php?id=<?= $devlog['devLogID'] ?>">
        <div class="card">
            <div class="card-image game">
            <img src="../uploads/devlog/<?= $devlog['devlogImg'] ?>" alt="">

                <div class="dev-log-type"><h4><?= $devlog['Type'] ?></h4></div>
            </div>
            <div class="game-intro">
                <h3><?= $devlog['name'] ?></h3>
                <div class="cmts">
                <img src="../uploads/devlog/<?= $devlog['devlogImg'] ?>" alt="">
                </div>
            </div>
            <div class="post-title"><h3><?= $devlog['name'] ?></h3></div>
            <div class="tagline">
            <h3><?= $devlog['Tagline'] ?></h3>
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



<script src="../src/js/devlogs.js"></script>