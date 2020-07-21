(function() {
  window.AudioContext = window.AudioContext || window.webkitAudioContext;
  if (window.AudioContext) {
    window.audioContext = new window.AudioContext();
  }
  var fixAudioContext = function (e) {
    if (window.audioContext) {
      // Create empty buffer
      var buffer = window.audioContext.createBuffer(1, 1, 22050);
      var source = window.audioContext.createBufferSource();
      source.buffer = buffer;
      // Connect to output (speakers)
      source.connect(window.audioContext.destination);
      // Play sound
      if (source.start) {
        source.start(0);
      } else if (source.play) {
        source.play(0);
      } else if (source.noteOn) {
        source.noteOn(0);
      }
    }
    // Remove events
    document.removeEventListener('touchstart', fixAudioContext);
    document.removeEventListener('touchend', fixAudioContext);
    // document.removeEventListener('mousedown', fixAudioContext);
    // document.removeEventListener('mouseup', fixAudioContext);
  };
  // iOS 6-8
  document.addEventListener('touchstart', fixAudioContext);
  // document.addEventListener('mousedown', fixAudioContext);
  // iOS 9
  document.addEventListener('touchend', fixAudioContext);
  // document.addEventListener('mouseup', fixAudioContext);
})();

function numberWithSpace(x) {
  x = x.toString();
  var pattern = /(-?\d+)(\d{3})/;
  while (pattern.test(x))
      x = x.replace(pattern, "$1 $2");
  return x;
}

//# sourceMappingURL=helper.js.map
