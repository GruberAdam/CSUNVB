/* Author : Adam Gruber
   Date : 11.02.2020
   Version : 1.0
 */

/* Get the form inputs */
var form = document.getElementById('register-form');
var email = document.getElementById('register-email');
var button = document.getElementById('register-button-validation');
var password = document.getElementById('register-password');
var passwordConfirmation = document.getElementById('register-password-confirmation');

/* Checks if password field and confirmation field are equal */
button.addEventListener('click',function (e) {
    e.preventDefault(); // Doesnt refresh the page with the submit button
    if (password.value === passwordConfirmation.value){
        form.submit() // Submits the form
    }
    else{
        passwordConfirmation.className = "form-control is-invalid" // Shows an error
    }
});