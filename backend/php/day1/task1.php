<?php

echo "******************(1)*************** <br>";

$n=5;
foreach(range(1,$n) as $i){
    echo $i."<br>";
}


echo "******************(2)*************** <br>";

$n=10;
$flag=false;
foreach(range(1,$n) as $i){
    if($i%2==0){
        echo $i."<br>";
        $flag=true;
    }
    
  
}
if($flag){
    echo "-1 <br>";
}

echo "******************(3)*************** <br>";
$n=10;
$max=0;
foreach(range(1,$n) as $i){
    if($i>$max){
        $max=$i;
    }
  
}
echo $max."<br>";
echo "******************(4)*************** <br>";

$n=4;
$flag=true;
if($n==0){
    echo "this is not prime number";
}elseif($n==1 || $n==2){
    echo "this is prime number";
}else{
    for($x=2;$x*$x<=$n; $x++){
        if($n%$x==0){
            $flag=false;
            break;
        }
}
if($flag){
    echo "this is  prime number";
}else{
    echo "this is not prime number";
}
}

echo "<br>";
echo "******************(5)*************** <br>";
$n="01221";

$str = str_split(trim(strval($n), '0')); 

$start=0;
$end=count($str)-1;
$flag=true;

    while($start<=$end ){
        if($str[$start++]!=$str[$end--]){
            $flag=false;  
            break; 
        } 
        
    }
    

    echo ($flag)?  "this is paindrome number": "this is not palindrome number";
echo "<br>";

echo "******************(6)*************** <br>";

$n=10;

foreach(range(1,$n) as $i){
    if($n%$i==0 ){
        echo $i."<br>";
    }
  
}

echo "******************(7)*************** <br>";
$a;
$b;


foreach(range(1,$n) as $i){

    

}
echo "******************(8)*************** <br>";

$n=10;
foreach(range(1,$n) as $i){

    for($k=1;$k<=$i; $k++){
        echo "*";
    }
    echo "<br>";

}
?>