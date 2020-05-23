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
    let name = document.getElementById("name")
    console.log(name)
}