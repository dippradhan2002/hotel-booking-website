// Cache object to store loaded pages
var pageCache = {};

// Part 1: jQuery Code (Change the URL of the website)
$(function() {
    function loadPage(url) {
        if (pageCache[url]) {
            $('#content').html(pageCache[url]);
        } else {
            $.ajax({
                url: url + '?rel=tab',
                success: function(data) {
                    $('#content').html(data);
                    pageCache[url] = data; // Cache the loaded page
                },
                error: function(xhr, status, error) {
                    if (xhr.status == 404) {
                        // Display 404.php if page is not found
                        loadPage('404.php');
                    }
                }
            });
        }
    }

    $("a[rel='tab']").click(function(e) {
        var pageurl = $(this).attr('href');
        loadPage(pageurl);
        if (pageurl != window.location) {
            window.history.pushState({ path: pageurl }, '', pageurl);
        }
        return false;
    });

    $(window).bind('popstate', function() {
        loadPage(location.pathname);
    });
});

// Part 2: AJAX Code (Fetch data of other pages)
function loadPage(url) {
    if (pageCache[url]) {
        $('#content').html(pageCache[url]);
    } else {
        $.ajax({
            url: url + '?rel=tab',
            success: function(data) {
                $('#content').html(data);
                pageCache[url] = data; // Cache the loaded page
            },
            error: function(xhr, status, error) {
                if (xhr.status == 404) {
                    // Display 404.php if page is not found
                    loadPage('404.php');
                }
            }
        });
    }
}

// Lazy Loading for images
$(window).on('load', function() {
    $('img[data-src]').each(function() {
        $(this).attr('src', $(this).attr('data-src'));
    });
});

// Preloading for anticipated pages or resources
$('a[rel="prefetch"]').each(function() {
    var url = $(this).attr('href');
    var prefetchLink = document.createElement('link');
    prefetchLink.rel = 'prefetch';
    prefetchLink.href = url;
    document.head.appendChild(prefetchLink);
});
