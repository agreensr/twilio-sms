function validateForm() {   
    var x = document.forms["contact_form"]["phonenum"].value;
    var y = document.forms["contact_form"]["message"].value;
    
    if (x == null || x == "") {
        alert("Please Enter a Phone Number");
        return false;}
    if (x.length < 10 || x.length > 12){
        alert("Please Enter a Valid Phone Number")
        return false;}
  
    if (y == null || y == "") {
        alert("Please Enter a Message");
        return false;}           
}  