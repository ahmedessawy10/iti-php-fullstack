// find the largest word

let user_text=prompt("Enter a text");


let count=0;
let largestWord='';

$wordsArray=user_text.split(" ");
console.log($wordsArray);
for(let i=0;i<$wordsArray.length;i++){

    if(/^[a-zA-z]+$/.test($wordsArray[i])){
        if($wordsArray[i].length > count){
            largestWord=$wordsArray[i];
            count=$wordsArray[i].length;
        }
    }
  
}

alert('largest word is ' + largestWord);
