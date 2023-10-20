<?php
namespace PHP\TRA;


trait UsersT {
    protected $firstName;
    protected $lastName;



    public function setFirstName($fn) {
        $this->firstName = $fn;
    }
    public function setLastName($ln) {
        $this->lastName = $ln;
    }

    public function getName() {
        return $this->firstName .' '. $this->lastName;
    }
}


trait Books {
    protected $bname;
    public function setFirstName($n) {
        $this->bname = $n;
    }
}



class Author {
    use UsersT, Books {
        UsersT::setFirstName insteadof Books;
    }

//    public function __construct()
//    {
//        echo "Constructor of Author";
//    }
}

$x = new Author();
$x->setFirstName('Mohammed');
$x->setLastName('Ali');
echo $x->getName();





?>