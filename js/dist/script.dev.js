"use strict";

var navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function () {
  console.log(window.scrollY);

  if (window.scrollY > 1) {
    navbar.classList.replace('bg-transparent', 'nav-color');
  } else if (this.window.scrollY <= 0) {
    navbar.classList.replace('nav-color', 'bg-transparent');
  }
}); // Carousel

document.addEventListener('DOMContentLoaded', function () {
  var wrapper = document.querySelector('.carousel-wrapper');
  var leftBtn = document.querySelector('.button-arrow-left');
  var rightBtn = document.querySelector('.button-arrow-right');

  if (!wrapper || !leftBtn || !rightBtn) {
    console.error("Elemen carousel tidak ditemukan");
    return;
  }

  var card = document.querySelector('.card-fitur');

  if (!card) {
    console.error("Card tidak ditemukan");
    return;
  }

  var scrollAmount = card.offsetWidth + 16;
  leftBtn.addEventListener('click', function () {
    if (wrapper.scrollLeft <= 0) {
      // Kalau sudah di kiri paling ujung, lompat ke kanan terakhir
      wrapper.scrollTo({
        left: wrapper.scrollWidth,
        behavior: 'smooth'
      });
    } else {
      wrapper.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth'
      });
    }
  });
  rightBtn.addEventListener('click', function () {
    if (wrapper.scrollLeft + wrapper.clientWidth >= wrapper.scrollWidth - 10) {
      // Kalau sudah di kanan paling ujung, lompat ke awal
      wrapper.scrollTo({
        left: 0,
        behavior: 'smooth'
      });
    } else {
      wrapper.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
      });
    }
  });
}); // Pop Up rekomendasi

document.querySelectorAll('.card').forEach(function (card) {
  var popup = card.querySelector('.popup-info');
  card.addEventListener('click', function (e) {
    e.stopPropagation(); // Tutup semua popup lain

    document.querySelectorAll('.popup-info').forEach(function (p) {
      if (p !== popup) p.classList.remove('active');
    }); // Toggle class "active"

    popup.classList.toggle('active');
  });
}); // Tutup semua saat klik di luar

document.addEventListener('click', function () {
  document.querySelectorAll('.popup-info').forEach(function (p) {
    p.classList.remove('active');
  });
});
//# sourceMappingURL=script.dev.js.map
