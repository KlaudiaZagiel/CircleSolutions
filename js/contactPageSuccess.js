const radialProgress = document.querySelector(".radialProgress");
const animationDuration = 5000;

const setProgress = (progress) => {
  const percentage = Math.round(progress);
  radialProgress.style.setProperty("--progress", `${percentage}%`);
};

// Conical gradient (draws circle loading animation) is based off the --progress flag in .radialProgress

setProgress(0);

let start = null;
let stop = false;

function animate(ts) {
  if (stop) return;
  if (!start) start = ts;
  const elapsed = ts - start;
  const progress = Math.min(100, (elapsed / animationDuration) * 100);
  setProgress(progress);
  if (elapsed < animationDuration) {
    requestAnimationFrame(animate);
  } 
  else {
    setProgress(100)
  }
}

requestAnimationFrame(animate);
