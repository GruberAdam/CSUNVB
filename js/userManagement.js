var button = document.getElementsByClassName('modify-button');


for (var i = 0; i < button.length; i++){
    button[i].addEventListener('click', function () {
        console.log("in")
    });
}
