
// var username = document.getElementById()

username.addEventListener("focusout", function() {

    if (username.value == "" || username.value == null) {
        username.style.border = "1px solid red";
        error_username.innerHTML = "Please enter a username";
        // validate_username = false;

    } else {
        error_username.innerHTML = "";
        username.style.border = "1px solid green";
        // validate_username = true;

    }

})

password.addEventListener("focusout", function() {

    if (password.value == "" || password.value == null) {
        password.style.border = "1px solid red";
        error_password.innerHTML = "Please enter a password";
        // validate_username = false;

    } else {
        error_password.innerHTML = "";
        password.style.border = "1px solid green";
        // validate_username = true;

    }

})

