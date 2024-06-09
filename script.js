// Tap to to scroll button start
$(document).ready(function(){
    $(window).scroll(function(){
      if ($(this).scrollTop() > 100) {
        $('#goTopBtn').fadeIn();
      } else {
        $('#goTopBtn').fadeOut();
      }
    });
  
    $('#goTopBtn').click(function(){
      $('html, body').animate({scrollTop : 0},800);
      return false;
    });
  });
// Tap to to scroll button end

//loading spinner start
// Show loading spinner if the network is slow
const loadingSpinner = document.getElementById('loadingSpinner');

function showLoadingSpinner() {
    loadingSpinner.style.display = 'block';
}

function hideLoadingSpinner() {
    loadingSpinner.style.display = 'none';
}

// Check network speed and show spinner if slow
function checkNetworkSpeed() {
    const connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
    if (connection && connection.effectiveType === 'slow-2g') {
        showLoadingSpinner();
    }
}

// Check network speed on page load
checkNetworkSpeed();

//loading spinner ends