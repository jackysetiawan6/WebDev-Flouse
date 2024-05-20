const inputEmail = document.getElementById("email-text");
const inputPassword = document.getElementById("pass-text");
const inputRePassword = document.getElementById("re-pass-text");
const submitBtn = document.getElementById("submit-btn");

const emailError = document.getElementById("email-error");
const passError = document.getElementById("pass-error");
const rePassError = document.getElementById("re-pass-error");

submitBtn.addEventListener("click", (event)=>{
    event.preventDefault();

    var errorText = 0;

    const email = inputEmail.value;
    var errorEmail = "";
    if(!email.includes("@") || !email.includes(".com")){
        errorEmail = "Invalid email (example: yourname@email.com)";
        errorText = 1;
    }
    emailError.style.opacity = 1;
    emailError.innerHTML = errorEmail;
    
    const password = inputPassword.value;
    var errorPass = "";
    if(password.length < 8){
        errorPass = "Password must consist of minimum 8 alphanum";
        errorText = 1;
    }
    passError.innerHTML = errorPass;
    passError.style.opacity = 1;

    const rePassword = inputRePassword.value;
    var errorRePass = "";
    if(password != rePassword){
        errorRePass = "Passwords do not match"
        errorText = 1;
    }
    rePassError.innerHTML = errorRePass;
    rePassError.style.opacity = 1;
    
    if(errorText == 0){
        // alert("Successfully Registered");
        window.location.href='/';
    }
})