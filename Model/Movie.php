<?php

class Movie {
    public $title;
    public $director;
    public $releaseYear;
    public $genre;

    function __construct($_title, $_director, $_releaseYear, $_genre){
        $this->title = $_title;
        $this->director = $_director;
        $this->releaseYear = $_releaseYear;
        $this->genre = $_genre;
    }

    public function getDetails() {
        return "Title: $this->title, Director: $this->director, Year: $this->releaseYear, Genre: $this->genre";
    }
}