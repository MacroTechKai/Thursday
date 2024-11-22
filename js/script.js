let emailInput=document.querySelector("#email");
let loginInput=document.querySelector("#login");
let passInput=document.querySelector("#pass");
let pass2Input=document.querySelector("#pass2");
let newsletterInput=document.querySelector("#newsletter");
let termInput=document.querySelector("#terms");


let emailError=document.createElement('p');
emailError.setAttribute("class","warning");
document.querySelectorAll(".email")[0].append(emailError);

let loginError=document.createElement('p');
loginError.setAttribute("class","warning");
document.querySelectorAll(".login")[0].append(loginError);

let passError=document.createElement('p');
passError.setAttribute("class","warning");
document.querySelectorAll(".pass")[0].append(passError);

let pass2Error=document.createElement('p');
pass2Error.setAttribute("class","warning");
document.querySelectorAll(".pass2")[0].append(pass2Error);

let termError=document.createElement('p');
termError.setAttribute("class","warning");
document.querySelectorAll(".checkbox")[0].append(termError);


let termsErrorMsg="Please accept the terms and conditions";
let defaultMSg="";
let emailErrorMsg="Email address should be non-empty with the format xyz@xyz.xyz.";
let loginErrorMsg="User name should be non-empty, and within 20 characters long.";
let passErrorMsg="Password should be at least 6 characters; 1 upper case, 1 lower case.";
let pass2ErrorMsg="Please retype password.";

function vaildateEmail(){
    let email = emailInput.value; // access the value of the email
    let regexp=/\S+@\S+\.\S+/; //reg. expression 
    
    if(regexp.test(email)){ //test is predefiend method to check if the entered email matches the regexp
    error = defaultMSg;}
    else {
    error = emailErrorMsg;}
    return error;
}
function vaildateLogin(){
    let login = loginInput.value;
    if(login === "" || login.length >= 30){ 
    error = loginErrorMsg;}
    else {
    login = login.toLowerCase();
    loginInput.value = login;
    error = defaultMSg;}
    return error;
}

// document.getElementById("login").value = login.toLowerCase();
function vaildatePass(){
    let pass = passInput.value;
    if(pass.length >=8 && (/[A-Z]/.test(pass)) && (/[a-z]/.test(pass))){ 
    error = defaultMSg;}
    else {
    error = passErrorMsg;}
    return error;
}
function vaildatePass2(){
    let pass2 = pass2Input.value;
    let pass = passInput.value;
    if(pass2 !== pass || pass2 === ""){ 
    error = pass2ErrorMsg;}
    else {
    error = defaultMSg;}
    return error;
}
function validatTerms(){
    if(termInput.checked)
    return defaultMSg;
    else
    return termsErrorMsg;

}
//event handler for submit event
function validate(){
    let valid = true;//global validation 
    let emailValidation=vaildateEmail();
    if(emailValidation !==defaultMSg){
        emailError.textContent = emailValidation;
        valid = false;
    }
    let loginValidation=vaildateLogin();
    if(loginValidation !==defaultMSg){
        loginError.textContent = loginValidation;
        valid = false;
    }
    let passValidation=vaildatePass();
    if(passValidation !==defaultMSg){
        passError.textContent = passValidation;
        valid = false;
    }
    let pass2Validation=vaildatePass2();
    if(pass2Validation !==defaultMSg){
        pass2Error.textContent = pass2Validation;
        valid = false;
    }
    let termsValidation=validatTerms();
    if(termsValidation!==defaultMSg){
        termError.textContent=termsValidation;
        valid = false;
    }
    return valid;
};

// event listner to empty the text inside the two paragraph when resent
function resetFormError() {
    emailError.textContent=defaultMSg;
    loginError.textContent=defaultMSg;
    passError.textContent=defaultMSg;
    pass2Error.textContent=defaultMSg;
    termError.textContent=defaultMSg;
};
document.form.addEventListener("reset",resetFormError);

// // add event listner to the email if you entered correct email,the error paragraph with be empty

    emailInput.addEventListener("blur",()=>{ // arrow function
        let x=vaildateEmail();
        if(x == defaultMSg){
            emailError.textContent = defaultMSg;
        }
        else {
            emailError.textContent = emailErrorMsg;
        }
    });
    loginInput.addEventListener("blur",()=>{ // arrow function
        let x=vaildateLogin();
        if(x == defaultMSg){
            loginError.textContent = defaultMSg;
        }
        else {
            loginError.textContent = loginErrorMsg;
        }
        });
    passInput.addEventListener("blur",()=>{ // arrow function
        let x=vaildatePass();
        if(x == defaultMSg){
            passError.textContent = defaultMSg;
            }
            else {
                passError.textContent = passErrorMsg;
            }
        });
    pass2Input.addEventListener("blur",()=>{ // arrow function
        let x=vaildatePass2();
        if(x == defaultMSg){
            pass2Error.textContent = defaultMSg;
            }
            else {
                pass2Error.textContent = pass2ErrorMsg;
            }
        });
// // add event listner to the checkbox if you check the terms box,the error paragraph with be empty

    termInput.addEventListener("change", function(){// anonymous function
        if(this.checked){
            termError.textContent= defaultMSg;
            }
        });

        newsletterInput.addEventListener("change", () => {// anonymous function
        if(newsletterInput.checked){
            alert("By subscribing to the newsletter, you may receive spam.");
            }
        });