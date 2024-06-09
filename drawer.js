$(document).ready(function() {
    // Function to close the drawer
    function closeDrawer() {
        $('#drawer').removeClass('open');
        $('.overlay_drawer').removeClass('open');
        $(document).off('popstate', closeDrawer); // Remove the event listener
    }

    // Open the drawer when the menu icon is clicked
    $('#nav-menu-icon').click(function() {
        $('#drawer').addClass('open');
        $('.overlay_drawer').addClass('open');
        history.pushState({ drawerOpen: true }, ''); // Push a state to the history
        $(document).on('popstate', closeDrawer); // Listen for the popstate event
    });

    // Close the drawer when a link inside the drawer is clicked
    $('.drawer__link').click(function() {
        closeDrawer();
    });

    // Close the drawer when the arrow icon is clicked
    $('#drawer_arrow').click(function() {
        closeDrawer();
    });

    // Close the drawer when clicking outside of it
    $(document).click(function(event) {
        if (!$(event.target).closest('#nav-menu-icon, #drawer').length) {
            closeDrawer();
        }
    });

    // Close the drawer when the back button is pressed
    window.addEventListener('popstate', function(event) {
        if ($('#drawer').hasClass('open')) {
            closeDrawer();
        }
    });
});
