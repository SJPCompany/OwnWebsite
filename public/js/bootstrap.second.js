// a key map of allowed keys
var allowedKeys = {
    13: 'enter',
    37: 'left',
    38: 'up',
    39: 'right',
    40: 'down',
    65: 'a',
    66: 'b'
};

// the 'official' Konami Code sequence
var konamiCode = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a', 'enter'];

// a variable to remember the 'position' the user has reached so far.
var konamiCodePosition = 0;

// add keydown event listener
document.addEventListener('keydown', function(e) {
    // get the value of the key code from the key map
    var key = allowedKeys[e.keyCode];
    // get the value of the required key from the konami code
    var requiredKey = konamiCode[konamiCodePosition];

    // compare the key with the required key
    if (key == requiredKey) {

        // move to the next key in the konami code sequence
        konamiCodePosition++;

        // if the last key is reached, activate cheats
        if (konamiCodePosition == konamiCode.length)
            activateKC();
    } else
        konamiCodePosition = 0;
});

function activateKC() {
    //document.getElementsByClassName('menu').backgroundImage = "url('../public/img/kc.png')";
    document.getElementById('ps').style.backgroundImage="url('../public/img/ps.png')";
    //document.body.style.backgroundImage = "url('../public/img/kc.png')";
}

// Used for 404 page not found

var allowedKeyss = {
    32: 'spacebar',
};

var ee2 = ['spacebar'];

// a variable to remember the 'position' the user has reached so far.
var ee2Position = 0;

// add keydown event listener
document.addEventListener('keydown', function(e) {
    // get the value of the key code from the key map
    var key = allowedKeyss[e.keyCode];
    // get the value of the required key from the ee2 code
    var requiredKey = ee2[ee2Position];

    // compare the key with the required key
    if (key == requiredKey) {

        // move to the next key in the ee2 code sequence
        ee2Position++;

        // if the last key is reached, activate cheats
        if (ee2Position == ee2.length)
            pictureChange();
    } else
        ee2Position = 0;
});

function pictureChange()
{
    document.getElementById("image").src="../scansystem/public/img/404.jpg";
}