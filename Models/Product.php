<?php

class Product {
    public string $id;
    public string $title;
    public function __construct( $id,  $title) {
        $this->id = $id;
        $this->title = $title;
    }
    
}