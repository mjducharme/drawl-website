var h1 = document.getElementById('rectime'),
  start = document.getElementById('record'),
  stop = document.getElementById('stop'),
  clear = document.getElementById('clear'),
  cmpt = 0,
  seconds = 0,
  minutes = 0,
  hours = 0,
  t;

function add() {
  seconds++;
  if (seconds >= 60) {
    seconds = 0;
    minutes++;
    if (minutes >= 60) {
      minutes = 0;
      hours++;
    }
  }

  h1.textContent = (hours ? (hours > 9 ? hours : "0" + hours) : "00") + ":" + (minutes ? (minutes > 9 ? minutes : "0" + minutes) : "00") + ":" + (seconds > 9 ? seconds : "0" + seconds);

  timer();
}

function timer() {
  t = setTimeout(add, 1000);
}
timer();

window.onload=function()
{
    clearTimeout(t);
}
/* Start button */
start.onclick = function() {
  if (cmpt % 2 == 0) {
    timer();
  } 
  else {
    clearTimeout(t);
      h1.textContent = "00:00:00";
      seconds = 0;
      minutes = 0;
      hours = 0;
  }
  cmpt++;

}