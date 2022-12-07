<?php 

class Genres {
    public $main_genre;
    public $subgenres;


    function __construct(string $main_genre, array $subgenres)
    {
        $this->main_genre = $main_genre;
        $this->subgenres = $subgenres;
    }

    public function printGenres(){
        $genres[] = $this->main_genre;
        foreach($this->subgenres as $genre){
            $genre[] = $genre;
        };
        return $genres;
    }


}


?>