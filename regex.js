function validateForm()
{
    var valid = true;
    var dict = new Object();
    var dict = {
        "name": /^[A-Z|ŚŻŹŃĆ][a-z|ąęóćśńżź]+$/,
        "surname": /^[A-ZŚŻŹŃĆ]([a-ząęóćśńżź]+([-| ][A-ZŚŻŹŃĆ][a-ząęóćśńżź]+)?)$/,
        "city": /^[A-ZŚŻŹŃĆ]([a-ząęóćśńżź]+([-| ][A-ZŚŻŹŃĆ][a-ząęóćśńżź]+)?)$/,
        "houseNumber": /^[1-9]\d*[A-Z|a-z]?/,
        "flatNumber": /^([1-9]\d*)?/,
        "dateofBirth": /^(([12]\d)|(0\d)|(3[01]))\.((0[1-9])|(1[012]))\.((19\d{2})|(20((1\d)|(20))))$/,
        "phoneNumber": /^\d{3}-\d{3}-\d{3}$/
    };
    for(var key in dict) {
        if(checkInput(key, dict[key]) == false)
        valid = false;
    }
    return valid;
}
function checkInput(formID, regex)
{
    var element = document.getElementById(formID).value;
    var elementResult = regex.test(element);
    document.getElementById(formID).style.borderColor = elementResult==false ? "red" : "black";
    return elementResult==false ? false: true;
}