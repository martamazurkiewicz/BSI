var number1;
var number2;
var result
var operation
var number1Array = Array();
var number2Array = Array();

function GetNumber(input){
    if(operation == null)
    {
        if( !(number1Array.length == 0 && input == 0) && number1Array.length < 9)
        number1Array += input.toString();

        Display(number1Array);
    }
    else
    {
        if( !(number2Array.length == 0 && input == 0) && number2Array.length < 9)
        number2Array += input.toString();

        Display(number2Array);
    }
}

function Display(arr){
    if(arr.length != 0)
        document.getElementById("result").innerHTML = arr;
    else
        document.getElementById("result").innerHTML = 0;
}

function Start(){
    number1Array = Array();
    number2Array = Array();
    number1 = null;
    number2 = null;
    operation = null;
    result = null;
    document.getElementById("result").innerHTML = 0;
}

function SetOperationCode(code){ 
    operation = code;
    if(result != null)
        number1 = result;
    else
        number1 = ConvertToNumber(number1Array);
}

function SetResult() {
    if(number2Array.length != 0)
        number2 = ConvertToNumber(number2Array);
    else
        number2 = 0;
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
    number1Array = Array();
    number2Array = Array();
    document.getElementById("result").innerHTML = result==null ? 0: result;
}

function ConvertToNumber(stringArr){
    var num = 0;
    var multiplier = 1;
    for(i = stringArr.length-1; i >= 0; i--)
    {
        num += multiplier * parseInt(stringArr[i],10);
        multiplier *= 10;
    }
    return num;
}
