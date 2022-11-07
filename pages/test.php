<?php

session_start();

echo $_SESSION['id'];


require '../db/database.php';

if (isset($_POST['asset-submit'])) {
    $assetName = $_POST['asset-title'];
    $assetTagline = $_POST['asset-tagline'];
    //$assetClassification = $_POST['asset-classification'];
    // $assetStatus = 
    // $assetDetails = 
    // $assetTags = 
    // $assetPricing = 
    // $assetLicense = 
    // $asset =
    // $assetVisibility = 

    //upload to db
    $sql = "INSERT INTO freeasset (assetName, assetTagline) VALUES ('$assetName', '$assetTagline')";

    if (mysqli_query($conn, $sql)) {
        echo "Upload successful!";
    } else {
        echo "error";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">

        <input type="text" name="asset-title">
        <input type="text" name="asset-tagline">
        <button type="submit" name="asset-submit">Submit</button>

    </form>
</body>

</html>