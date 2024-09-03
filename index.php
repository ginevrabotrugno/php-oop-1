<?php

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movie List</title>
</head>
<body>

<div class="container">
    <h1 class="title">Movies</h1>

    <div class="movie-list">
        <?php foreach ($movies as $movie): ?>
            <div class="movie-card">
                <h2 class="movie-title"><?php echo htmlspecialchars($movie->title); ?></h2>
                <p><strong>Director:</strong> <?php echo htmlspecialchars($movie->director); ?></p>
                <p><strong>Release Year:</strong> <?php echo htmlspecialchars($movie->releaseYear); ?></p>
                <p><strong>Genres:</strong></p>
                <ul class="genres-list">
                    <?php foreach ($movie->genres as $genre): ?>
                        <li><?php echo htmlspecialchars($genre); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>


    
</body>
</html>