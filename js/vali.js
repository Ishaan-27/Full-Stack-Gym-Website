function ValidateForm(){
    
    var fname = document.getElementById('fname').value
    var lname = document.getElementById('lname').value
    var pcode = parseInt(document.getElementById('pcode').value)
    var phone = parseInt(document.getElementById('phone').value)
   
    var regName = /^[a-zA-Z]+$/;
    var regpostal = /(^\d{6}$)/;
    var regphone = /(^\d{10}$)/;

    
    if(!regName.test(fname)) 
    {
        alert("Enter only letters in first name !");
    } 
    else{}
    if(!regName.test(lname)) 
    {
        alert("Enter only letters in Last name !");
    } 
    else{}
    if(!regpostal.test(pcode))
    {
        alert("Invalid Postal Code , please enter a 6 digit postal code")
    } 
    else{}
    if(!regphone.test(phone))
    {
        alert("Please enter a 10 digit phone number")
    } 
    else{}
    if((regName.test(fname)) && (regName.test(lname))  && (regpostal.test(pcode)) && (regphone.test(phone)))
    {   
        return true;
    }
    else {
        return false;
    }
}

function on_ValidateForm(){
    
    var fname = document.getElementById('on_fname').value
    var lname = document.getElementById('on_lname').value
    var pcode = parseInt(document.getElementById('on_pcode').value)
    var phone = parseInt(document.getElementById('on_phone').value)
   
    var regName = /^[a-zA-Z]+$/;
    var regpostal = /(^\d{6}$)/;
    var regphone = /(^\d{10}$)/;

    
    if(!regName.test(fname)) 
    {
        alert("Enter only letters in first name !");
    } 
    else{}
    if(!regName.test(lname)) 
    {
        alert("Enter only letters in Last name !");
    } 
    else{}
    if(!regpostal.test(pcode))
    {
        alert("Invalid Postal Code , please enter a 6 digit postal code")
    } 
    else{}
    if(!regphone.test(phone))
    {
        alert("Please enter a 10 digit phone number")
    } 
    else{}
    if((regName.test(fname)) && (regName.test(lname))  && (regpostal.test(pcode)) && (regphone.test(phone)))
    {   
        return true;
    }
    else {
        return false;
    }
}
