setTimeout(() => {
  document.getElementById("run").style.display = "none";
}, 2000);

const img = document.getElementById("welcome");
img.hidden = true;
setTimeout(() => {
  img.hidden = false;
}, 2500);

