const CACHE_NAME = "eftelinfo-cache-v1";
const OFFLINE_URL = "/offline";

self.addEventListener("install", event => {
    event.waitUntil(
        caches.open(CACHE_NAME).then(cache => cache.add(OFFLINE_URL))
    );
});

self.addEventListener("fetch", event => {
    if (!navigator.onLine) {
        event.respondWith(
            caches.match(event.request).then(response => {
                return response || caches.match(OFFLINE_URL);
            })
        );
    }
});
