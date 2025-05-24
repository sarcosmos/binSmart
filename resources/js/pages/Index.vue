<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';
import ChatBot from '@/components/ChatBot.vue'; // importa el componente

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Información',
        href: '/index',
    },
];
</script>

<template>
    <Head title="Información" />

    <AppLayout :breadcrumbs="breadcrumbs">
      <div class="relative flex-1 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border md:min-h-min max-h-[600px] overflow-y-auto p-6 space-y-6">

    <!-- Planteamiento del problema -->
    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-5 shadow-md">
        <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Planteamiento del Problema</h2>
        <p class="text-gray-700 dark:text-gray-300">
            La gestión de residuos presenta dificultades significativas en la eficiencia, los costos operativos y el aprovechamiento de recursos.
            Las rutas de recolección a menudo se planifican sin conocimiento preciso del nivel de llenado de los contenedores, lo que resulta en viajes innecesarios de los vehículos recolectores,
            consumo excesivo de combustible y emisiones contaminantes. Además, la falta de información sobre el contenido de los residuos de cada contenedor
            dificulta la implementación de estrategias de reciclaje efectivas y la identificación de oportunidades para la economía circular.
        </p>
    </div>

    <!-- Justificación -->
    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-5 shadow-md">
        <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Justificación</h2>
        <p class="text-gray-700 dark:text-gray-300">
           Al implementar un sistema de análisis para la canecas, se optimizaría la gestión de los residuos permitiendo una mejor recolección, 
           optimizando tiempo y recursos. También se podrían implementar estrategias de reciclaje para así mejorar la calidad de vida de las 
           personas y contribuir económicamente.
        </p>
    </div>

    <!-- Objetivo general -->
    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-5 shadow-md">
        <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Objetivo General</h2>
        <p class="text-gray-700 dark:text-gray-300">
            Desarrollar un sistema de análisis que ayude a optimizar la gestión de los residuos, mejorar la eficiencia de la recolección y 
            obtener información valiosa para reciclar.
        </p>
    </div>

    <!-- Objetivos específicos -->
    <div class="bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-xl p-5 shadow-md">
        <h2 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Objetivos Específicos</h2>
        <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 space-y-1">
            <li>Diseñar e implementar canecas inteligentes equipadas con sensores para monitorear el nivel de llenado y, potencialmente, la composición de los residuos.</li>
            <li>Generar información en tiempo real sobre el estado de llenado de las canecas para optimizar las rutas de recolección.</li>
            <li>Analizar los datos históricos de residuos para identificar patrones, tendencias y oportunidades de mejora en la gestión y el reciclaje.</li>
        </ul>
    </div>
<ChatBot />
</div>

    </AppLayout>
</template>
