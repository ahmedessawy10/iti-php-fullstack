<?php
class Person{
    // private $id,$name;
    static $counter=0;
    
    public function __construct( private $id, private $name){
   
        self::$counter++;
    }
    // public function __construct(  $id,  $name){
    //     $this->id=$id;
    //     $this->name=$name;
    //     self::$counter++;
    // }
    
    function display(){
        echo "ID: ".$this->getId().",<br> Name: ".$this->getName() ."<br>";
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    
}



class Employee extends person{
    private ?Manager $manager =null;
    function __construct(private $compName,private $salary, $id, $name){
        parent::__construct($id,$name);
        
    }


    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }

    public function setCompName($compName){
        $this->compName = $compName;
    }
    public function getCompName(){
        return $this->compName;
    }
    public function display(){
       echo parent::display();
        echo"Company Name: ",$this->getCompName(),"<br> Salary:",$this->getSalary(),"  <br>";
    }
    public function setmananger(Manager $manager){
        $this->manager = $manager;
    }
    public function getmananger(){
      
        if($this->manager!=null){
           echo "manager is<br>";
        $this->manager->display();
        }else{
            echo "no manager assigned,<br>";
        
        }
    }
}


class Manager extends Employee{
    function __construct($compName,$salary,$id,$name){
        parent::__construct($compName,$salary,$id,$name);
        
    }
}



echo "**************persons ************** <br>";

$p=new Person(1,"John");
$p->setId(3);
$p->setName("moahmed");
echo "person id = ".$p->getId()."<br>";

$p->display();


echo "**************employees ************** <br>";



$emp=new Employee(compName:"Google",salary:10000,id:10,name:"moahmed");
$emp->setCompName("Facebook")."<br>";
$emp->setSalary(10000)."<br>";
$emp->display(); 

echo "Employee Counter: ",Employee::$counter."<br>";   

echo "**************managers ************** <br>";

$man=new Manager(compName:"Google",salary:10000,id:12,name:"khalid");

$emp->setmananger($man);
$emp->getmananger();



?>