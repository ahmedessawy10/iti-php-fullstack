

var  arrayOfDataRequest=[];
var  arrayOfDatacookies=[];
function getDataFromRequst(){
    var request=decodeURIComponent(location.search).replace('?','').split('&');
    if(request){ 
    for(var i=0;i<request.length;i++){
        var data=request[i].split("=");
        arrayOfDataRequest[data[0]]=data[1];
    }
}
}

function setToCookies(){
    if(arrayOfDataRequest){
    for(c in arrayOfDataRequest){
        document.cookie=`${c}=${arrayOfDataRequest[c]}`;
    }
    document.cookie="count=0";
    }
}

function printData(){
    var mydiv=document.createElement('div');
    mydiv.className="data";
    var q="";

    if(document.cookie){
    
        q += arrayOfDatacookies["gender"] === 'male' 
        ? `<img src="./imgs/male.jpg" alt="Male">` 
        : `<img src="./imgs/female.jpg" alt="Female">`;
    q += ` Hi <span style='color:${arrayOfDatacookies["color"]}'>${arrayOfDatacookies["name"]}</span>, you have visited this site <span style='color:${arrayOfDatacookies["color"]}'>${arrayOfDatacookies["count"]}</span> times.<br>`;

                
        mydiv.innerHTML=q;
        document.body.appendChild(mydiv);
    }
    
}

 function getDataFromcookies(){
    if(document.cookie){
        var cookies = document.cookie.split('; ');
        for(var i=0;i<cookies.length;i++){
            var cookie = cookies[i].split('=');
            arrayOfDatacookies[cookie[0].trim()] = cookie[1];
           
        }
    }
}


if(document.cookie){

    getDataFromcookies();
    document.cookie="count="+(+arrayOfDatacookies["count"]+1);
    arrayOfDatacookies["count"]++;

    printData();
    

}else{
    getDataFromRequst();
    setToCookies();
    getDataFromcookies();
    printData()
}



