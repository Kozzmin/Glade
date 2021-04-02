//navbar.php
const toggleNavBtn = document.querySelector('.sidebarNav-toggle');
const sidebarNav = document.querySelector('.sidebarNav');
const closeNavBtn = document.querySelector('.closeNav-btn');

toggleNavBtn.addEventListener('click', function () {
  sidebarNav.classList.toggle('show-sidebarNav');
});

closeNavBtn.addEventListener('click', function () {
  sidebarNav.classList.remove('show-sidebarNav');
});
