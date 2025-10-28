// if the "how did you hear about us" select box is on the default option, it grays it out for visual consistency
//  with the other form elements
const sel = document.getElementById('howDidYouHear');
const set = () => {
  const isPlaceholder =
    sel.selectedIndex === 0 || sel.value === '' || sel.value === 'placeholder';
  sel.style.color = isPlaceholder ? 'rgb(161, 161, 161)' : 'rgb(81, 81, 81)';
};
sel.addEventListener('change', set);
window.addEventListener('DOMContentLoaded', set);
