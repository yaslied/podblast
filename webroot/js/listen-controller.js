const media = new Audio('../../audio/audio.mp3');
media.removeAttribute('controls');
controls.style.visibility = 'visible';

const play = document.querySelector('#play');
const stop = document.querySelector('.stop');

play.addEventListener('click', playPauseMedia);

function playPauseMedia() {
  if(media.paused) {
    play.setAttribute('data-icon','u');
    media.play();
  } else {
    play.setAttribute('data-icon','P');
    media.pause();
  }
}

function playForce() {
  media.play();
}