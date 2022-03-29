// if ('serviceWorker' in navigator) {
//   navigator.serviceWorker.register('/service-worker.js');
// }

"use strict";

const notificationButton = document.getElementById("enableNotifications");
let swRegistration = null;

initializeApp();

function initializeApp() {
	if ("serviceWorker" in navigator && "PushManager" in window) {
		// console.log("Service Worker and Push is supported");

    //Register the service worker
    navigator.serviceWorker
    .register("/service-worker.js")
    .then(swReg => {
    	// console.log("Service Worker is registered", swReg);

    	swRegistration = swReg;
    	initializeUi();
    })
    .catch(error => {
    	console.error("Service Worker Error", error);
    });

  } else {
  	console.warn("Push messaging is not supported");
  	notificationButton.textContent = "Push Not Supported";
  }
}

function initializeUi() {
	notificationButton.addEventListener("click", () => {
		displayNotification();
	});
}

function displayNotification() {
	if (window.Notification && Notification.permission === "granted") {
		notification();
	}
  // If the user hasn't told if he wants to be notified or not
  // Note: because of Chrome, we are not sure the permission property
  // is set, therefore it's unsafe to check for the "default" value.
  else if (window.Notification && Notification.permission !== "denied") {
  	Notification.requestPermission(status => {
  		if (status === "granted") {
  			notification();
  		} else {
  			alert("You denied or dismissed permissions to notifications.");
  		}
  	});
  } else {
    // If the user refuses to get notified
    alert("You denied permissions to notifications. Please go to your browser or phone setting to allow notifications.");
  }
}

function notification() {
	Push.create('Info!', {
		body: "Push Notification Berhasil Dihidupkan",
		vibrate: [200, 100, 200, 100, 200, 100, 200],
		icon: "/assets/images/favicon.ico",
		link: '/#',
		timeout: 4000,
		onClick: function () {
			window.focus();
			this.close();
		},
		vibrate: [200, 100, 200, 100, 200, 100, 200]
	});
}
