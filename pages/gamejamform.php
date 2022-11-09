<?php    

session_start();

require '../db/database.php';

if(isset($_POST['submit'])){
    $gamejamTitle = $_POST['title'];
    $foreignKey = $_SESSION['id'];


    //upload to database
    $sql = "INSERT INTO gamejam (jamTitle,jamHostID) VALUES ('$gamejamTitle','$foreignKey')";


    if (mysqli_query($conn, $sql)) {
        echo "Upload successful!";
    } else {
        echo "error";
    }
}


?>

<!DOCTYPE html>

<html>
<style>
<?php include('../src/css/navbar.css')?>
</style>

<?php include('../components/navbar.php')?>

<style>
<?php include('../src/css/gamejamform.css')?>
</style>

    <div class="form-container">

        <form method="POST" id="upload-game" class="input-upload-group">
            <div class="card-details">
                <div class="left">
                <div class="card-box">
                    <span class="details">Title</span>
                    <input type="text" name = "title">
                </div>

                <div class="card-box">
                    <span class="details">Tagline</span>
                    <p>One line summery of the jam</p>
                    <input type="text" placeholder="Optional">
                </div>

                <div class="circle-form">
                    <span class="circle-title">Type</span>
                        <div class="category">
                            <input type="radio" name="Non-ranked">Non-Ranked - Entries are just submitted<br>
                            <input type="radio" name="Ranked">Ranked - Entries are voted on and ranked
                        </div>
                </div>

                <div class="card-box">
                    <span class="details">Start Date</span>
                    <input type="date">
                </div>

                <div class="card-box">
                    <span class="details">End Date</span>
                    <input type="date">
                </div>

                <div class="card-box">
                    <span class="details">Voting End Date</span>
                    <input type="date">
                </div>

                <div class="card-box">
                    <span class="details">Content</span>
                    <p>Makes up the content of your jam page</p>
                    <textarea id="game-details" name="game-details" rows="9" cols="64"></textarea><br><br>
                </div>

                <h3>Voter Settings</h3>
                <div class="circle-form">
                    <span class="circle-title">Who can vote on entries?</span>
                    <div class="category">
                        <input type="radio" name="Submitters Only">Submitters Only - Only ones who joined the game jam could vote.<br>
                        <input type="radio" name="Moderators Only">Moderators Only - Only ones added as moderators could vote.<br>
                        <input type="radio" name="Public">Public - Anyone can vote.
                    </div>
                </div>

                <div class="card-box">
                    <span class="details">Rstrictions</span>
                    <ul>
                        <li>Can join ones game-jam started</li>
                        <li>Limit Participant count</li>
                    </ul>
                    <p>Max. Participant Count</p>
                    <input type="number" placeholder="eg: 20">
                </div>

                <h3>Jam Settings</h3>
                <div class="card-box">
                    <span class="details">Criteria</span>
                    <p>How should the entries of the jam should be ranked.</p>
                    <input type="text">
                </div>

                <div class="card-box">
                    <span class="details">Twitter Hashtag</span>
                    <p>Submitters will be prompted to tweet this tag after submitting.</p>
                    <input type="text" placeholder="Optional">
                </div>

                <div class="card-box">
                    <span class="details">Add Moderators</span>
                    <p>Enter the userids of priviledged users of the gamejam.</p>
                    <input type="text" placeholder="Optional">
                </div>

                <div class="circle-form">
                    <span class="circle-title">Visibility</span>
                    <p>Decide when is your page ready for the public.</p>
                    <div class="category">
                        <input type="radio" name="Draft">Draft   - Only those who are added as moderators can view the page.<br>
                        <input type="radio" name="Public">Public  - Anyone can view the page, you can enable this after you've saved.
                    </div>
                </div>
                </div>

                <div class="right">

                <div class="card-box">
                    <span class="details">Upload Cover Image</span>
                    <input type="image" placeholder="Upload Cover Image">
                </div>
                </div>

            </div>

            <div class="button">
                <input type="submit" name = "submit" value="Save & View Page">
            </div>
        </form>
</div>



<style>
<?php include('../src/css/footer.css')?>
</style>

<?php include('../components/footer.php')?>

<script>
    <?php include('../src/js/navbar.js')?>
</script>

    
</html>