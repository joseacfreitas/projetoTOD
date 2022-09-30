const horasEl = document.getElementById("horas");
const minEl = document.getElementById("min");
const segEl = document.getElementById("seg");

updateClock();

function updateClock() {
  let horas = new Date().getHours();
  let min = new Date().getMinutes();
  let seg = new Date().getSeconds();

  if (horas < 10) horas = "0" + horas;
  if (min < 10) min = "0" + min;
  if (seg < 10) seg = "0" + seg;

  horasEl.innerText = horas;
  minEl.innerText = min;
  segEl.innerText = seg;

  setTimeout(() => {
    updateClock();
  });
}
