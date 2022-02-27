function login(){
    var emaill=document.getElementById("emaill").value;
    var passwordd=document.getElementById("passwordd").value;

    if(emailcheck.test(emaill)){
        document.getElementById('emaillerror').innerHTML = " ";
      }else {
      document.getElementById('emaillerror').innerHTML = "Email is incorrect.Check again ";
      return false;
      }
    
      if(passwordcheck.test(passwordd)){
        document.getElementById('passwordderror').innerHTML = " ";
      }else {
      document.getElementById('passwordderror').innerHTML = "Password is incorrect ";
      return false;
      }
  }