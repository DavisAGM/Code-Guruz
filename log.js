function Validate(){
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    if(email == "" || password == ""){
        alert("Please enter both email and password");
        return false;
    }
    else{
        return true;
    }
}
