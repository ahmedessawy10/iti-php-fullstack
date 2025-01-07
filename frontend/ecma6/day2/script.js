
let band=document.querySelector("#band");
let artist=document.querySelector("#artist");
let album=document.querySelector("#album");

var bandArtistdata=[];

let bandxhr= new XMLHttpRequest();
bandxhr.open("GET","./data/rockbands.json");

bandxhr.onreadystatechange=function(){
  if(bandxhr.readyState==4 && bandxhr.status==200){

    if(bandxhr.response){

      for(bb of JSON.parse(bandxhr.response)  ){
        console.log(bb);
      }
      let banddata=Object.keys(JSON.parse(bandxhr.response));
      banddata.forEach(bandname=>{
        let option=document.createElement("option");
        option.value=bandname;
        option.innerText=bandname;
        band.appendChild(option);
      })

    }else{
     window.alert("error no data found");
    }
  }
}

bandxhr.send('');





band.addEventListener("change",function(){

let brandname=band.value;
let artistxhr= new XMLHttpRequest();
artistxhr.open("GET","./data/rockbands.json");

artistxhr.onreadystatechange=function(){
  if(artistxhr.readyState==4 && artistxhr.status==200){

    if(artistxhr.response){
       bandArtistdata=JSON.parse(artistxhr.response)[brandname];
      if(bandArtistdata.length>0){
        artist.innerHTML="";
        let option=document.createElement("option");
        option.value="";
        option.selected="selected";
        option.innerText="select artist";
        artist.appendChild(option);

        bandArtistdata.forEach(artis=>{
          let option=document.createElement("option");
          option.value=artis.name;
          option.innerText=artis.name;
          artist.appendChild(option);
        })
        
      }

    }else{
     window.alert("error no data found");
    }
  }
}

artistxhr.send();


});



artist.addEventListener("change",function(){
       let artistname=artist.value;
       album.src="";
  if(bandArtistdata.length>0){
   let obj= bandArtistdata.find(artis=>artis.name==artistname);

    album.src=obj.value;
   
  }


});