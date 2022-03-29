/*
 Copyright 2020 Google Inc. All Rights Reserved.
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 http://www.apache.org/licenses/LICENSE-2.0
 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
 */

// Names of the two caches used in this version of the service worker.
// Change to v2, etc. when you update any of the local resources, which will
// in turn trigger the install event again.
const PRECACHE = 'v1';
const RUNTIME = 'runtime';

// A list of local resources we always want to be cached.
const PRECACHE_URLS = [
  // '/',
  // './', // Alias for index.html

  // Images
  '/assets/images/favicon.ico',
  '/assets/images/logo-light.png',
  '/assets/images/logo-dark.png',

  // CSS
  '/assets/css/bootstrap.min.css',
  '/assets/css/icons.min.css',
  '/assets/css/app.min.css',
  '/assets/libs/air-datepicker/css/datepicker.min.css',
  '/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
  '/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css',
  '/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css',
  '/assets/libs/pickerjs/dist/picker.min.css',
  '/assets/libs/select2/select2.min.css',
  '/assets/libs/sweetalert2/sweetalert2.min.css',

  // JS
  '/assets/libs/jquery/jquery.min.js',
  '/assets/libs/bootstrap/js/bootstrap.bundle.min.js',
  '/assets/libs/metismenu/metisMenu.min.js',
  '/assets/libs/simplebar/simplebar.min.js',
  '/assets/libs/node-waves/waves.min.js',
  '/assets/js/monochrome-bundle.js',
  '/assets/js/app.js',
  '/assets/libs/air-datepicker/js/datepicker.min.js',
  '/assets/libs/pickerjs/dist/picker.min.js',
  '/assets/libs/autocomplete-ajax/jquery.autocomplete.min.js',
  '/assets/libs/jquery-knob/jquery.knob.min.js',
  '/assets/libs/datatables.net/js/jquery.dataTables.min.js',
  '/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
  '/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js',
  '/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js',
  '/assets/libs/select2/select2.min.js',
  '/assets/libs/sweetalert2/sweetalert2.min.js',
  '/assets/libs/push-notification/push.min.js',
  
  '/assets/unicons.iconscout.com/release/v2.0.1/svg/monochrome/airplay.svg',
  '/assets/unicons.iconscout.com/release/v2.0.1/svg/monochrome/window-grid.svg',
  '/assets/unicons.iconscout.com/release/v2.0.1/svg/monochrome/schedule.svg',
  '/assets/unicons.iconscout.com/release/v2.0.1/svg/monochrome/lock.svg',
  '/assets/unicons.iconscout.com/release/v2.0.1/svg/monochrome/exit.svg',

  '/assets/fonts/dripicons-v2.eot',
  '/assets/fonts/dripicons-v2.svg',
  '/assets/fonts/dripicons-v2.ttf',
  '/assets/fonts/dripicons-v2.woff',
  '/assets/fonts/fa-brands-400.eot',
  '/assets/fonts/fa-brands-400.svg',
  '/assets/fonts/fa-brands-400.ttf',
  '/assets/fonts/fa-brands-400.woff',
  '/assets/fonts/fa-brands-400.woff2',
  '/assets/fonts/fa-reguler-400.eot',
  '/assets/fonts/fa-reguler-400.svg',
  '/assets/fonts/fa-reguler-400.ttf',
  '/assets/fonts/fa-reguler-400.woff',
  '/assets/fonts/fa-reguler-400.woff2',
  '/assets/fonts/fa-solid-900.eot',
  '/assets/fonts/fa-solid-900.svg',
  '/assets/fonts/fa-solid-900.ttf',
  '/assets/fonts/fa-solid-900.woff',
  '/assets/fonts/fa-solid-900.woff2',

  '/assets/fonts/materialdesignicons-webfont.eot',
  '/assets/fonts/materialdesignicons-webfont.ttf',
  '/assets/fontsmaterialdesignicons-webfont.woff',
  '/assets/fontsmaterialdesignicons-webfont.woff2',

  '/assets/fonts/themify.eot',
  '/assets/fonts/themify.svg',
  '/assets/fonts/themify.ttf',
  '/assets/fonts/themify.woff',
  '/assets/fonts/themify.woff2',

  ];

// The install handler takes care of precaching the resources we always need.
self.addEventListener('install', event => {
	event.waitUntil(
		caches.open(PRECACHE)
		.then(cache => cache.addAll(PRECACHE_URLS))
		.then(self.skipWaiting())
		);
});

// The activate handler takes care of cleaning up old caches.
self.addEventListener('activate', event => {
	const currentCaches = [PRECACHE, RUNTIME];
	event.waitUntil(
		caches.keys().then(cacheNames => {
			return cacheNames.filter(cacheName => !currentCaches.includes(cacheName));
		}).then(cachesToDelete => {
			return Promise.all(cachesToDelete.map(cacheToDelete => {
				return caches.delete(cacheToDelete);
			}));
		}).then(() => self.clients.claim())
		);
});

// The fetch handler serves responses for same-origin resources from a cache.
// If no response is found, it populates the runtime cache with the response
// from the network before returning it to the page.
self.addEventListener('fetch', event => {
  // Skip cross-origin requests, like those for Google Analytics.
  if (event.request.url.startsWith(self.location.origin)) {

  	if (event.request.url !== '/login') {
  		event.respondWith(fetch(event.request));
  	} else {
  		event.respondWith(
  			caches.match(event.request).then(cachedResponse => {
  				if (cachedResponse) {
  					return cachedResponse;
  				}
  				return caches.open(RUNTIME).then(cache => {
  					return fetch(event.request).then(response => {
  						return cache.put(event.request, response.clone()).then(() => {
  							return response;
  						});
  					});
  				});
  			})
  		/*
  		*/
  		);
  	}
  }
});