document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header-off');
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', () => {
        if (window.scrollY > lastScrollY) {
            header.classList.add('hidden');
        } else {
            header.classList.remove('hidden');
        }
        lastScrollY = window.scrollY;
    });
});

$(document).ready(function() {
    $('.dropdown-btn > a').click(function(e) {
      e.preventDefault();
      $('#dropdownMenu').stop().slideToggle(500);
    });
  
    $(document).click(function(event) {
      if (!$(event.target).closest('.dropdown-btn').length) {
        $('#dropdownMenu').slideUp(500);
      }
    });
  });
  