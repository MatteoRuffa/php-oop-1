<?php
include_once __DIR__ . '/Product.php';

class Book extends Product{
    public string $pageCount;
    public string $thumbnailUrl;
    public string $longDescription;
    public array $authors;
    public function __construct($id, $title, $pageCount,  $thumbnailUrl,  $longDescription, $authors) {
        parent::__construct($id, $title);
        $this->pageCount = $pageCount;
        $this->thumbnailUrl = $thumbnailUrl;
        $this->longDescription = $longDescription;
        $this->authors = $authors;
    }
   
}