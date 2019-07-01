
// // console.log('working');
// //to diaplay the google map
// const mapArea = document.getElementById('map');
// //click on motion
// const actionBtn = document.getElementById('showMe');
// //This will display all the available addresses returned by Google's Geocode Api
// const locationsAvailable = document.getElementById('locationList');

// //Let's bring in our API_KEY
// const __KEY = 'YOUR_API_KEY';


// let Gmap;
// let Gmarker;

// actionBtn.addEventListener("click", e => {
// 	console.log('clicked');
// 	actionBtn.style.display = "block";
// 	// console.log('clicked');
// 	M.toast({html: 'Fetching your current location', classes: 'rounded'});
// 	getLocation();
// });


// getLocation = () => {
// 	if (navigator.geolocation) {
// 		navigator.geolocation.getCurrentPosition(displayLocation, showError, options);
// 	} else {
// 		M.toast({html: "Sorry, your browser does not support this feature... Please Update your Browser to enjoy it", classes: "rounded"});
// 	}
// }



// showError = (e) => {

// 	mapArea.style.display = "block";

// 	switch(e.code) {
// 		case e.PERMISSION_DENIED:
// 		mapArea.innerHTML = "You denied the request for your location."
// 		break;

// 		case e.POSITION_UNAVAILABLE:
// 		mapArea.innerHTML = "Your Location information is unavailable."
// 		break;

// 		case e.TIMEOUT:
// 		mapArea.innerHTML = "Your request timed out. Please try again"
// 		break;

// 		case e.UNKNOWN_ERROR:
// 		mapArea.innerHTML = "An unknown error occurred please try again after some time."
// 		break;
// 	}
// }

// const options = {
// 	enableHighAccuracy: true
// }

// displayLocation = (position) => {
// 	const lat = position.coords.latitude;
// 	const lng = position.coords.longitude;
// }

// console.log(`${lat} and ${lng}`);























