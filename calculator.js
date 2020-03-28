var number1;
var number2;
var result
var operation
function GetNumber(input)
{   
    if(result!=null)
    number1 = result;
    if(number1==null)
    number1 = input;
    else
    number2 = input;
    document.getElementById("result").innerHTML = input;
}
function Start()
{
    number1 = null;
    number2 = null;
    operation = null;
    result = null;
    document.getElementById("result").innerHTML = 0;
}
function Add()
{
   operation = 1;
}
function Sub()
{
    operation = 2;
}
function Mul()
{
    operation = 3;
}
function Div()
{
    operation = 4;
}
function SetResult() 
{
    switch(operation)
    {
        case 1:
            result = number1+number2;
            break;
        case 2:
            result = number1-number2;
            break;
        case 3:
            result = number1*number2;
            break;
        case 4:
            result = number2 == 0 ? 0 : number1/number2;
            break;
        default:
            result = null;
            break;
        }
    document.getElementById("result").innerHTML = result==null ? 0: result;
}
