import './bootstrap';

let coordonees = document.getElementById('coord');
let temp = document.getElementById('temp');
let temps = document.getElementById('temps');
let hamburger = document.getElementById('hamburger');
let responsive_menu = document.getElementById('responsive_menu');

var map = L.map('map').setView([46.416672, -1.58333], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);
L.marker([46.4167, -1.5833]).addTo(map);

axios.get("http://api.openweathermap.org/geo/1.0/direct?q=Jard%20sur%20mer,france&limit=1&appid=58d9f08d3b6d1a1b242be66d565a3ef6&lang=fr&units=metric").then(response => {
    coordonees.innerHTML = response.data[0].lat + " ; " + response.data[0].lon;

    axios.get("https://api.openweathermap.org/data/2.5/weather?lat=" + response.data[0].lat + "&lon=" + response.data[0].lon + "&appid=58d9f08d3b6d1a1b242be66d565a3ef6&lang=fr&units=metric").then(response => {
        temp.innerHTML = Math.floor(response.data.main.temp) + "°C";
        temps.innerHTML = response.data.weather[0].description;
        console.log(response.data);
    })
}).catch(error => console.error(error))