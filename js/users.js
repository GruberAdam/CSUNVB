/* Author : Adam Gruber
   Date : 11.02.2020
   Version : 1.0
 */

/* Get the form inputs */
var email = document.getElementById('email');
var button = document.getElementById('button-validation');
var password = document.getElementById('password');
var passwordConfirmation = document.getElementById('password-confirmation');

password.addEventListener("keyup", passwordConfirmationChecker);
passwordConfirmation.addEventListener("keyup", passwordConfirmationChecker);


/* This will check that both password inputs maches */
function passwordConfirmationChecker() {

    if (password.value === passwordConfirmation.value && password.value != "") {
        passwordConfirmation.className = "form-control is-valid";// Shows an error
        button.disabled = false;
    } else {
        button.disabled = true;
        passwordConfirmation.className = "form-control is-invalid"; // Shows an error
    }
}