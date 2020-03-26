var closeButton = document.getElementById('close-button');

var imgModifyStatus = document.getElementById('img-modify-status');
var imgModifyEmail = document.getElementById('img-modify-email');
var imgModifyAccountType = document.getElementById('img-modify-account_type');

var buttonPasswordGenerator = document.getElementById('password-generator-button');
var divParent = document.getElementById('button-parent');

var userStatus = document.getElementById('user-status');
var userEmail = document.getElementById('user-email');
var userAccountType = document.getElementById('user-account_type');

/* Vars */
var counter = 0;


/* Animations */
closeButton.addEventListener('click', function () {
    document.querySelector('.dialog-window').classList.add('defade')
});

/* This will generate a new password for the user */
buttonPasswordGenerator.addEventListener('click', function () {
    randomPassword = createRandomPassword();
    document.getElementById('password_change_id').value = randomPassword;

});

function createRandomPassword() {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var characterLength = characters.length;

    for ( var i = 0; i < 20; i++){
        console.log(Math.floor(Math.random() * characterLength));
        result += characters.charAt(Math.floor(Math.random() * characterLength))
    }
    return result;
}