

  function validate(){
    let result = true;

    let username = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let message = document.getElementById('message').value;
   

    const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
    const usernameRegex = /^[a-zA-Z0-9_]*$/;

    //Email
    if(email == ""){
        emailError.innerHTML  = "Email can't be empty";
        result = false;
      }
    else if(!emailRegex.test(email)) {
        emailError.innerHTML = "Invalid e-mail format";
        result = false;
    }else{
        emailError.innerHTML = "";
    }

    // Username
    if(username == ""){
        nameError.innerHTML = "Username can't be empty";
        result = false;
    }else if(!usernameRegex.test(username)) {
        nameError.innerHTML = "Username must only contain alphanumeric characters";
        result = false;
    }else if(username.length < 6 || username.length > 20) {
        nameError.innerHTML = "Username must be between 6 and 20 characters long";
        result = false;
    }else{
        nameError.innerHTML = "";
    }

    

    return result;
}