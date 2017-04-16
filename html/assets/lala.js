var toggleMenu = function (event) {
  var navigation = document.querySelector('#navigation');
  navigation.classList.toggle('hide-on-mobile');
}

var initMenuToggle = function () {
  var toggle = document.querySelector('.menu-toggle');
  toggle.addEventListener('click', toggleMenu);

  var menulinks = document.querySelectorAll('#navigation > .nav-links > a');
  menulinks.forEach(function (link) {
    link.addEventListener('click', toggleMenu);
  })
}

window.screen.width < 768 && initMenuToggle();
