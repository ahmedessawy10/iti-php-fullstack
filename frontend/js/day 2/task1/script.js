// count the letter

do{
   var user_text=prompt("Enter a text","ahmedAliAkmal");
}while(!/^[a-zA-Z]+$/.test(user_text));

do{

   var user_search_letter=prompt("Enter a letter ",'a');

}while(!/^[a-zA-Z]{1}$/.test(user_search_letter));

var user_search_letter_check=confirm("do you want to check for the letter in case sensitive");
var count=0;
$user_text_array =user_search_letter_check?user_text.split(""):user_text.toLowerCase().split("");

    for(var i=0;i<$user_text_array.length;i++){

        if($user_text_array[i]==user_search_letter){
         count++;
        }

    }


alert("count of letter "+user_search_letter +" is "+count);
