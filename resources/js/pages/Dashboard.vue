<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import ChatBot from '@/components/ChatBot.vue'; // importa el componente

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
<iframe title="DATOS FINALES 2" width="100%" height="800" 
src="https://app.powerbi.com/view?r=eyJrIjoiNjg2YWY1MDktY2FhMC00NmNkLTgzNWUtNTAyYjFlMzFlMzI5IiwidCI6IjA3ZGE2N2EwLTFmNDMtNGU4Yy05NzdmLTVmODhiNjQ3MGVlNiIsImMiOjR9" 
frameborder="0" 
allowFullScreen="true">
</iframe>
        </div>
        <ChatBot />
    </AppLayout>
</template>
