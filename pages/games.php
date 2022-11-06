<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
    <?php include('../src/css/navbar.css'); ?>
</style>
<?php include("../components/navbar.php"); ?>

<!--Including Game Page Content-->
<style>
    <?php include('../src/css/games.css'); ?>
</style>

<!-- Filters-->

<div class="side-nav" id="side-menu">
    <p>Platform</p>

    <div class="type-filter">
        <div class="elements">
            <input type="checkbox" name="" id="Windows" class="checkbox" />
            <label for="Windows">Windows</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Mac" class="checkbox" />
            <label for="Mac">Mac</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Linux" class="checkbox" />
            <label for="Linux">Linux</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Android" class="checkbox" />
            <label for="Android">Android</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Web" class="checkbox" />
            <label for="Webx">Web</label>
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
            <label for="Early">Early Access</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Upcoming" class="checkbox" />
            <label for="Upcoming">Upcoming</label>
        </div>
    </div>

    <p>Features</p>

    <div class="type-filter">
        <div class="elements">
            <input type="checkbox" name="" id="Released" class="checkbox" />
            <label for="Released">Single Player</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Early" class="checkbox" />
            <label for="Early">Multi-Player</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Upcoming" class="checkbox" />
            <label for="Upcoming">Co-op</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Upcoming" class="checkbox" />
            <label for="Upcoming">Puzzle</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Upcoming" class="checkbox" />
            <label for="Upcoming">Achievements</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Upcoming" class="checkbox" />
            <label for="Upcoming">Leaderboard</label>
        </div>

        <div class="elements">
            <input type="checkbox" name="" id="Upcoming" class="checkbox" />
            <label for="Upcoming">Prologues</label>
        </div>
    </div>
</div>
<div class="upper-break">
    <div class="trigger" onclick="openSideMenu()">
        <i class="fa fa-angle-double-right" id="filter-off"></i>
        <i class="fa fa-angle-double-left" id="filter-on"></i> filters
    </div>
    <div class="sort" id="sort">
        <img src="../images/games/sort.png" alt="" /> sort by: <span>Release Date</span>
    </div>
</div>

<hr id="topic-break" />

<!--Cards-->

<div class="container" id="card-container">
    <div class="card">
        <div class="card-image game-1"></div>
        <div class="game-intro">
            <h3>Riley & Rochelle</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            A narrative puzzle game about love and pop in the 90s
        </div>
    </div>

    <div class="card">
        <div class="card-image game-2"></div>
        <div class="game-intro">
            <h3>Late Night Mop</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">A haunted house cleaning simulators</div>
    </div>

    <div class="card">
        <div class="card-image game-3"></div>
        <div class="game-intro">
            <h3>The Spirit and the Mouse</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            Bring kindness and light to the people of Sainte-et-Claire as Lila—a
            tiny mouse with a big heart!
        </div>
    </div>

    <div class="card">
        <div class="card-image game-4"></div>
        <div class="game-intro">
            <h3>World of Anterra</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            An innovative, open world RPG, influenced by classic and modern games.
        </div>
    </div>

    <div class="card">
        <div class="card-image game-1"></div>
        <div class="game-intro">
            <h3>Riley & Rochelle</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            A narrative puzzle game about love and pop in the 90s
        </div>
    </div>

    <div class="card">
        <div class="card-image game-2"></div>
        <div class="game-intro">
            <h3>Late Night Mop</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">A haunted house cleaning simulators</div>
    </div>

    <div class="card">
        <div class="card-image game-3"></div>
        <div class="game-intro">
            <h3>The Spirit and the Mouse</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            Bring kindness and light to the people of Sainte-et-Claire as Lila—a
            tiny mouse with a big heart!
        </div>
    </div>

    <div class="card">
        <div class="card-image game-4"></div>
        <div class="game-intro">
            <h3>World of Anterra</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            An innovative, open world RPG, influenced by classic and modern games.
        </div>
    </div>

    <div class="card">
        <div class="card-image game-1"></div>
        <div class="game-intro">
            <h3>Riley & Rochelle</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            A narrative puzzle game about love and pop in the 90s
        </div>
    </div>

    <div class="card">
        <div class="card-image game-2"></div>
        <div class="game-intro">
            <h3>Late Night Mop</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">A haunted house cleaning simulators</div>
    </div>

    <div class="card">
        <div class="card-image game-3"></div>
        <div class="game-intro">
            <h3>The Spirit and the Mouse</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            Bring kindness and light to the people of Sainte-et-Claire as Lila—a
            tiny mouse with a big heart!
        </div>
    </div>

    <div class="card">
        <div class="card-image game-4"></div>
        <div class="game-intro">
            <h3>World of Anterra</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            An innovative, open world RPG, influenced by classic and modern games.
        </div>
    </div>

    <div class="card">
        <div class="card-image game-1"></div>
        <div class="game-intro">
            <h3>Riley & Rochelle</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            A narrative puzzle game about love and pop in the 90s
        </div>
    </div>

    <div class="card">
        <div class="card-image game-2"></div>
        <div class="game-intro">
            <h3>Late Night Mop</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">A haunted house cleaning simulators</div>
    </div>

    <div class="card">
        <div class="card-image game-3"></div>
        <div class="game-intro">
            <h3>The Spirit and the Mouse</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            Bring kindness and light to the people of Sainte-et-Claire as Lila—a
            tiny mouse with a big heart!
        </div>
    </div>

    <div class="card">
        <div class="card-image game-4"></div>
        <div class="game-intro">
            <h3>World of Anterra</h3>
            <p>$19.99</p>
        </div>
        <div class="tagline">
            An innovative, open world RPG, influenced by classic and modern games.
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


<script src="../src/js/games.js"></script>


</html>