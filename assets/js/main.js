
/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 80 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 80) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)





// NAVBAR ACTIVATION
$(document).ready(function(){
    var currentPage = window.location.pathname.split('/').pop(); // Get the current page filename
    $('.nav__link').removeClass('active-link'); // Remove 'active-link' class from all navigation links
    $('.nav__link').each(function(){
        var href = $(this).attr('href');
        if (href === currentPage) {
            $(this).addClass('active-link'); // Add 'active-link' class to the current page's navigation link
        }
        else{
          $(this).removeClass('active-link');
        }
    });
  });