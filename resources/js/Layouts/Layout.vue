<script setup lang="ts">
import Sidebar from "@/Layouts/Sidebar.vue";
import Header from "@/Layouts/Header.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head>
        <title>Dasboard</title>
    </Head>
    <div class="flex h-screen bg-gray-200 dark:bg-gray-900">
        <Sidebar />
        <div class="flex flex-col flex-1 overflow-hidden">
            <Header />

            <main
                id="full-screen-main"
                class="flex-1 overflow-x-hidden overflow-y-auto px-4 bg-gray-200 dark:bg-gray-900 scroll-smooth rounded dark:text-white mt-1"
                scroll-region
            >
                <div>
                    <slot />
                </div>
            </main>
        </div>
    </div>
</template>
