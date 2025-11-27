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
</body>
</html>

<?php

//using switch case
$currentSong = "Coffee";

echo "<h1>Using Switch Case:</h1>";
echo "<h3>Current Song:</h3>";

switch ($currentSong) {
    case "got away":
        echo "<p>Now playing: jondre - got away</p>";
        echo "<p>Genre: RnB</p>";
        break;
    case "forever &":
        echo "<p>Now playing: EJEAN - forever &</p>";
        echo "<p>Genre: RnB</p>";
        break;
    case "Coffee":
        echo "<p>Now playing: a!ka - Coffee</p>";
        echo "<p>Genre: Pop</p>";
        break;
    default:
        echo "<p>Song not found in playlist.</p>";
        break;
}


//using match
$currentSong = "forever &";

echo "<br>";
echo "<h1>Using Match Expression:</h1>";
echo "<h3>Current Song:</h3>";


$songDetails = match ($currentSong) {
    "got away" => "jondre - got away",
    "forever &" => "EJEAN - forever &",
    "Coffee" => "a!ka - Coffee",
    default => "Song details not available."
};

echo "<p>Now playing: " . $songDetails . "</p>";

$genre = match ($currentSong) {
    "got away" => "RnB",
    "forever &" => "RnB",
    "Coffee" => "Pop",
    default => "Unknown"
};

echo "<p>Genre: " . $genre . "</p>";
?>

<?php
include 'footer.php';
?>