<script setup lang="ts">
import { ref, onMounted } from "vue";
import { useToggleSidebar } from "@/Store/useToggleSideBar";

import {
    Moon,
    Sun,
    BellDot,
    Search,
    ListCollapse,
    ChevronLeftSquare,
} from "lucide-vue-next";

const sidebar = useToggleSidebar();

// dark mood
const appTheme = ref("light");
const toggleTheme = () => {
    if (appTheme.value === "light") {
        appTheme.value = "dark";
        document.documentElement.classList.add("dark");
        // set localStorage

        localStorage.setItem("theme", "dark");
    } else {
        appTheme.value = "light";
        document.documentElement.classList.remove("dark");
        // set localStorage
        localStorage.setItem("theme", "light");
    }
};

onMounted(() => {
    const theme = localStorage.getItem("theme");
    if (theme) {
        appTheme.value = theme;
        if (theme === "dark") {
            document.documentElement.classList.add("dark");
        }
    }
});
</script>

<template>
    <header>
        <div class="flex flex-col">
            <div
                class="flex items-center justify-between bg-gray-100 dark:bg-gray-800 rounded-b-md p-4 shadow-md"
            >
                <div class="flex gap-2 items-center">
                    <button
                        class="mr-2 text-gray-500 dark:text-green-200 focus:outline-none lg:hidden"
                        @click="sidebar.toggle"
                    >
                        <ChevronLeftSquare
                            v-if="sidebar.isOpen"
                            class="w-6 h-6 dark:text-green-500"
                        />
                        <ListCollapse
                            v-else
                            class="w-6 h-6 dark:text-green-500"
                        />
                    </button>
                    <img
                        class="w-10 h-10 rounded-full"
                        src="https://img.freepik.com/free-psd/3d-illustration-human-avatar-profile_23-2150671159.jpg"
                        alt="profile"
                    />
                    <p class="text-gray-700 font-semibold dark:text-white">
                        Hello, Admin!👋
                    </p>
                </div>

                <div class="flex gap-2 items-center">
                    <div
                        class="bg-purple-500/[.1] rounded-lg p-2 cursor-pointer"
                    >
                        <Search
                            class="text-blue-800 dark:text-green-500 w-2 h-2 sm:w-6 sm:h-6 font"
                        />
                    </div>
                    <div
                        class="bg-purple-500/[.1] rounded-lg p-2 cursor-pointer"
                    >
                        <BellDot
                            class="text-blue-800 dark:text-green-500 w-2 h-2 sm:w-6 sm:h-6 font"
                        />
                    </div>
                    <div class="bg-purple-500/[.1] rounded-lg cursor-pointer">
                        <button
                            @click="toggleTheme"
                            :class="
                                appTheme === 'dark'
                                    ? 'rotate-[360deg]'
                                    : 'rotate-0'
                            "
                            class="transition-all p-2 duration-500 ease-in transform dark:text-gray-400"
                        >
                            <Moon
                                v-if="appTheme === 'dark'"
                                class="text-blue-800 dark:text-green-500 w-2 h-2 sm:w-6 sm:h-6 font"
                            />
                            <Sun
                                v-else
                                class="text-blue-800 dark:text-green-500 w-2 h-2 sm:w-6 sm:h-6 font"
                            />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>
