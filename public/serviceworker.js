
console.log('testssdsasd');

let staticCacheName = "pwa-v" + new Date().getTime();
let filesToCache = [
    '/css/app.css',
    '/js/app.js',
    // add your favicons and maskable icons
    // and add any other resource you want to be cached
    '/',
    '/1',
    '/2',
    '/3',
    '/4',
    '/5',
    '/6',
    '/7',
    '/8',
    '/9',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});
