<!DOCTYPE html>
<html lang="en">

<!--Including Navbar-->
<style>
    <?php
         include('../src/css/navbar.css'); 
         include('../src/css/upload.css'); 
    ?>
</style>
<?php include("../components/navbar.php"); ?>

<!--Including Home Content-->
<style>
    <?php include('../src/css/assets.css'); ?>
</style>

<div class="page-topic">
    <h1>Upload Projects</h1>
</div>

<div class="outer-box">
        <div class="form-box">
            <div class="btn-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="uploadGame()" >Game</button>
                <button type="button" class="toggle-btn" onclick="uploadAsset()">Assets</button>
            </div><br>

            <form method="POST" id="upload-game" class="input-upload-group">
                <div class="upload-row">
                    <div class="upload-col">
                        
                        <label id="game-title" for="game-title">Title</label><br>
                        <input type="text" name="game-title" id="game-title" required/><br><br>

                        <label id="game-tagline" for="game-tagline">Tagline</label><br>
                        <input type="text" name="game-tagline" id="game-tagline" placeholder="Optional"/><br><br>
                        
                        <!--classification details-->
                        <label id="game-classification" for="game-classification">Classification</label><br>
                        <select id="game-classification" name="game-classification">
                            <option value="adventure">Adventure Games</option>
                            <option value="action">Action Games</option>
                            <option value="action-adventure">Action-adventure Games</option>
                            <option value="role-playing">Role-playing Games</option>
                            <option value="simulation">Simulation Games</option>
                            <option value="puzzle">Puzzle Games</option>
                            <option value="idle">Idle Games</option>
                        </select><br><br>

                        <!--Releasing status-->
                        <label id="game-status" for="game-status">Release Status</label><br>
                        <select id="game-status" name="game-status">
                            <option value="released">Released</option>
                            <option value="not released">Not Released</option>
                        </select><br><br>

                        <label id="game-details" for="game-details">Details</label><br>
                        <p id="p">This will be the content of your game page</p><br>
                        <textarea id="game-details" name="game-details" rows="9" cols="50"></textarea><br><br> 
                        
                        <label id="game-tags" for="game-tags">Tags</label><br>
                        <p id="p">Keywords that someone would search to find your game</p><br>
                        <input type="text" id="game-tags" name="game-tags"/> <br><br>
                        
                        <label id="game-price" for="game-price">Pricing</label><br><br>
                        <input type="radio" id="game-free" name="game-price" value="free">
                        <label for="game-free">Free</label><br>
                        <input type="radio" id="game-paid" name="game-price" value="paid">
                        <label for="game-paid">Paid</label><br>
                        <p id="p">Minimum Price - Set to $0 for free games</p>
                        <input type="text" id="game-price-val" name="game-price-val"/><br><br>

                        <label id="upload-game" for="upload-game">Upload Game</label><br>
                        <input type="file" id="upload-game" name="upload-game"><br><br>
   
                        <!--License-->
                        <label id="game-license" for="game-license">License</label><br>
                        <p>Decide when is your page ready for the public</p><br>
                        <select id="game-license" name="game-license">
                            <option value="open-source">Open Source</option>
                            <option value="proprietary">Proprietary</option>
                            <option value="permissive">Permissive</option>
                            <option value="copyleft">Copy Left</option>
                        </select><br><br>

                        <label id="game-visibility" for="game-visibility">Visibility</label><br>
                        <p>Decide when is your page ready for the public</p><br>
                        <input type="radio" id="game-draft" name="game-visibility" value="draft">
                        <label for="game-draft">Draft  - Only those who can edit the project can view the page</label><br>
                        <input type="radio" id="game-public" name="game-visibility" value="public">
                        <label for="game-public">Public - Anyone can view the page, you can enable this after you've saved</label><br>

                    </div>

                    <div class="upload-col">

                        <label id="game-upload-cover-img" for="game-upload-cover-img">Upload Cover Image</label><br>
                        <p>This image will be shown and used to identify your game</p><br>
                        <input type="file" id="game-upload-cover-img" name="game-upload-cover-img" accept=".jpg,.jpeg,.png"><br><br>

                        <label id="game-illustration-vedio" for="game-illustration-vedio">Game Illustration Vedio</label><br>
                        <p>Provide a link to youtube</p><br>
                        <input type="url" id="game-illustration-vedio" name="game-illustration-vedio" placeholder="eg: https://www.youtube.com/"><br><br>

                        <label id="game-screenshots" for="game-screenshots">Screenshots</label><br>
                        <p>These will appear on your game's page. Optional but highly recommended. Upload 3 to 5 for best results</p><br>
                        <input type="file" id="game-screenshots" name="game-screenshots" accept=".jpg,.jpeg,.png" multiple="multiple"><br><br>
                    </div>
                </div>
                <br><br>
                <button type="submit" class="submit-btn">Save & View Page</button>
            </form>
                

            <!--upload assets form-->
                
            <form method="POST" id="upload-asset" class="input-upload-group">
                <div class="upload-row">
                    <div class="upload-col">
                        <label id="asset-title" for="asset-title">Title</label><br>
                        <input type="text" name="asset-title" id="asset-title" required/><br><br>
        
                        <label id="asset-tagline" for="asset-tagline">Tagline</label><br>
                        <input type="text" name="asset-tagline" id="asset-tagline" placeholder="Optional"/><br><br>
                                
                        <!--classification details-->
                        <label id="asset-classification" for="asset-classification">Classification</label><br>
                        <select id="asset-classification" name="asset-classification">
                            <option value="3d-model">3D Model</option>
                            <option value="2d-model">2D Model</option>
                        </select><br><br>
        
                        <!--Releasing status-->
                        <label id="asset-status" for="asset-status">Release Status</label><br>
                        <select id="asset-status" name="asset-status">
                            <option value="released">Released</option>
                            <option value="not released">Not Released</option>
                        </select><br><br>
        
                        <label id="asset-details" for="asset-details">Details</label><br>
                        <p id="p">This will be the content of your assets page</p><br>
                        <textarea id="asset-details" name="asset-details" rows="9" cols="50"></textarea><br><br> 
                            
                        <label id="asset-tags" for="asset-tags">Tags</label><br>
                        <p id="p">Keywords that someone would search to find your assets</p><br>
                        <input type="text" id="asset-tags" name="asset-tags"/> <br><br>
                                
                        <label id="asset-price" for="asset-price">Pricing</label><br>
                        <input type="radio" id="asset-free" name="asset-price" value="free">
                        <label for="asset-free">Free</label><br>
                        <input type="radio" id="asset-paid" name="asset-price" value="paid">
                        <label for="asset-paid">Paid</label><br>
                        <p id="p">Minimum Price - Set to $0 for free assets</p>
                        <input type="text" id="asset-price-val" name="asset-price-val"/><br><br>
        
                        <label id="upload-asset" for="upload-asset">Upload Assets</label><br>
                        <input type="file" id="upload-asset" name="upload-asset"><br><br>
           
                        <!--License-->
                        <label id="asset-license" for="asset-license">License</label><br>
                        <p>Decide when is your page ready for the public</p><br>
                        <select id="asset-license" name="asset-license">
                            <option value="open-source">Open Source</option>
                            <option value="proprietary">Proprietary</option>
                            <option value="permissive">Permissive</option>
                            <option value="copyleft">Copy Left</option>
                        </select><br><br>
        
                        <label id="asset-visibility" for="asset-visibility">Visibility</label><br>
                        <p>Decide when is your page ready for the public</p><br>
                        <input type="radio" id="asset-draft" name="asset-visibility" value="draft">
                        <label for="asset-draft">Draft  - Only those who can edit the project can view the page</label><br>
                        <input type="radio" id="asset-public" name="asset-visibility" value="public">
                        <label for="asset-public">Public - Anyone can view the page, you can enable this after you've saved</label><br>
        
                    </div>
        
                    <div class="upload-col">
        
                        <label id="asset-upload-cover-img" for="asset-upload-cover-img">Upload Cover Image</label><br>
                        <p>This image will be shown and used to identify your asset</p><br>
                        <input type="file" id="asset-upload-cover-img" name="asset-upload-cover-img" accept=".jpg,.jpeg,.png"><br><br>
        
                        <label id="asset-illustration-vedio" for="asset-illustration-vedio">Asset Illustration Vedio</label><br>
                        <p>Provide a link to youtube</p><br>
                        <input type="url" id="asset-illustration-vedio" name="asset-illustration-vedio" placeholder="eg: https://www.youtube.com/"><br><br>
        
                        <label id="asset-screenshots" for="asset-screenshots">Screenshots</label><br>
                        <p>These will appear on your asset's page. Optional but highly recommended. Upload 3 to 5 for best results</p><br>
                        <input type="file" id="asset-screenshots" name="asset-screenshots" accept=".jpg,.jpeg,.png" multiple="multiple"><br><br>
                    </div>
                </div>
                <br><br>
                <button type="submit" class="submit-btn">Save & View Page</button>
            </form>            
        </div>
    </div>


    <!-- footer -->
    <style>
        <?php include('../src/css/footer.css'); ?>
    </style>
    <?php include("../components/footer.php"); ?>

    <!--script-->
    <script src="../src/js/upload.js"></script>
</body>
</html>