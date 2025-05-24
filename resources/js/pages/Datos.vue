<template>
  <Head title="Datos" />

  <AppLayout :breadcrumbs="breadcrumbs">
    <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
      aca poner todo el codigo
    </div>
  </AppLayout>
</template>

<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import ChatBot from '@/components/ChatBot.vue'; // importa el componente

const breadcrumbs: BreadcrumbItem[] = [
  { title: 'Datos', href: '/datos' },
];
</script>
