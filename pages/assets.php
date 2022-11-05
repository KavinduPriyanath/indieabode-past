<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
    <?php include('../src/css/navbar.css'); ?>
</style>
<?php include("../components/navbar.php"); ?>

<!--Including Home Content-->
<style>
    <?php include('../src/css/assets.css'); ?>
</style>




<!--Page Topic-->
<div class="page-topic">
    <h1>Assets</h1>
</div>

<!-- Filters-->

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
        <img src="../images/assets/sort.png" alt="" /> sort by: <span>Release Date</span>
    </div>
</div>

<hr id="topic-break" />

<!--Cards-->

<div class="container" id="card-container">
    <div class="card">
        <div class="card-image game-1">
            <div class="asset-type">Skybox</div>
        </div>
        <div class="game-intro">
            <h3>Skybox Pack Unity</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">Consists of 34 skyboxes</div>
    </div>

    <div class="card">
        <div class="card-image game-2">
            <div class="asset-type">Pixel Art</div>
        </div>
        <div class="game-intro">
            <h3>Tiny Sword</h3>
            <p>$10.99</p>
        </div>
        <div class="tagline">The most deadly and colorful battle</div>
    </div>

    <div class="card">
        <div class="card-image game-3">
            <div class="asset-type">Tile-Set</div>
        </div>
        <div class="game-intro">
            <h3>Kings and Pigs</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">A king vs an army of cute small pigs</div>
    </div>

    <div class="card">
        <div class="card-image game-4">
            <div class="asset-type">Character</div>
        </div>
        <div class="game-intro">
            <h3>Simpsons and Sons</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            A pack with everything you need to make a 3D platformer! quaternius
        </div>
    </div>

    <div class="card">
        <div class="card-image game-1">
            <div class="asset-type">Skybox</div>
        </div>
        <div class="game-intro">
            <h3>Skybox Pack Unity</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">Consists of 34 skyboxes</div>
    </div>

    <div class="card">
        <div class="card-image game-2">
            <div class="asset-type">Pixel Art</div>
        </div>
        <div class="game-intro">
            <h3>Tiny Sword</h3>
            <p>$10.99</p>
        </div>
        <div class="tagline">The most deadly and colorful battle</div>
    </div>

    <div class="card">
        <div class="card-image game-3">
            <div class="asset-type">Tile-Set</div>
        </div>
        <div class="game-intro">
            <h3>Kings and Pigs</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">A king vs an army of cute small pigs</div>
    </div>

    <div class="card">
        <div class="card-image game-4">
            <div class="asset-type">Character</div>
        </div>
        <div class="game-intro">
            <h3>Simpsons and Sons</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            A pack with everything you need to make a 3D platformer! quaternius
        </div>
    </div>

    <div class="card">
        <div class="card-image game-1">
            <div class="asset-type">Skybox</div>
        </div>
        <div class="game-intro">
            <h3>Skybox Pack Unity</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">Consists of 34 skyboxes</div>
    </div>

    <div class="card">
        <div class="card-image game-2">
            <div class="asset-type">Pixel Art</div>
        </div>
        <div class="game-intro">
            <h3>Tiny Sword</h3>
            <p>$10.99</p>
        </div>
        <div class="tagline">The most deadly and colorful battle</div>
    </div>

    <div class="card">
        <div class="card-image game-3">
            <div class="asset-type">Tile-Set</div>
        </div>
        <div class="game-intro">
            <h3>Kings and Pigs</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">A king vs an army of cute small pigs</div>
    </div>

    <div class="card">
        <div class="card-image game-4">
            <div class="asset-type">Character</div>
        </div>
        <div class="game-intro">
            <h3>Simpsons and Sons</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            A pack with everything you need to make a 3D platformer! quaternius
        </div>
    </div>

    <div class="card">
        <div class="card-image game-1">
            <div class="asset-type">Skybox</div>
        </div>
        <div class="game-intro">
            <h3>Skybox Pack Unity</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">Consists of 34 skyboxes</div>
    </div>

    <div class="card">
        <div class="card-image game-2">
            <div class="asset-type">Pixel Art</div>
        </div>
        <div class="game-intro">
            <h3>Tiny Sword</h3>
            <p>$10.99</p>
        </div>
        <div class="tagline">The most deadly and colorful battle</div>
    </div>

    <div class="card">
        <div class="card-image game-3">
            <div class="asset-type">Tile-Set</div>
        </div>
        <div class="game-intro">
            <h3>Kings and Pigs</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">A king vs an army of cute small pigs</div>
    </div>

    <div class="card">
        <div class="card-image game-4">
            <div class="asset-type">Character</div>
        </div>
        <div class="game-intro">
            <h3>Simpsons and Sons</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            A pack with everything you need to make a 3D platformer! quaternius
        </div>
    </div>
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


<script src="../src/js/assets.js"></script>
</body>

</html>