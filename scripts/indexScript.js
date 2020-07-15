let modal = document.getElementById('loginPage');
let modalRegister = document.getElementById('registerPage')
// When the user clicks anywhere outside of the modal(register / login page), close it
window.onclick = function(event) {
if (event.target == modal || event.target == modalRegister) {
    closeLogin()
    closeRegister()
}
}
// Function is called when we want to open register from login
function openRegisterPage(){
    closeLogin()
    openRegister()
}
function closeLogin(){
    let login = document.getElementById("loginPage")
    login.style.display='none'
}
function closeRegister(){
    let login = document.getElementById("registerPage")
    login.style.display='none'
}
function openRegister(){
    let login = document.getElementById("registerPage")
    login.style.display='block'
}
function openLogin(){
    let login = document.getElementById("loginPage")
    login.style.display='block'
}
function registerUser(){
    if (checkValue("Name") && checkValue("LastName") && checkValue("Email") && checkValue("Gender")  && checkValue("Age") && checkPassword("Password", "PasswordConfirmation"))
       {
            console.log('vvvv')
           return true;
       } else {
           console.log("gggg");
           alert("Validation failed")
           return false
       }
}

function checkValue(value){
    console.log(value)
    console.log(document.getElementsByName(`${value}`))
    let valueCheck = document.getElementsByName(`${value}`)[0].value ? document.getElementsByName(`${value}`)[0].value  : document.getElementsByName(`${value}`)[1].value 
    if(valueCheck){
        return true
    } else {
        alert(`invalid value for ${value}`)
        return false
    }

}
function checkPassword(psw, pswConf){
    let Password = document.getElementsByName(`${psw}`)[0].value ? document.getElementsByName(`${psw}`)[0].value : document.getElementsByName(`${psw}`)[1].value
    let PasswordConf = document.getElementsByName(`${pswConf}`)[0].value ? document.getElementsByName(`${pswConf}`)[0].value : document.getElementsByName(`${pswConf}`)[1].value
    if(Password != PasswordConf){
        alert("Passwords dont match");
        return false
    } else {
        return true
    }
}
