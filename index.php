<?php

require_once __DIR__ . '/Model/Movie.php';

$movies = [
    new Movie("Inception", "Christopher Nolan", 2010, "Science Fiction"),
    new Movie("The Matrix", "The Wachowskis", 1999, "Action/Sci-Fi"),
    new Movie("Pulp Fiction", "Quentin Tarantino", 1994, "Crime"),
    new Movie("The Godfather", "Francis Ford Coppola", 1972, "Drama"),
    new Movie("Fight Club", "David Fincher", 1999, "Drama"),
    new Movie("Forrest Gump", "Robert Zemeckis", 1994, "Drama/Romance")
];

var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
</head>
<body>


    
</body>
</html>