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
    <!-- while loop -->
    <h2>my goats (Displaying using While loop):</h2>
    <ul>
        <?php
        $index = 0;
        while ($index < count($playlist)) {
            echo $playlist[$index] . "<br>";
            
            $index++;
        }
        ?>
    </ul>
    <!-- do-while loop -->
    <br>
    <h2>my goats (Displaying using Do While loop):</h2>
    <ul>
        <?php
        $index = 0;
        do {
            echo $playlist[$index] . "<br>";
            $index++; 
        } while ($index < count($playlist));
        ?>
    </ul>
    <!-- foreachh -->
    <br> 
    <h2>my goats (Displaying using Foreach loop):</h2>
    <ul>
        <?php
        foreach ($playlist as $song) {
            echo $song . "<br>";
        }
        ?>
    </ul>

</body>
</html>
<?php
include 'footer.php';
?>