<?php

require_once __DIR__ . '/Model/Movie.php';

$movies = [
    new Movie("Inception", "Christopher Nolan", 2010, ["Science Fiction", "Thriller"]),
    new Movie("The Matrix", "The Wachowskis", 1999, ["Action", "Sci-Fi"]),
    new Movie("Pulp Fiction", "Quentin Tarantino", 1994, ["Crime", "Drama"]),
    new Movie("The Godfather", "Francis Ford Coppola", 1972, ["Drama", "Crime"]),
    new Movie("Fight Club", "David Fincher", 1999, ["Drama", "Thriller"]),
    new Movie("Forrest Gump", "Robert Zemeckis", 1994, ["Drama", "Romance"])
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie List</title>
</head>
<body>

<h1>Movies</h1>

<?php foreach ($movies as $movie): ?>
        <ul>
            <li><strong>Title:</strong> <?php echo $movie->title ?></li>
            <li><strong>Director:</strong> <?php echo $movie->director ?></li>
            <li><strong>Release Year:</strong> <?php echo $movie->releaseYear ?></li>
            <li><strong>Genres:</strong>
                <ul>
                    <?php foreach ($movie->genres as $genre): ?>
                        <li><?php echo htmlspecialchars($genre); ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
<?php endforeach; ?>



    
</body>
</html>