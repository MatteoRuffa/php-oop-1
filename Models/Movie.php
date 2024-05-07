<?php

class Movie {
    public string $id;
    public string $title;
    public string $poster_path;
    public string $overview;
    public string $vote_average;
    public function __construct( $id,  $title,  $poster_path,  $overview,  $vote_average) {
        $this->id = $id;
        $this->title = $title;
        $this->poster_path = $poster_path;
        $this->overview = $overview;
        $this->vote_average = $vote_average;
    }
    public function get_id() {
        return $this->id;
    }

}