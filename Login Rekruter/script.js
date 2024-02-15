function validateForm() {
    var email = document.getElementById("email").value.trim();
    var password = document.getElementById("pass").value.trim();
    var emailErrorMessage = document.getElementById("emerr");
    var passwordErrorMessage = document.getElementById("errmess");
    var emailInput = document.getElementById("email");
    var passwordInput = document.getElementById("pass");

    if (password === "") {
        passwordErrorMessage.innerText = "Please enter your password!";
        passwordErrorMessage.classList.add("error-symbol");
        passwordErrorMessage.style.color = "red";
        passwordErrorMessage.removeAttribute("hidden");
        passwordInput.style.borderColor = "red";
    } else {
        passwordErrorMessage.innerText = "";
        passwordErrorMessage.classList.remove("error-symbol");
        passwordErrorMessage.classList.add("success-symbol");
        passwordErrorMessage.style.color = "green";
        passwordErrorMessage.removeAttribute("hidden");
        passwordInput.style.borderColor = "green";
    }

    if (email === "") {
        emailErrorMessage.innerText = "Please enter your email!";
        emailErrorMessage.classList.add("error-symbol");
        emailErrorMessage.style.color = "red";
        emailErrorMessage.removeAttribute("hidden");
        emailInput.style.borderColor = "red";
    } else if (!email.includes("@")) {
        emailErrorMessage.innerText = "Please enter a valid email!";
        emailErrorMessage.classList.add("error-symbol");
        emailErrorMessage.style.color = "red";
        emailErrorMessage.removeAttribute("hidden");
        emailInput.style.borderColor = "red";
    } else {
        emailErrorMessage.innerText = "";
        emailErrorMessage.classList.remove("error-symbol");
        emailErrorMessage.classList.add("success-symbol");
        emailErrorMessage.style.color = "green";
        emailErrorMessage.removeAttribute("hidden");
        emailInput.style.borderColor = "green";
    }
}