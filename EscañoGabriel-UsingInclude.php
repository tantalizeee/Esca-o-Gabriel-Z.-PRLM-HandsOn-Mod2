<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Playlist ni Gabogsh</title>
    </head>
    <body>
        <h1>Gabogsh's Playlist XDDDDD</h1>
    <?php
    $playlist = ["got away - jondre", "her - jondre - jondre", "all i need - jondre", "but if it's you - jondre", "dance with me - jondre"];
    ?>
    
    <h2>my goats (just a placeholder  so it doesnt look empty :P):</h2>
    <ul>
        <?php
        $index = 0;
        while ($index < count($playlist)) {
            echo $playlist[$index] . "<br>";
            $index++;
        }
        ?>
    </ul>
    </body>
</html>

<?php
//using include
include 'footer.php';
?>