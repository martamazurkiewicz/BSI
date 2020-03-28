var number1;
var number2;
var result;
var operation;
var number1Arr = Array();
var number2Arr = Array();

function GetNumber(input){
    if(operation == null)
    {
        if( !(number1Arr.length == 0 && input == 0) && number1Arr.length < 9)
        number1Arr += input.toString();

        Display(number1Arr);
    }
    else
    {
        if( !(number2Arr.length == 0 && input == 0) && number2Arr.length < 9)
        number2Arr += input.toString();

        Display(number2Arr);
    }
}

function Display(arr){
    if(arr.length != 0)
        document.getElementById("result").innerHTML = arr;
    else
        document.getElementById("result").innerHTML = 0;
}

function Start(){
    number1Arr = Array();
    number2Arr = Array();
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
        number1 = ConvertToNumber(number1Arr);
}

function SetResult() {
    if(number2Arr.length != 0)
        number2 = ConvertToNumber(number2Arr);
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
<<<<<<< HEAD
    number1Arr = Array();
    number2Arr = Array();
=======
    number1Array = Array();
    number2Array = Array();
>>>>>>> master
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
