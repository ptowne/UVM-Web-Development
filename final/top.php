<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>

<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset = "UTF-8">
        <title>The Long Trail Summer Camp</title>
        <meta name = "author" content = "Hannah Sheridan">
        <meta name = "description" content = "Explore the wonders of Vermont with this all-year-round camp for kids and adults alike!">
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">

        <link rel="stylesheet" href="css/custom.css?version=<?php print time();?>" type="text/css">
        <link rel="stylesheet" media = "(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time();?>" type="text/css">
        <link rel="stylesheet" media = "(max-width: 600px)" href="css/custom-phone.css?version=<?php print time();?>" type="text/css">
    </head>


<?php
print '<body class ="' . $pathParts['filename'] . '">';
print '<!-- ################## Body Element ################## -->';
include 'connect-DB.php';
include 'header.php';
include 'nav.php';
?>
