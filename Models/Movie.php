<?php
include_once __DIR__ . '/Product.php';

class Movie extends Product{
    public string $poster_path;
    public string $overview;
    public string $vote_average;
    public function __construct($id, $title, $poster_path,  $overview,  $vote_average) {
        parent::__construct($id, $title);
        $this->poster_path = $poster_path;
        $this->overview = $overview;
        $this->vote_average = $vote_average;
    }
    public function getDetails() {
        return "<strong>Titolo: </strong>" . $this->title . "<br> <strong>Trama: </strong><br>" . $this->overview . "<br> <strong>Valutazione media: </strong>" . $this->vote_average;
    }
}