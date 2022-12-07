<?php
include_once __DIR__ . "/models/movie.php";

$knives_out = new Movie("Knives Out", "Rian Johnson", new Genres("comedy", ["Crime","Drama"]),["Daniel Craig", "Chris Evans", "Ana de Armas"], 170, 7);


$batman_begins = new Movie("Batman Begins", "Christopher Nolan", new Genres("action", ["crime", "drama"]), ["Christian Bale", "Micheal Caine", "Ken Watanabe"], 140, 8);


$the_dark_knight = new Movie("The Dark Knight", "Christopher Nolan", new Genres("action", ["crime", "drama"]), ["Christian Bale", "Heath Ledger", "Aaron Eckhart"], 152, 9);

$catch_me_if_you_can = new Movie("Catch me if you can", "Steven Spielberg", new Genres("biography", ["crime", "drama"]), ["Leonardo Di Caprio", "Tom Hanks", "Christopher Walken"], 141, 8);


$forrest_gump = new Movie("Forrest Gump", "Robert Zemeckis", new Genres("drama", ["romance", "dramedy"]), ["Tom Hanks", "Robin Wright", "Gary Sinise", "Sally Field"], 144, 9 );


$taxi_driver = new Movie("Taxi Driver", "Martin Scorsese", new Genres("drama", ["crime", "noir"]),["Robert De Niro", "Jodie Foster", "Cybill Sheperd"] , 115, 8 );


$my_movies = [$knives_out, $batman_begins, $the_dark_knight, $catch_me_if_you_can, $forrest_gump, $taxi_driver];