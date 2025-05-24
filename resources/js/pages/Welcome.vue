<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] dark:bg-[#0a0a0a] lg:justify-center lg:p-8">
        <header class="not-has-[nav]:hidden mb-6 w-full max-w-[335px] text-sm lg:max-w-4xl">
            <nav class="flex items-center justify-end gap-4">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                >
                    Dashboard
                </Link>
                <template v-else>
                    <Link
                        :href="route('login')"
                        class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                    >
                        Log in
                    </Link>
                    <Link
                        :href="route('register')"
                        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                    >
                        Register
                    </Link>
                </template>
            </nav>
        </header>
        <div class="duration-750 starting:opacity-0 flex w-full items-center justify-center opacity-100 transition-opacity lg:grow">
            <main class="flex w-full max-w-[335px] flex-col-reverse overflow-hidden rounded-lg lg:max-w-4xl lg:flex-row">
<div class="flex-1 flex justify-center items-center">
  <div class="flex-1 flex flex-col justify-center items-start gap-4">
    <h1 class="text-2xl font-semibold text-[#1b1b18] dark:text-white">
      SmartBins
    </h1>
    <p class="text-[#3e3e3a] dark:text-[#ccc]">
      Optimiza la gestión de residuos con monitoreo en tiempo real.
    </p>
  </div>
  <div class="flex-1 flex justify-center items-center">
  <svg class="w-40 h-40 text-green-600 dark:text-green-400" fill="currentColor" viewBox="0 0 24 24">
    <path d="M9 3a3 3 0 0 1 6 0h5a1 1 0 1 1 0 2h-1l-1.2 14.4A3 3 0 0 1 14.8 22H9.2a3 3 0 0 1-2.999-2.6L5 5H4a1 1 0 1 1 0-2h5Zm2 5a1 1 0 0 0-2 0v8a1 1 0 1 0 2 0V8Zm4-1a1 1 0 1 0-2 0v8a1 1 0 0 0 2 0V7Z" />
  </svg>
  </div>
</div>
            </main>
        </div>
        <div class="h-14.5 hidden lg:block"></div>
    </div>
</template>
