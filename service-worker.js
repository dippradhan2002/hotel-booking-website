// service-worker.js

const CACHE_NAME = 'offline-content-v1';
const urlsToCache = [
  '/',
  '/explore.php',
  '/footer.php',
  '/header.php',
  '/index.php',
  '/profile.php',
  '/service.php',
  '/assets\css\styles.css',
  '/manifest.json',
  '/page_redirection.js',
  '/script.js',
  '/app_logo_android_studio_new.png',
  '/images/logo.png'
];

self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then((cache) => {
        return cache.addAll(urlsToCache);
      })
  );
});

self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request)
      .then((response) => {
        return response || fetch(event.request);
      })
      .catch(() => {
        return caches.match('/index.php');
      })
  );
});
//offline mode comfiguration ends

let deferredPrompt;

    window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        document.getElementById('installButton').style.display = 'block';
    });

    document.getElementById('installButton').addEventListener('click', () => {
        deferredPrompt.prompt();
        deferredPrompt.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
            } else {
                console.log('User dismissed the A2HS prompt');
            }
            deferredPrompt = null;
        });
    });

    // Service Worker cathe control

    self.addEventListener('fetch', function(event) {
      event.respondWith(
        caches.open('your-cache-name').then(function(cache) {
          return cache.match(event.request).then(function(response) {
            var fetchPromise = fetch(event.request).then(function(networkResponse) {
              cache.put(event.request, networkResponse.clone());
              return networkResponse;
            })
            return response || fetchPromise;
          })
        })
      );
    });
    