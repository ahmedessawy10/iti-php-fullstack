function* stepfib(n) {
  let step =curr=prev1= 0;
  
  let prev2 = 1;

  while (step < n) { 
      if (step === 0) {
          yield 0;
      } else if (step === 1) {
          yield 1; 
      } else {
        curr = prev1 + prev2; 
        prev1 = prev2;       
        prev2 = curr;
        yield curr;             
      }
      step++;
  }
}
function* limitfib(n) {
  let step =curr=prev1= 0;
  let prev2 = 1;

  while (curr<n) { 
      if (step === 0) {
          yield 0;
      } else if (step === 1) {
          yield 1; 
      } else {
          curr = prev1 + prev2; 
          prev1 = prev2;       
          prev2 = curr;
          if (curr < n) yield curr;          
      }
      step++;
  }
}


// const gen=stepfib(10);
const gen=limitfib(10);

console.log(gen.next());
console.log(gen.next());
console.log(gen.next());
console.log(gen.next());
console.log(gen.next());
console.log(gen.next());
console.log(gen.next());
console.log(gen.next());
console.log(gen.next());
console.log(gen.next());
//   end fibonacci









//#region class
// start class 


class Polyon{

 
   area(){
    console.log('polygon area');
  }
  perimeter(){
    console.log('polygon perimeter');
  }


}

class Rectangle extends Polyon{
constructor(width,height){
    super();
    this.width=width;
    this.height=height;       
}
area(){
    console.log(  "rect area "  +this.width*this.height);
}

}

let rect=new Rectangle(10,20);
rect.area();

class Squere extends Polyon{
  constructor(side){
      super();
      this.side=side;
  }
  area(){
      console.log(  "Squere area "  + Math.pow(this.side,2));
  }
  
  }

  let squere=new Squere(10);
  squere.area();





  //#endregion


//#region Promise
let ajaxPromise=new Promise((resolve,reject)=>{

let xhr=new XMLHttpRequest();
xhr.open('GET',"../day2/data/rockbands.json");
xhr.onreadystatechange=function(){

  if(xhr.readyState==4 ){
    if(xhr.status==200){
      resolve("request access sucess");
    }else{
      reject('request access  fail');
    }
}

}
xhr.send();

});


ajaxPromise.then((s)=>console.log(s)).catch((s)=>console.log(s));

//#endregion