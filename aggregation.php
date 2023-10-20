<?php 


class Book {
    public $title;

    public function __construct($title) {
        $this->title = $title;
    }
}

class Author {
    public $name;
    public $books = [];


    public function __construct($name) {
        $this->name = $name;
    }


    public function addBook($title) {
        $book = new Book($title);
        $this->books[] = $book;
    }

}

$author = new Author('Muhammed Braa');
$author->addBook('Learning Laravel');
$author->addBook('Zero to Hero in PHP');
$author->addBook('A to Z in PHP');

foreach($author->books as $book) {
    echo "Author: {$author->name}, Book: {$book->title}  <br>";
}
