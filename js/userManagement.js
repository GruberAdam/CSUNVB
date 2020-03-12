var closeButton = document.getElementById('close-button');

var imgModifyStatus = document.getElementById('img-modify-status');
var imgModifyEmail = document.getElementById('img-modify-email');
var imgModifyAccountType = document.getElementById('img-modify-account_type');

var userStatus = document.getElementById('user-status');
var userEmail = document.getElementById('user-email');
var userAccountType = document.getElementById('user-account_type');

/* Vars */
var counter = 0;




/* Animations */
closeButton.addEventListener('click', function () {
   document.querySelector('.dialog-window').classList.add('defade')
});
