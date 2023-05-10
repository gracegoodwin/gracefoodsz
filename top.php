<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$PATHPARTS = PATHINFO($PHPSELF);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Grace's Recipes</title>
        <meta name="author" content="Grace Goodwin">
        <meta name="description" content="This website contains recipes for a beginner home cook. It offers various different meals with varying ingredients. Some of the recipes are vegetarian, although, many will satisfy a true meat lover.">
        <meta name="viewport" content="width=device-width, initial-scale-1.0">
        <link rel="stylesheet" 
        href="css/custom.css?version=<?php print time(); ?>" 
        type="text/css">
        <link rel="stylesheet"
              media="(max-width: 800px)"
              href="css/custom-tablet.css?version=<?php print time(); ?>"
              type="text/css">
        <link rel="stylesheet"
              media="(max-width: 800px)"
              href="css/custom-phone.css?version=<?php print time(); ?>"
              type="text/css">
    </head>
    <?php
    print '<body class="' . $pathParts['filename'] . '">';
    print '<!-- ##### Body Element ##### -->';

    include 'connect-DB.php';
    include 'header.php';
    include 'nav.php';
    ?>
