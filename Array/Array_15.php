<?php
$movies = array(
    array(
        'title' => 'The Shawshank Redemption',
        'director' => 'Frank Darabont',
        'release_year' => 1994
    ),
    array(
        'title' => 'The Godfather',
        'director' => 'Francis Ford Coppola',
        'release_year' => 1972
    )
);
$selectedMovie = $movies[0];
echo "Title: " . $selectedMovie['title'] . "<br>";
echo "Director: " . $selectedMovie['director'] . "<br>";
echo "Release Year: " . $selectedMovie['release_year'];
?>