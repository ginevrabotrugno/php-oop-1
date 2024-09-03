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