<?php
class Movie {
    public $title;
    public $year;
    public $language;
    public $director;

    public function __construct($_title, $_year, $_language, $_director){
        $this->title = $_title;
        $this->year = $_year;
        $this->language = $_language;
        $this->director = $_director;
        
    }
}

$movieOne = new Movie('Ritorno al futuro', '1985', 'italiano', 'Robert Zemeckis');
$movieTwo = new Movie('Ritorno al futuro 2', '1989', 'italiano', 'Robert Zemeckis');
var_dump($movieOne);
var_dump($movieTwo)

?>