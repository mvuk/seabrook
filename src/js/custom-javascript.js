function openMenu() {
  console.log('openMenu');
  document.getElementById('overlay-menu').classList.remove('displayNone');
}

function closeMenu() {
  console.log('closeMenu');
  document.getElementById('overlay-menu').classList.add('displayNone');
}
