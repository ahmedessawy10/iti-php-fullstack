var canvas=document.getElementById('myCanvas');
var intialColor=document.getElementById('color').value;
var ctx=canvas.getContext('2d');

function createCanvas(){
    console.log(canvas.height + ' ' + canvas.width); // canvas.width
    var count=Math.random()*150;
   var color=document.getElementById('color').value;
    if(color !== intialColor){
        // not same color
        
        ctx.clearRect(0, 0, canvas.width, canvas.height);

    }
    for(var i=0;i<count;i++){
        ctx.beginPath();
        ctx.strokeStyle = color;
        ctx.arc(Math.random()*canvas.width,Math.random()*canvas.height,5,0,2*Math.PI);
        
        ctx.stroke();
    }
    intialColor=color;

}