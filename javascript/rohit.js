
//1.ways to print in javascript
//console.log("Hello World");
//alert("me");
//document.write("this is document write")



//2.Javascript console API
//console.log("Hello World");
//console.warn("this is warining");
//console.error("this is an error");

// 3. JavaScript Variables
// what is variable/ - containers to store data values
//var number1 = 34;
//var number2 = 56;
//console.log(number1 +number2);

//4.Data type in javaScript
//Number
var num1 = 455;
var num2 = 56.76;1
//string
var str1 ="This is a string";
var str2 ='This is also a string';

//object
var marks ={
    ravi:34,
    subaham:82,
    rohit:95.77

}
//console.log(marks)

/*
At a very high level,there are two type of data type in javaScript
1.Primitive data types: undefined, null, number, string, boolean, symbol
2.Reference data tpes:array and object

*/
var arr =[1,2,"babu",4,5]
//console.log(arr)

//operator in javaScript
//Arithmatic operators
var a = 16;
var b = 56;
//console.log("The value of a+b is",a+b);
//console.log("The value of a-b is",a-b);
//console.log("The value of a*b is",a*b);
//console.log("The value of a/b is",a/b);

//Assignment operators
var c = b;
c +=2;
//console.log(c);

// comparison operators
var x=34;
var y=56;
// console.log(x == y)
// console.log(x >= y)
// console.log(x <= y)
// console.log(x > y)
// console.log(x < y)

//Logical operator

//console.log(true && true)
//console.log(false && true)
//console.log(false && false)

//function in javaScript
//DRY = Do not repeat yourself
function avg(a, b){
    c = (a + b)/2;
    return c;
}

c1 = avg(4, 6);
c2 = avg(14, 16);
console.log(c1, c2);


// conditionals in javaScript
/*
var age =41;
if(age > 18){
  console.log('you can drink');
}
//else{
//    console.log('you cannot drink water');
//}
// if -else ladder
if(age > 32){
    console.log("you are not kid");
}
else if(age > 26){
    console.log("you are not a bachlor");

}
else if(age > 22){
    console.log("you are yhe a bachlor");
}
else if(age > 18){
    console.log("18 are not a bachlor");
}
else{
    console.log("you are child");

}
console.log("End of ladder");

*/

//var arr = [1,2,3,4,5,6,7];
//console.log(arr);
//for(var i = 0;i<arr.length;i++){
//    console.log(arr[i])
//}

//arr.forEach(function(element){
//console.log(element)
//let j =0;
//while(j<arr.length){
//    console.log(arr[j]);
//    j++;
//}

//do {
//  console.log(arr[j]);
//   j++;
//}while (j < arr.length);

//Let myArr = ["Fan", "Camera", 34, null, true];
// array Methods
//console.log(myArr.length);
//MyArr.pop();
//console.log(myArr);


// string method  in javascript

let myLovelyString = "Rohit is a good boy good good";
//console.log(myLovelyString.length)
//console.log(myLovelyString.indexOf("good"))
//console.log(myLovelyString.lastIndexOf("good"))
//slice(1,4);
//than print the 3 char in the arr file 

d = myLovelyString.replace("Rohit", "Rohan");
//console.log(d,myLovelyString)

//myDate = new Date();
//console.log(myDate);
//console.log(myDate.getTime());
//console.log(myDate.getFullYear());
//console.log(myDate.getDay());
//console.log(myDate.getMinutes());
//console.log(myDate.getHours());

//DOM manipulation
let elem = document.getElementById('click');
//console.log(elem);

let elemclass= document.getElementsByClassName("container");
//console.log(elemclass);
elemclass[0].classList.add("bg-primary")
elemclass[0].classList.add("text-success")
//console.log(elem.innerHTML);
//console.log(elem.innerText);
//console.log(elemclass[0].innerHTML);
//console.log(elemClass[0].innerText);
//tn = document.getElementsByTagName('div')
//console.log(tn)
//createdElement = document.createElement('p');
//createdElement.innerText = "This is a created para";
//tn[0].appendChild(createdElement);
//createdElement2 = document.createElement('b');
//createdElement2.innerText = "This is a created bold";
//tn[0].replaceChild(createdElement2, createdElement);
//removechild(element); ---> remove an element

// Selecting using Query
//sel = document.querySelector('.container')
//console.log(sel)
//sel = document.querySelectorAll('.container')
//console.log(sel)


//Event in java scrpit
//function clicked(){
//    console.log('The button was clicked')

//}
//window.onload = function(){
  //  console.log("The document was loaded")
//}
//firstContainer.addEventListener('click', function(){
    //document.querySelectorAll('.container')[1].innerHTML = "<b> we have clicked</b>"
  //  console.log("clicked on Container")
//})

//firstContainer.addEventListener('mouseover', function(){
//    console.log("mouse on Container")
//})
//Arroe function


//summ =(a,b)=>{
//return a+b;
//}

//logKaro =()=>{
//    console.log("I am your log")

//}
//SetTimeout and setinterval
//setTimeout(logKaro,2000);
//clr = setInterval(logKaro,2000);

// JavaScript localstorage
//localStroage.setItem('name','rohit')
//localStroge
//localStroage.clear()
//localStroage.getItem('name')


//Json exchange the data from the any varible 

obj = {name:"rohit", length: 1, a:{ this: 'tha"t'}}
jso = JSON.stringify(obj);
console.log(typeof jso)
console.log(jso)
parsed = JSON.parse(`{"name":"rohit","length":1,"a":{"this":"that"}}`)
console.log(parsed);