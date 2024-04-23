const name = prompt('Please enter your name:');
if (name) {
  alert(`Hello, ${name}!`);
} else {
  alert('You did not enter your name.');
}

const currentDate = new Date();
alert(`The current date and time is: ${currentDate}`);

navigator.geolocation.getCurrentPosition(function(position) {
    console.log('Latitude:', position.coords.latitude);
    console.log('Longitude:', position.coords.longitude);
});
