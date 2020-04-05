function validateForm()
{
    var valid = true;
    var dict = {
        "name": /^[A-Z|ŁŚŻŹŃĆ][a-z|łąęóćśńżź]+$/,
        "surname": /^[A-ZŁŚŻŹŃĆ]([a-złąęóćśńżź]+([-| ][A-ZŁŚŻŹŃĆ][a-złąęóćśńżź]+)?)$/,
        "street": /^((ul\.|al\.|pl\.) )?([0-9]+ )?[A-ZĄĘÓŚŃĆŁŻŹ][a-ząęóśćńłżź]*((\-|\.| )(\d)*[A-ZĄĘÓŚŃĆŁŻŹ][a-ząęóśńćłżź]+)*$/,
        "houseNumber": /^[1-9]\d*[A-Z|a-z]?/,
        "flatNumber": /^([1-9]\d*)?/,
        "city": /^[A-ZLŚŻŹŃĆ]([a-złąęóćśńżź]+([-| ][A-ZŁŚŻŹŃĆ][a-złąęóćśńżź]+)?)$/,
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
function resetForm()
{
    var formsList = [
        "name", "surname", "street", "houseNumber", "flatNumber", "city", "dateofBirth", "phoneNumber"
    ]
    for(i=0; i<formsList.length;i++)
    {
        document.getElementById(formsList[i]).style.borderColor = "black";
    }
}