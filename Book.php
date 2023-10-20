<?php

// require 'Author.php'; 

class Book {
    public $title;
    public $author;

    public function __construct($title, Author $author) {
        $this->title = $title;
        $this->author = $author;
    }

}


