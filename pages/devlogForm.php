<?php    

session_start();

require '../db/database.php';

$allowed_exts = array("jpg", "jpeg", "png");

if(isset($_POST['submit'])){

    // $date = date('Y-m-d H:i:s');
    $devLogTitle = $_POST['title'];
    // $devTagline = $_POST['tagline'];
    $devLogContent = $_POST['devLog-details'];
    $devVisibility = $_POST['dev-visibility'];
    $type = $_POST['type'];

    $foreignKey = $_SESSION['id'];

    // //upload cover photo
    // $jam_cover_img_name = $_FILES['coverImg']['name'];
    // $jam_cover_img_temp_name = $_FILES['coverImg']['tmp_name'];

    // $jam_cover_img_ext = strtolower(pathinfo($jam_cover_img_name, PATHINFO_EXTENSION));

    // if (in_array($jam_cover_img_ext, $allowed_exts)) {
    //     $new_jam_cover_img_name = "Cover-" . $gamejamTitle . '.' . $jam_cover_img_ext;
    //     $jam_cover_upload_path = '../uploads/gamejams/covers/' . $new_jam_cover_img_name;
    //     move_uploaded_file($jam_cover_img_temp_name, $jam_cover_upload_path);
    // }

    $gamesQuery = "SELECT * FROM freegame WHERE gameDeveloperID = '$foreignKey';
    $games = mysqli_query($conn, $gamesQuery);




    //upload to database
    $sql = "INSERT INTO devlog (description,name,gameDeveloperID,Visibility,Type) 
                VALUES ('$devLogContent','$devLogTitle','$foreignKey','$devVisibility','$type')";

    

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

    <h1>Devlog Form</h1>

    <div class="form-container">

        <form method="POST" id="upload-game" class="input-upload-group" enctype="multipart/form-data">
            <div class="card-details">
                <div class="left">
                <div class="card-box">
                    <span class="details">Title</span>
                    <input type="text" name="title">
                </div>

                <div class="card-box">
                    <span class="details">Tagline</span>
                    <p>One line summery of the devlog</p>
                    <input type="text" name = "tagline" placeholder="Optional">
                </div>


                <div class="card-box">
                    
                    <span class="details">Type</span>   
                    <select id="type" name="type" >
                    <option value="Game Design">Game Design</option>
                    <option value="Tutorial">Tutorial</option>
                    <option value="Major Update">Major Update</option>
    
  </select><br><br>

                </div>


                <div class="card-box">
                    <span class="details">Content</span>
                    <p>Write your content</p>
                    <textarea id="devLog-details" name="devLog-details" rows="9" cols="64"></textarea><br><br>
                </div>


                <div class="circle-form">
                    <span class="circle-title">Visibility</span>
                    <p>Decide when is your page ready for the public.</p>
                    <div class="category">
                    <input type="radio" id="dev-draft" name="dev-visibility" value="draft">
                    <label for="dev-draft">Draft - Only those who can edit the project can view the page</label><br>
                    <input type="radio" id="dev-public" name="dev-visibility" value="public">
                    <label for="dev-public">Public - Anyone can view the page, you can enable this after you've saved</label><br>
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
<?php

            if(mysqli_num_rows($games) > 0)
                                    {
                                        foreach($games as $hotel_manager)
                                        {
                                            ?>
                                                        <div class="cards">
                                                            <div class="service1">
                                                            <div class="location-header"><h5>Location :- <?= $hotel_manager['gameName']; ?> </h5></div>
                                                            <img width="250px" height="200px" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($hotel_manager['hotel_image']); ?>" />
                                                            <p><?= $hotel_manager['description']; ?> </p>
                                                            <div class="buttonContainer">
                                                                <a href="./view-each-service.php?service_id=<?=$hotel_manager['service_id']; ?>" class="viewButton" style="text-decoration:none">View</a>
                                                                <a href="./edit-services.php?service_id=<?=$hotel_manager['service_id']; ?>" class="editButton" style="text-decoration:none">Edit</a>
                                                                <a href="./delete-service.php?service_id=<?=$hotel_manager['service_id']; ?>" class="deleteButton" style="text-decoration:none">Delete</a>
                                                            </div>
                                                            </div>
                                                        </div>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h3> No Services Found </h4>";
                                    }
                                ?> 

            <div class="button">
                <input type="submit" name="submit" value="Save & View Page">
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