<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';
import ChatBot from '@/components/ChatBot.vue'; // Asegúrate de tener esta ruta bien

const breadcrumbs: BreadcrumbItem[] = [
  { title: 'Trash', href: '/trash' },
];

onMounted(() => {
  const ubicaciones = [
    { direccion: 'Calle 127 #7-89', coords: [4.7016, -74.0301] },
    { direccion: 'Carrera 13 #82-49', coords: [4.6584, -74.0571] },
    { direccion: 'Carrera 7 #26-20', coords: [4.6097, -74.0702] },
    { direccion: 'Calle 27 Sur #2-40', coords: [4.5614, -74.0865] },
    { direccion: 'Carrera 14 #137-20 Sur', coords: [4.4989, -74.1267] },
    { direccion: 'Calle 51 Sur #24-30', coords: [4.5792, -74.1283] },
    { direccion: 'Carrera 80 #57-20 Sur', coords: [4.6139, -74.1853] },
    { direccion: 'Avenida Primero de Mayo #40-20', coords: [4.6261, -74.1575] },
    { direccion: 'Calle 17 #99-20', coords: [4.6786, -74.1413] },
    { direccion: 'Calle 80 #77A-20', coords: [4.6985, -74.0923] },
    { direccion: 'Avenida Suba #130-20 ', coords: [4.7556, -74.0928] },
    { direccion: 'Calle 63 #23-20', coords: [4.6703, -74.0654] },
    { direccion: 'Carrera 24 #45-20', coords: [4.6423, -74.0789] },
    { direccion: 'Carrera 15 #10-20', coords: [4.6054, -74.0832] },
    { direccion: 'Calle 17 Sur #10-20', coords: [4.5896, -74.0945] }, 
    { direccion: 'Carrera 30 #10-20', coords: [4.6091, -74.0998] }, 
    { direccion: 'Carrera 6 #12-20', coords: [4.5955, -74.0759] }, 
    { direccion: 'Calle 45 Sur #10-20', coords: [4.5612, -74.0993] },
    { direccion: 'Avenida Boyacá #70-20 Sur', coords: [4.5443, -74.1498] },
    { direccion: 'Vereda San Juan', coords: [4.4825, -74.1256] },                      
  ];

  const map = L.map('map').setView([4.6097, -74.0817], 12);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  ubicaciones.forEach((lugar) => {
    L.marker(lugar.coords as [number, number]).addTo(map).bindPopup(lugar.direccion);
  });
});
</script>

<template>
  <Head title="Trash" />
  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="relative p-6">
      <div id="map" style="height: 790px;" class="rounded-md shadow"></div>
    </div>
  </AppLayout>
  <!-- ChatBot va fuera de AppLayout para estar fijo -->
  <ChatBot />
</template>

