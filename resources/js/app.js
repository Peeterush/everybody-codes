import * as L from 'leaflet';
import './bootstrap';
import iconUrl from '../css/video-camera-icon.png';

const { data: cameras } = await window.axios.get('/api/cameras');

// Create the map
const map = L.map('map').setView([52.0914, 5.1115], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution:
        '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);

// Add the markers
const markers = {};
cameras.forEach((camera) => {
    markers[camera.id] = L.marker([camera.latitude, camera.longitude], {
        icon: L.icon({
            iconUrl,
            iconSize: [32, 32],
        }),
    })
        .bindPopup(`<b>${camera.name}</b><br>${camera.code}`)
        .on('click', () => {
            Alpine.$data(document.body).selectedId = camera.id;
        })
        .addTo(map);
});

// Set up Alpine
const { Alpine } = window;
Alpine.data('data', () => ({
    selectedId: null,
    till600() {
        return cameras.filter((c) => c.number < 600);
    },
    from600to700() {
        return cameras.filter((c) => c.number >= 600 && c.number < 700);
    },
    from700to800() {
        return cameras.filter((c) => c.number >= 700 && c.number < 800);
    },
    above800() {
        return cameras.filter((c) => c.number > 800);
    },
    init() {
        Alpine.effect(() => markers[this.selectedId]?.openPopup());
    },
}));
Alpine.start();
