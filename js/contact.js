// Error messages
let defaultMsg = "";
let nameErrorMsg = "Name is required and should not be empty.";
let emailErrorMsg = "Email address should be non-empty and in the format xyz@xyz.xyz.";
let messageErrorMsg = "Message is required and should not be empty.";

// Declare variables for input elements
let nameInput = document.querySelector("#name");
let emailInput = document.querySelector("#email");
let messageInput = document.querySelector("#message");

// Create error elements and append them to the corresponding containers
let nameError = document.createElement("p");
nameError.setAttribute("class", "warning");
document.querySelector(".contactcontainer").children[0].append(nameError);

let emailError = document.createElement("p");
emailError.setAttribute("class", "warning");
document.querySelector(".contactcontainer").children[1].append(emailError);

let messageError = document.createElement("p");
messageError.setAttribute("class", "warning");
document.querySelector(".contactcontainer").children[2].append(messageError);

//--------------------------------------------------------------------
// Functions to validate each input and return either a default message or an error message
function validateName() {
    let name = nameInput.value.trim();
    if (name === "") {
        return nameErrorMsg;
    }
    return defaultMsg;
}

function validateEmail() {
    let email = emailInput.value.trim();
    let regexp = /\S+@\S+\.\S+/; // Regular expression for email validation
    if (!regexp.test(email)) {
        return emailErrorMsg;
    }
    return defaultMsg;
}

function validateMessage() {
    let message = messageInput.value.trim();
    if (message === "") {
        return messageErrorMsg;
    }
    return defaultMsg;
}

//----------------------------------------------------------------
// Event handler for submit event
function validateForm(event) {
    let valid = true;

    // Validate name
    let nameValidation = validateName();
    if (nameValidation !== defaultMsg) {
        nameError.textContent = nameValidation;
        valid = false;
    } else {
        nameError.textContent = defaultMsg;
    }

    // Validate email
    let emailValidation = validateEmail();
    if (emailValidation !== defaultMsg) {
        emailError.textContent = emailValidation;
        valid = false;
    } else {
        emailError.textContent = defaultMsg;
    }

    // Validate message
    let messageValidation = validateMessage();
    if (messageValidation !== defaultMsg) {
        messageError.textContent = messageValidation;
        valid = false;
    } else {
        messageError.textContent = defaultMsg;
    }

    // Prevent form submission if validation fails
    if (!valid) {
        event.preventDefault();
    }
}

//----------------------------------------------------------------
// Event listener for form submission
document.querySelector("form").addEventListener("submit", validateForm);

// Event listener to clear warnings on reset
function resetFormError() {
    nameError.textContent = defaultMsg;
    emailError.textContent = defaultMsg;
    messageError.textContent = defaultMsg;
}
document.querySelector("form").addEventListener("reset", resetFormError);

//-------------------------------------------------------------------
// Event listeners to validate individual inputs on blur
nameInput.addEventListener("blur", () => {
    nameError.textContent = validateName();
});
emailInput.addEventListener("blur", () => {
    emailError.textContent = validateEmail();
});
messageInput.addEventListener("blur", () => {
    messageError.textContent = validateMessage();
});
