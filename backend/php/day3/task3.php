<?php

// Problem 1: Create a Bank Account Class
// Design a class BankAccount with the following features:

// Properties: accountNumber, accountHolder, balance.
// Methods:
// deposit($amount): Adds the specified amount to the balance.
// withdraw($amount): Deducts the specified amount from the balance if sufficient funds exist.
// getBalance(): Returns the current balance.
// Problem 2: Student Grade Management
// Create a class Student with the following:

// Properties: name, grades (an array).
// Methods:
// addGrade($grade): Adds a grade to the array.
// calculateAverage(): Calculates and returns the average of the grades.
// printDetails(): Prints the student's name and average grade.



class  BankAccount{
     public $accountNumber, $accountHolder, $balance;
     function __construct($accountNumber, $accountHolder, $balance){
         $this->accountNumber = $accountNumber;
         $this->accountHolder = $accountHolder;
         $this->balance = $balance;
     }
     
     function deposit($amount){
         $this->balance += $amount;
     }
     
     function withdraw($amount){
         if($this->balance >= $amount){
             $this->balance -= $amount;
         }
         
}
     
     function getBalance(){
         return $this->balance;
     }

     function getDetails(){

        return "Account Number: $this->accountNumber, <br> Account Holder: $this->accountHolder,<br>  Balance: $this->balance";
     }

}

class Student{
    public $name, $grades;
    function __construct($name, $grades){
        $this->name = $name;
        $this->grades= $grades;
    }
    
    function addGrade( $grade){
        $this->grades[] = $grade;
    }
    
    function calculateAverage(){
        $sum = array_sum(array_values($this->grades));
        return $sum  / count($this->grades);
       
    }
    
    function printDetails(){
        echo "Name: " . $this->name . "<br>";   
        echo "Average Grade: " . $this->calculateAverage() . "<br>";
    }
}


$bank1=new BankAccount(123456, "mohamed", 1000);
$bank1->deposit(500);
$bank1->withdraw(200);

echo $bank1->getDetails();
echo "</br>Balance: " . $bank1->getBalance() ;
echo "</br>**************************** </br>";

$stud1=new Student("ali mohamed",["math"=>80, "english"=>90, "science"=>85]);
$stud1->printDetails();

?>