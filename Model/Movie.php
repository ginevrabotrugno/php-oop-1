<?php

class Movie {
    public $title;
    public $director;
    public $releaseYear;
    public $genres;

    function __construct($_title, $_director, $_releaseYear, $_genres){
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->genres = $_genres;
    }

    // public function getDetails() {
    //     return "Title: $this->title, Director: $this->director, Year: $this->releaseYear, Genre: $this->genres";
    // }
}