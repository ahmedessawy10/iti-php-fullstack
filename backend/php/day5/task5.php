<?php

//class auther and book
//  auther 
class Auther
{

    public $name;
    public $email;
    public $gender;

    public function __construct($name, $email, $gender)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {

        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function toString()
    {
        return "auther[name=" . $this->name . ",email=" . $this->email . ",gender=" . $this->gender . "]";
    }
}



// book

class Book
{
    private $name;
    private $authers = [];
    private $price = 0, $qty = 0;
    public function __construct($name, Auther $auther, $price)
    {
        $this->name = $name;
        $this->authers[] = $auther;
        $this->price = $price;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAuther(Auther $auther)
    {
        return $this->authers[] = $auther;
    }
    public function getAuther()
    {
        return $this->authers;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getQty()
    {
        return $this->qty;
    }
    public function setQty($qty)
    {
        $this->qty = $qty;
    }
    public function toString()
    {
        $authers = [];
        foreach ($this->authers as $auther) {
            $authers[] = $auther->toString();
        }
        return "book[name=" . $this->name . "," . implode(',', $authers)  . ",price=" . $this->price . ",qty=" . $this->qty . "]";
    }

    public  function getAutherNames()
    {
        $names = [];
        foreach ($this->authers as $auther) {
            $names[] = $auther->getName();
        }

        return $names;
    }
}

echo "<br> ************auther************  <br>";

$auther1 = new Auther("ahmed", "ahmed@gmail.com", "male");
$auther2 = new Auther("mohamed", "mohamed@gmail.com", "male");
$auther3 = new Auther("sara", "sara@gmail.com", "male");

echo $auther1->toString();

echo "<br> ************book************  <br>";
$book = new Book('php', $auther1, 100);
$book->setAuther($auther2);
$book->setAuther($auther3);
echo $book->toString(), '<br>';
echo $book->getName(), 'book :  auther names is <br>';
foreach ($book->getAutherNames() as $autherName) {
    echo $autherName, '<br>';
}
    