var number1;
var number2;
var result
var operation
var number1Array = Array();
var number2Array = Array();
function GetNumber(input)
{
    if(operation == null)
    {
        if( !(number1Array.length == 0 && input == 0) && number1Array.length < 9)
            number1Array += input.toString();
        if(number1Array.length != 0)
            document.getElementById("result").innerHTML = number1Array;
        else
            document.getElementById("result").innerHTML = 0;
    }
    else
    {
        if(result != null)
            number1 = result;
        else
            number1 = ConvToNumber(number1Array);

        if( !(number2Array.length == 0 && input == 0) && number2Array.length < 9)
            number2Array += input.toString();
        if(number2Array.length != 0)
            document.getElementById("result").innerHTML = number2Array;
        else
            document.getElementById("result").innerHTML = 0;
    }
}
function Start()
{
    number1Array = null;
    number2Array = null;
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
    number2 = ConvertToNumber(number2Array);

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
    operation = null;
    document.getElementById("result").innerHTML = result==null ? 0: result;
}
function ConvToNumber(stringArr)
{
    var num;
    var multiplier = 1;
    alert(stringArr);
    for(i = stringArr.length-1; i >= 0; i--)
    {
        num += multiplier * parseInt(stringArr[i],10);
        multiplier *= 10;
    }
    alert(num);
    return num;
}
