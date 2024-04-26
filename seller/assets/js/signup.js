const signupForm = document.getElementById("signupform");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirm = document.getElementById("confirm");
console.log(signupForm); // Check if signupForm is correctly referencing the form element

signupForm.addEventListener("submit", (e) => {
    e.preventDefault();
    if (checkInputs()) {
        // If all inputs are valid, submit the form
        console.log("Submitting form...");

        signupForm.submit();
    }
});

function checkInputs() {
    let isValid = true;

    // Trim the input values
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const confirmValue = confirm.value.trim();

    // Validate username
    if (usernameValue === '') {
        setError(username, "Username cannot be blank");
        isValid = false;
    } else {
        setSuccess(username);
    }

    // Validate email
    if (emailValue === '') {
        setError(email, "Email cannot be blank");
        isValid = false;
    } else if (!isEmail(emailValue)) {
        setError(email, "Please enter a valid email");
        isValid = false;
    } else {
        setSuccess(email);
    }

    // Validate password
    if (passwordValue === '') {
        setError(password, "Password cannot be blank");
        isValid = false;
    } else if (passwordValue.length <= 4) {
        setError(password, "Password must be at least 5 characters long");
        isValid = false;
    } else {
        setSuccess(password);
    }

    // Validate confirm password
    if (confirmValue === '') {
        setError(confirm, "Please confirm your password");
        isValid = false;
    } else if (passwordValue !== confirmValue) {
        setError(confirm, "Passwords do not match");
        isValid = false;
    } else {
        setSuccess(confirm);
    }

    return isValid;
}

function setError(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");
    small.innerText = message;
    formControl.className = "form-control error";
}

function setSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = "form-control success";
}

function isEmail(email) {
    // Regular expression for email validation
    return /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email);
}
