// check if the text is a palindrome   
let user_text=prompt("Enter a text");
let user_search_letter_check=confirm("do you want to check for the letter in case sensitive");

if(user_text){
   
    user_text_array= user_search_letter_check?user_text.split(""):user_text.toLowerCase().split("");
    let j=user_text_array.length;
    let result=true;
    for(let i =0;i<j;i++){
         
        if(i!=j--){
            if(user_text_array[i]!=user_text_array[j]){
                result=false;
                break;
            }
    }
}
result?alert("this is a palinddrome"):alert("this is not a palinddrome");


    
}