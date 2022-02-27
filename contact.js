function validate(){
var username = document.getElementById('username').value;
var lastname = document.getElementById('lastname').value;
// var email = document.getElementById('email').value;
var number = document.getElementById('number').value;

var usercheck = /^[A-Z]{1}[A-Za-z. ]{3,30}$/ ;
var lastnamecheck = /^[A-Z]{1}[A-Za-z. ]{3,30}$/ ;
// var emailcheck = /^[A-Za-z_]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{2,6}$/ ;
var numbercheck = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;


if(usercheck.test(username)){
    document.getElementById('usererror').innerHTML = " ";
}else {
  document.getElementById('usererror').innerHTML = "Name is invalid Example: Name";
  return false;
}

if(lastnamecheck.test(lastname) || lastname == null){
  document.getElementById('lastnameerror').innerHTML = " ";
}else {
document.getElementById('lastnameerror').innerHTML = "Last Name is invalid Example: Lastname";
return false;
}

// if(emailcheck.test(email)){
//   document.getElementById('emailerror').innerHTML = " ";
// }else {
//   document.getElementById('emailerror').innerHTML = "Email is invalid Example: email@example.com";
// return false;
// }

if(numbercheck.test(number)){
  document.getElementById('numbererror').innerHTML = " ";
}else {
document.getElementById('numbererror').innerHTML = "Number is invalid Example: +0123456789";
return false;
}

}