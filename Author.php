<?php

require 'Book.php';

class Author {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}


$author = new Author('Mohammed Ali', 30);
$book = new Book('PHP for Beginners', $author);
echo $book->author->age;




