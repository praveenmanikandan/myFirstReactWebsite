function add(){
    var number1=document.querySelector('#number1').value;
    var number2=document.querySelector('#number2').value;
    document.querySelector("#result").value=parseInt(number1)+parseInt(number2);
}
function sub(){
    var number1=document.querySelector('#number1').value;
    var number2=document.querySelector('#number2').value;
    document.querySelector("#result").value=parseInt(number1)-parseInt(number2);
}
function mul(){
    var number1=document.querySelector('#number1').value;
    var number2=document.querySelector('#number2').value;
    document.querySelector("#result").value=parseInt(number1)*parseInt(number2);
}
function div(){
    var number1=document.querySelector('#number1').value;
    var number2=document.querySelector('#number2').value;
    document.querySelector("#result").value=parseInt(number1)/parseInt(number2);
}
function mod(){
    var number1=document.querySelector('#number1').value;
    var number2=document.querySelector('#number2').value;
    document.querySelector("#result").value=parseInt(number1)%parseInt(number2);
}
function addsub()
{
add();
sub();
}
function clear1()
{
 document.querySelector("#number1").value=" ";
 document.querySelector("#number2").value=" ";
 document.querySelector("#result").value=0;
}