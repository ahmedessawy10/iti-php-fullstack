<?php
abstract class  Person
{
    public $name;
    public $address;
    public function  __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }


    public function setName()
    {
        return $this->name;
    }
    public abstract function getName();

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public abstract function getAddress();
    public function toString()
    {
        return "Person[name=" . $this->name . ",address=" . $this->address . "]";
    }
}

class Student extends Person
{


    public function __construct($name, $address, private $program, private $year, private $fee)
    {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getName()
    {
        return  "student name :" . $this->name;
    }
    public function getAddress()
    {
        return "student address :" . $this->address;
    }

    public function getProgram()
    {
        return $this->program;
    }
    public function setProgram($program)
    {
        $this->program = $program;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getFee()
    {
        return $this->fee;
    }
    public function setFee($fee)
    {
        $this->fee = $fee;
    }
    public function toString()
    {
        return  parent::toString() . ",program=" . $this->program . ",year=" . $this->year . ",fee=" . $this->fee;
    }
}


class Staff extends Person
{


    public function __construct($name, $address, private $school, private $pay)
    {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getName()
    {
        return  "student name :" . $this->name;
    }
    public function getAddress()
    {
        return "student address :" . $this->address;
    }

    public function getSchool()
    {
        return $this->school;
    }
    public function setSchool($school)
    {
        $this->school = $school;
    }
    public function getPay()
    {
        return $this->pay;
    }
    public function setPay($pay)
    {
        $this->pay = $pay;
    }

    public function toString()
    {
        return "staff[" . parent::toString() . ",School=" . $this->school . ",pay=" . $this->pay . "]";
    }
}

echo "<br> ************Student************  <br>";
$student = new Student("ahmed", "cairo", "cs", 2021, 3000);
echo $student->toString();
echo "<br> ************Staff************  <br>";
$staff = new Staff("ali", "cairo", "menofia", 1500);
echo $staff->toString();