var static = "finwallapp-v2";
var cacheassets = [
    '{{ view("driver.login") }}',
    '{{ view("driver.home") }}',
    '{{ view("login") }}',
    '{{ asset("css/style.css") }}',
    '{{ asset("js/app.js") }}',
    '{{ asset("js/color-scheme.js") }}',
    '{{ asset("js/jquery-3.33.111.min.js") }}',
    '{{ asset("js/jquery.cookie.js") }}',
    '{{ asset("js/main.js") }}',
    '{{ asset("js/popper.min.js") }}',
    '{{ asset("js/pwa-services.js") }}',
];

self.addEventListener("install", function (event) {
    event.waitUntil(
        caches.open(static).then(function (cache) {
            cache.addAll(cacheassets);
        }).then(function () {
            return self.skipWaiting();
        })
    );
});
self.addEventListener("activate", function (event) {
});

self.addEventListener("fetch", function (event) {
    event.respondWith(
        caches.match(event.request).then(function (response) {
            return response || fetch(event.request)
        })
    );
});
