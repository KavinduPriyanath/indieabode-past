<html>

<style>
    <?php include('../src/css/navbar.css') ?>
</style>

<?php include('../components/navbar.php') ?>

<style>
    <?php include('../src/css/singlejam.css') ?>
</style>

<div class="container">
    <div class="box">
        <h1>Lost Cartridge Jam</h1>
        <p>Overview</p>

    </div>
    <div class="card">
        <div class="card-box1">
            <p>Submissions open from November 2nd 2022 at 4.00 AM to December 2nd 2022 4.00 AM</p>
        </div>
        <div class="card-box2">

            <div class="box">
                <h3>Stsrts in</h3>
            </div>
            <div class="box">
                <h3>22</h3>
                <p>Days</p>
            </div>
            <div class="box">
                <h3>14</h3>
                <p>hours</p>
            </div>
            <div class="box">
                <h3>40</h3>
                <p>mins</p>
            </div>
            <div class="box">
                <h3>56</h3>
                <p>secs</p>
            </div>
            <div class="box">
                <div class="button">
                    <input type="submit" value="Join Jam">
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <img src="https://img.itch.zone/aW1nLzY1ODQ2NDUucG5n/original/YQmP3O.png">

    <div class="block">
        <h2>About The Jam</h2>
        <p>The Lost Cartridge Jam is an annual game jam where game designers, writers, composers, programmers and other creatives
            from all over the world spend 72 hours creating a Lost Cartridge Game from scratch.

            This is the fourth jam in a row. For previous entries, check out the website.</p>
    </div>
    <div class="block">
        <h2>What is A "Lost Cartridge Game"</h2>
        <p>A Lost Cartridge Game is a game that's been both designed and stylized to look and feel like a vintage game; a game that
            gives the impression of having been lost in a drawer for decades only to be rediscovered in the present day. Emphasis is
            placed on believability, but it's up to you whether you want to express that through game design, aesthetics or both.</p>
    </div>
    <div class="block">
        <h2>Prizes</h2>
        <p>Submissions will be judged on the categories "Quality of Design", "Quality of Aesthetics", "Adherence to Platform" and
            "Going the Extra Mile." Whoever receives the highest score across all categories will be declared the winner, and will
            receive all the prizes</p>
    </div>

    <div class="card-box2">
        <div class="box">
            <img src="https://img.itch.zone/aW1nLzEwMzk3MzAwLnBuZw==/original/oTT2W0.png" loading="lazy">
        </div>
        <div class="box">
            <img src="https://img.itch.zone/aW1nLzEwMzk3MzMwLnBuZw==/original/jYxz3x.png" loading="lazy">
        </div>
        <div class="box">
            <img src="https://img.itch.zone/aW1nLzEwMzk3MzM2LnBuZw==/original/E4nK%2B%2B.png" loading="lazy">
        </div>
        <div class="box">
            <img src="https://img.itch.zone/aW1nLzEwMzk3MzQwLnBuZw==/original/c2UbO%2F.png" loading="lazy">
        </div>
        <div class="box">
            <img src="https://img.itch.zone/aW1nLzEwMzk3MzQ0LnBuZw==/original/3%2FrV7E.png" loading="lazy">
        </div>

    </div>

    <div class="card-box1">
        <h2>Sponsors</h2>
        <div class="card-box2">
            <div class="box">
                <img src="https://img.itch.zone/aW1nLzcxNDI2NTcucG5n/original/TgSOVb.png" loading="lazy">
            </div>
            <div class="box">
                <img src="https://img.itch.zone/aW1nLzcxNDI2NjAucG5n/original/OkvSIS.png" loading="lazy">
            </div>
            <div class="box">
                <img src="https://img.itch.zone/aW1nLzcxOTM4OTMucG5n/original/OcU5mW.png" loading="lazy">
            </div>
            <div class="box">
                <img src="https://img.itch.zone/aW1nLzcxNDI2NjIucG5n/original/TVDeqL.png" loading="lazy">
            </div>
            <div class="box">
                <img src="https://img.itch.zone/aW1nLzcyMzk1MjEucG5n/original/pME9bX.png" loading="lazy">
            </div>
        </div>

    </div>
</div>

<style>
    <?php include('../src/css/footer.css') ?>
</style>

<?php include('../components/footer.php') ?>

<?php if (isset($_SESSION['id']) && !empty($_SESSION['id'])) { ?>
    <script src="../src/js/navbar.js"></script>
<?php } else { ?>
    <script src="../src/js/navbarcopy.js"></script>
<?php } ?>

</html>