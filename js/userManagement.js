var button = document.getElementsByClassName('modify-button');
var closeButton = document.getElementById('close-button');
var form = document.getElementsByClassName('user-modifications');

console.log(closeButton);
closeButton.addEventListener('click', function () {
   console.log('in');
   document.querySelector('.dialog-window').classList.add('defade')
});

