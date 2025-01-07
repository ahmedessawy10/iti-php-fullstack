<?php

echo "******************(1)*************** <br>";

echo  "two associative array ==> how to merge them <br>";
$arr1=["name"=> "ayaat","age"=>24];
$arr2=["address"=> "menofia","job"=>"teaching assistant"];

$arr3=array_merge($arr1,$arr2);
print_r($arr3);




echo "<br>******************(2)*************** <br>";
echo  "remove elements from associative array  <br>";
// print_r($arr3);
$arr4=$arr3;
unset($arr4["age"]);
unset($arr4["address"]);
print_r($arr4);
echo "<br>";
print_r($arr3);



echo "<br>******************(3)*************** <br>";

echo  "<br>string  from associative array  <br>";
$str=implode(",",$arr1);
var_dump($str);



echo "<br>******************        (4) funcitons       ************** <br>";

// 1-Find Duplicate Elements
// Write a function findDuplicates($arr) that returns an array of duplicate elements from a given array.

// 2-Write a function filterEven($arr) that filters out only even numbers from an array.

// 3-Write a function findIntersection($arr1, $arr2) that returns the common elements between two arrays.

// ex:print_r(findIntersection([1, 2, 3], [2, 3, 4]));

// 4-Write a function sumArray($arr) that calculates the sum of all elements in an array.



// 1-Find Duplicate Elements



echo "<br>******************(1)*************** <br>";
echo "<br>1-Find Duplicate Elements <br>";

$arr=[1,2,3,4,5,"ahmed","ali",3,33,4,"ahmed"];
function findDuplicates($arr){
$duplicates=[];
    for($i=0;$i<count($arr);$i++){
        
       $count=0;
       for($k=0;$k<count($arr);$k++){
        if($arr[$i]==$arr[$k]){
            $count++;
        }
       }
       if($count>1)
       array_push($duplicates,["$arr[$i]",$count]);
    }

    return $duplicates;
}

print_r((findDuplicates($arr)));

echo "<br>******************(2)*************** <br>";
// 2-Write a function filterEven($arr) that filters out only even numbers from an array.
echo "<br>2-Write a function filterEven(arr) that filters out only even numbers from an array. <br>";
function filterEven($arr){
    $even=[];
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]%2==0){
            array_push($even,$arr[$i]);
        }
    }
    return $even;
}

//ex:print_r(filterEven([1,2,3,4,5,6]));
print_r(filterEven([1,2,3,4,5,6]));

echo "<br>******************(3)*************** <br>";
// 3-Write a function findIntersection($arr1, $arr2) that returns the common elements between two arrays.
echo "<br>3-Write a function findIntersection(arr1, arr2) that returns the common elements between two arrays. <br>";
function findIntersection($arr1, $arr2) {
    $intersection = [];
    
    $intersection= array_intersect($arr1, $arr2);
    
    return $intersection;
    
}

print_r(findIntersection([1, 2, 3], [2, 3, 4]));



echo "<br>******************(5)*************** <br>";

echo "<br> 4-Write a function sumArray(arr) that calculates the sum of all elements in an array.<br>";
// 4-Write a function sumArray($arr) that calculates the sum of all elements in an array.
function sumArray($arr) {

$sum=0;


foreach($arr as $i){

$sum+=$i;

}
}

//ex:print_r(sumArray([1,2,3,4,5]));
print_r(sumArray([1,2,3,4,5]));



// 5-Write a function sumOfDigits($num) that takes a number as input and returns the sum of its digits.

echo "<br>******************(5)*************** <br>";
echo "<br> 5-Write a function sumOfDigits(num) that takes a number as input and returns the sum of its digits.<br>";

function sumOfDigits($num) {
    
    $num = trim((string)abs($num),'0'); 
    $sum = 0;
  
    foreach (str_split($num) as $digit) {
        $sum += (int)$digit; 
    }
    
    return $sum;
}


echo sumOfDigits(0123);

// 6-Write a function countVowelsConsonants($str) that counts the number of vowels and consonants in a given stringfunciton 


echo "<br>******************(6)*************** <br>";
echo "<br>6-Write a function countVowelsConsonants($str) that counts the number of vowels and consonants in a given stringfunciton <br>";
function countVowelsConsonants($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
$count=0;
    foreach(str_split( strtolower($str)) as $char) {
        if (!in_array($char, $vowels)) {
           $count++;
        }
    
}

return $count;
}
//ex:print_r(countVowelsConsonants("hello"));

print_r(countVowelsConsonants("hello"));