<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- meta tags and title -->
    <meta charset="utf-8">
    <title>Plant More Trees</title>
    <meta name="author" content="Hannah Sheridan">
    <!-- description: about trees, deforestation, and how planting can save the environment -->
    <meta name="description" content="Around 80,000 acres of tropical rainforest are cut down every day. Deforestation has ridden our planet and is
        killing one of the earth's most helpful and beautiful plants: trees. It is uncertain whether this deforestation will ever end, but we can ease its
        damaging effects by planting more trees.">
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

