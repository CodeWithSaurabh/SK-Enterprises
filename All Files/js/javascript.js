// Sliding image at homepage
var counter = 1;
setInterval(function(){
document.getElementById('radio' + counter).checked = true;
counter++;
if(counter > 4){
counter = 1;
}
}, 7000);

//Contact Page
function validate(){
    if (document.myform.Name.value==""){
        alert("Please provide your Name!");
        document.myform.Name.focus();
        return false;
    }
    if (document.myform.email.value==""){
        alert("Please enter your email!");
        document.myform.email.focus();
        return false;
    }
    if (document.myform.phone.value==""){
        alert("Please Enter your phone no.!");
        document.myform.phone.focus();
        return false;
    }
    return (true);
}