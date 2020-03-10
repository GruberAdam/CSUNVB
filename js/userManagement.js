var button = document.getElementsByClassName('modify-button');
var form = document.getElementsByClassName('user-modifications');


for (var i = 0; i < button.length; i++){
    button[i].addEventListener('click', function () {
        console.log('in');
        form.style.visibility = "visible"
    });
}
