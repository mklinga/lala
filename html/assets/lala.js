function initMobileMenu () {
  var toggleMenu = function (event) {
    var navigation = document.querySelector('#navigation');
    navigation.classList.toggle('hide-on-mobile');
  }

  var toggle = document.querySelector('.menu-toggle');
  toggle.addEventListener('click', toggleMenu);
}

function setActivePage () {
  var pages = document.querySelectorAll('#navigation > .nav-links > a');
  var location = window.location.pathname;
  if (location.match(/^\/$|^\/v2\/?$/)) {
    return document.querySelector('a[href*="index"]').classList.add('active')
  }

  pages.forEach(function (page) {
    if (location === page.getAttribute('href')) {
      page.classList.add('active');
    }
  })
}

window.onload = function () {
  initMobileMenu();
  setActivePage();
}
