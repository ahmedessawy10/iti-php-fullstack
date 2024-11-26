// check if the text is valid

let user_name;
let user_phone;
let user_mobile;
let user_email;
// check name
do{
     user_name=prompt("Enter  your name" ,"ahmed");
      console.log(user_name);

}while(!/^[A-Za-z]{3,}$/.test(user_name));
// check phone
do{
     user_phone=prompt("Enter  your phone","12345678");


}while(!/^[0-9]{8}$/.test(user_phone));

// check mobile
do{
     user_mobile=prompt("Enter  your mobile","01012345678");


}while(!/^(010|011|012)\d{8}$/.test(user_mobile));

// check email
do{
     user_email=prompt("Enter  your email","ahmed@123.com");


}while(
     !/^[A-Za-z\$\#]{2,}@{1}(gmail|yahoo)(.com|.net)$/.test(user_email)
     // !/^[A-Za-z]{2,}@{1}\d{3}(.com|.net)$/.test(user_email)

);


alert("name is " + user_name + " phone is " + user_phone + " mobile is " + user_mobile + " email is " + user_email);