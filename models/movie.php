<?php

include_once __DIR__ . "/genres.php";

class Movie{
    public $title;
    public $director;
    public $genres;
    public $cast;
    public $duration;
    public $rating;


    function __construct(string $title, string $director, Genres $genres, array $cast, int $duration, int $rating )
    {
        $this->title = $title;
        $this->director = $director; 
        $this->genres = $genres;
        $this->cast = $cast;
        $this->duration = $duration;
        $this->rating = $rating;
    }

    public function printCast(){
        foreach($this->cast as $actor){
            echo "$actor,  ";
        };
    }
};


?>