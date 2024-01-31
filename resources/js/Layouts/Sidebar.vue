<script setup lang="ts">
import { useToggleSidebar } from "@/Store/useToggleSideBar";
import { Link } from "@inertiajs/vue3";
import {
    LayoutDashboard,
    Computer,
    UserCog,
    BookOpenCheck,
    Settings,
    LogOut,
} from "lucide-vue-next";

const sidebar = useToggleSidebar();
</script>
<template>
    <!-- sidebar -->
    <div class="flex print:hidden">
        <!-- Backdrop -->
        <div
            :class="sidebar.isOpen ? 'block' : 'hidden'"
            @click="sidebar.isOpen = false"
            class="fixed inset-0 z-40 transition-opacity bg-black opacity-50 lg:hidden"
        ></div>
        <!-- End Backdrop -->
        <div
            :class="
                sidebar.isOpen
                    ? 'translate-x-0 ease-out'
                    : '-translate-x-full ease-in'
            "
            class="fixed inset-y-0 left-0 z-50 w-60 overflow-y-hidden transition transform dark:bg-gray-800 bg-gray-300 lg:translate-x-0 lg:static lg:inset-0"
        >
            <div class="py-8 px-8 h-full">
                <div class="flex justify-center items-center">
                    <img
                        class="w-12 h-12 rounded-full"
                        src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Android_O_Preview_Logo.png"
                        alt=""
                    />
                    <div class="p-1">
                        <p class="text-gray-700 dark:text-white font-semibold">
                            CAM Circle
                        </p>
                        <p class="text-gray-500 dark:text-gray-400 text-sm">
                            The best app ever
                        </p>
                    </div>
                </div>

                <div
                    class="pt-8 px-4 flex flex-col h-full justify-between relative"
                >
                    <ul class="flex flex-col gap-4">
                        <li
                            class="flex items-center space-x-2 text-gray-700 cursor-pointer font-light"
                        >
                            <LayoutDashboard
                                class="text-gray-500 w-5 dark:text-green-300"
                            />
                            <span class="dark:text-green-200 text-sm"
                                >Dashboard</span
                            >
                        </li>
                        <li
                            class="flex items-center space-x-2 text-gray-700 cursor-pointer font-light"
                        >
                            <Computer
                                class="text-gray-500 w-5 dark:text-green-300"
                            />
                            <span class="dark:text-green-200 text-sm"
                                >Room</span
                            >
                        </li>
                        <li
                            class="flex items-center space-x-2 text-gray-700 cursor-pointer font-light"
                        >
                            <UserCog
                                class="text-gray-500 w-5 dark:text-green-300"
                            />
                            <span class="dark:text-green-200 text-sm"
                                >Employee</span
                            >
                        </li>
                        <li
                            class="flex items-center space-x-2 text-gray-700 cursor-pointer font-light"
                        >
                            <BookOpenCheck
                                class="text-gray-500 w-5 dark:text-green-300"
                            />
                            <span class="dark:text-green-200 text-sm"
                                >Report</span
                            >
                        </li>
                        <li
                            class="flex items-center space-x-2 text-gray-700 cursor-pointer font-light"
                        >
                            <Settings
                                class="text-gray-500 w-5 dark:text-green-300"
                            />
                            <span class="dark:text-green-200 text-sm"
                                >Setting</span
                            >
                        </li>
                    </ul>
                    <ul class="absolute flex flex-col gap-4 mb-8 bottom-8">
                        <Link :href="route('logout')" method="post" as="button">
                            <li
                                class="flex items-center space-x-2 text-gray-700 cursor-pointer font-light"
                            >
                                <LogOut
                                    class="text-gray-500 w-5 dark:text-green-300"
                                /><span class="dark:text-green-200 text-sm"
                                    >Logout</span
                                >
                            </li>
                        </Link>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
