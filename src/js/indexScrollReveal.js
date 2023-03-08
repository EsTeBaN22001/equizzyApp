window.sr = ScrollReveal();

const distance = '100px';
const duration = 800;
const delay = 500;

sr.reveal('.reveal-top', {
  duration: duration,
  origin: 'top',
  distance: `${distance}`,
  delay: delay
})

sr.reveal('.reveal-bottom', {
  duration: duration,
  origin: 'bottom',
  distance: `${distance}`,
  delay: delay
})

sr.reveal('.reveal-left', {
  duration: duration,
  origin: 'left',
  distance: `${distance}`,
  delay: delay
})

sr.reveal('.reveal-right', {
  duration: duration,
  origin: 'right',
  distance: `${distance}`,
  delay: delay
})