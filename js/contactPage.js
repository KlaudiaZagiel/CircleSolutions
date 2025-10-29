// if the "how did you hear about us" select box is on the default option, it grays it out for visual consistency
//  with the other form elements
const sel = document.getElementById('howDidYouHear');
const theme = document.body.dataset.theme || 'dark';
const colors = theme === 'light'
  // colors for dark theme
  ? { placeholder: 'rgb(161, 161, 161)', value: 'rgb(81, 81, 81)' }
  // colors for light theme
  : { placeholder: 'rgb(143, 143, 143)', value: 'rgb(65, 65, 65)' };

const set = () => {
  const isPlaceholder =
    sel.selectedIndex === 0 || sel.value === '' || sel.value === 'placeholder';
  sel.style.color = isPlaceholder ? colors.placeholder : colors.value;
};
sel.addEventListener('change', set);
window.addEventListener('DOMContentLoaded', set);
