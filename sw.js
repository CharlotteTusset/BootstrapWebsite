
var CACHE_NAME = 'my-site-cache-v1';
var urlsToCache = [
  'https://charlottetusset.github.io/BootstrapWebsite/Location.html',
  'https://charlottetusset.github.io/BootstrapWebsite/index.html',
  'https://charlottetusset.github.io/BootstrapWebsite/Menu.html',
  'https://charlottetusset.github.io/BootstrapWebsite/Gallery.html',
  'https://charlottetusset.github.io/BootstrapWebsite/page2.html',
  'https://charlottetusset.github.io/BootstrapWebsite/page3.html',
  'https://charlottetusset.github.io/BootstrapWebsite/contact.html'
];

self.addEventListener('install', function(event) {
  // Perform install steps
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});