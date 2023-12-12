// document.addEventListener("DOMContentLoaded", function() {
//     // unmuteAudio();
//     // setPlayIcon();
//     var isChrome = /Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor);
//     if (!isChrome){
//         $('#iframeAudio').remove()
//     }
//     else {
//         $('#background-music').remove() // just to make sure that it will not have 2x audio in the background
//     }
// });


function toggleMute() {
    var audio = document.getElementById("background-music");
    if (audio.muted) {
        unmuteAudio();
        setMuteIcon();
    } else {
        muteAudio();
        setPlayIcon();
    }
}

function muteAudio() {
    var audio = document.getElementById("background-music");
    // audio.pause();
    audio.muted = true;
}

function unmuteAudio() {
    var audio = document.getElementById("background-music");
    audio.muted = false;
    // audio.play();
}

function setMuteIcon() {
    var muteIcon = document.getElementById("mute-img");
    muteIcon.src = "/music/mute.svg";
}

function setPlayIcon() {
    var muteIcon = document.getElementById("mute-img");
    muteIcon.src = "/music/play.png";
}


