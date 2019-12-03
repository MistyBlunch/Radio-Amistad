console.log('ola')
let radioPlayerContainer = document.getElementById('radioPlayer')
let controlRadio = document.getElementById('controlImgRadio')
let volume = document.getElementById('volume')
let volumeRange = document.getElementById('volumenRange')

let audioElement = new Audio('http://185.33.21.172:10000');

volumeValue = volume.value/100

audioElement.volume = volumeValue

volume.addEventListener('click', function vol() {
  audioElement.volume = volume.value/100
  volumeRange.style.width = (122 * audioElement.volume) + 'px'
})

radioPlayerContainer.appendChild(audioElement)

function playpauseRadio() {
  if (controlRadio.src === 'http://localhost/wordpress/wp-content/themes/Radio-Amistad/imgs/playbtn.svg') {
    audioElement.play()
    controlRadio.src = 'http://localhost/wordpress/wp-content/themes/Radio-Amistad/imgs/pausebtn.svg'
  } else {
    audioElement.pause()
    controlRadio.src = 'http://localhost/wordpress/wp-content/themes/Radio-Amistad/imgs/playbtn.svg'
  }
}
