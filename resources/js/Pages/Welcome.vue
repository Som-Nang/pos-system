<script setup>
import Layout from "@/Layouts/Layout.vue";
import ChartSale from "@/Components/ChartSale.vue";
import {
    Moon,
    Sun,
    BellDot,
    Search,
    ChevronLeft,
    ChevronRight,
    Bookmark,
    FileCheck2,
} from "lucide-vue-next";
</script>

<template>
    <!-- Content -->
    <Layout>
        <div
            class="bg-gray-100 dark:bg-gray-800 p-4 h-max rounded-lg mt-2 flex flex-col md:flex-row gap-4"
        >
            <ChartSale class="" />
        </div>
        <div
            class="flex flex-col md:flex-row items-start justify-between gap-4 mt-2"
        >
            <div
                class="flex flex-col gap-2 w-full dark:bg-gray-800 bg-gray-100 rounded-lg p-4 shadow-md"
            >
                <div class="flex justify-between items-center w-full">
                    <p
                        class="text-lg text-gray-700 dark:text-white font-semibold"
                    >
                        March 24
                    </p>
                    <div class="flex gap-2">
                        <ChevronLeft
                            class="cursor-pointer text-gray-500 dark:text-green-500"
                        />
                        <ChevronRight
                            class="cursor-pointer text-gray-500 dark:text-green-500"
                        />
                    </div>
                </div>
                <div class="flex items-center justify-center w-full px-4 gap-4">
                    <div
                        class="flex flex-col gap-1 shadow-md bg-gray-100 dark:bg-green-200 rounded-2xl p-2 items-center justify-center opacity-50"
                    >
                        <p class="text-gray-700 font-light text-sm">MAR</p>
                        <p class="text-gray-700 font-semibold text-3xl">25</p>
                    </div>
                    <div
                        class="relative flex flex-col gap-1 shadow-md bg-gray-100 dark:bg-green-200 rounded-2xl p-2 items-center justify-center"
                    >
                        <p class="text-gray-700 font-light text-sm">MAR</p>
                        <p class="text-gray-700 font-semibold text-3xl">26</p>
                        <div
                            class="absolute bottom-0 border-2 border-red-500 w-1/5 rounded-full"
                        ></div>
                    </div>
                    <div
                        class="flex flex-col gap-1 shadow-md bg-gray-100 dark:bg-green-200 rounded-2xl p-2 items-center justify-center opacity-50"
                    >
                        <p class="text-gray-700 font-light text-sm">MAR</p>
                        <p class="text-gray-700 font-semibold text-3xl">27</p>
                    </div>
                    <div
                        class="flex flex-col gap-1 shadow-md bg-gray-100 dark:bg-green-200 rounded-2xl p-2 items-center justify-center opacity-50"
                    >
                        <p class="text-gray-700 font-light text-sm">MAR</p>
                        <p class="text-gray-700 font-semibold text-3xl">28</p>
                    </div>
                    <div
                        class="flex flex-col gap-1 shadow-md bg-gray-100 dark:bg-green-200 rounded-2xl p-2 items-center justify-center opacity-50"
                    >
                        <p class="text-gray-700 font-light text-sm">MAR</p>
                        <p class="text-gray-700 font-semibold text-3xl">29</p>
                    </div>
                    <div
                        class="flex flex-col gap-1 shadow-md bg-gray-100 dark:bg-green-200 rounded-2xl p-2 items-center justify-center opacity-50"
                    >
                        <p class="text-gray-700 font-light text-sm">MAR</p>
                        <p class="text-gray-700 font-semibold text-3xl">30</p>
                    </div>
                    <div
                        class="flex flex-col gap-1 shadow-md bg-gray-100 dark:bg-green-200 rounded-2xl p-2 items-center justify-center opacity-50"
                    >
                        <p class="text-gray-700 font-light text-sm">MAR</p>
                        <p class="text-gray-700 font-semibold text-3xl">31</p>
                    </div>
                </div>
                <div class="flex flex-col gap-2 w-full mt-4">
                    <p
                        class="text-sm text-gray-700 dark:text-white font-semibold"
                    >
                        Notice Board
                    </p>
                    <div class="flex flex-col gap-2 w-full px-4">
                        <div class="flex gap-2 items-center">
                            <div
                                class="bg-green-500/[.5] dark:bg-green-500 rounded-lg p-2"
                            >
                                <FileCheck2
                                    class="text-blue-800 dark:text-white w-6 h-6"
                                />
                            </div>

                            <p
                                class="text-gray-700 dark:text-white font-light text-am"
                            >
                                Mid term check exam
                            </p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div
                                class="bg-red-500/[.5] dark:bg-red-500 rounded-lg p-2"
                            >
                                <FileCheck2
                                    class="text-blue-800 dark:text-white w-6 h-6"
                                />
                            </div>

                            <p
                                class="text-gray-700 dark:text-white font-light text-am"
                            >
                                Mid term check exam
                            </p>
                        </div>
                        <div class="flex gap-2 items-center">
                            <div
                                class="bg-yellow-500/[.5] dark:bg-yellow-500 rounded-lg p-2"
                            >
                                <FileCheck2
                                    class="text-blue-800 dark:text-white w-6 h-6"
                                />
                            </div>

                            <p
                                class="text-gray-700 dark:text-white font-light text-am"
                            >
                                Mid term check exam
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col gap-2 w-full dark:bg-gray-800 bg-gray-100 rounded-lg p-4 shadow-md"
            >
                <div class="flex justify-between items-center w-full">
                    <p
                        class="text-lg dark:text-white text-gray-700 font-semibold"
                    >
                        Employee
                    </p>
                    <div class="flex gap-2 items-center">
                        <p
                            class="text-gray-600 dark:text-white opacity-90 font-light text-sm"
                        >
                            Total: 40
                        </p>
                    </div>
                </div>
                <div
                    class="flex gap-2 w-full flex-wrap items-center justify-center"
                >
                    <div
                        class="flex relative flex-col gap-2 justify-center items-center dark:bg-gray-900 rounded-lg bg-gray-100 border dark:border-gray-900 shadow-md p-6"
                    >
                        <div class="">
                            <img
                                class="object-cover w-24 h-24 rounded-full"
                                src="https://www.unicef.org/cambodia/sites/unicef.org.cambodia/files/styles/hero_tablet/public/ED_UNICEF_BK_Dec%2005%2C%202017_0086.jpg.webp?itok=TuYJhpRA"
                                alt=""
                            />
                        </div>
                        <div
                            class="flex flex-col dark:text-green-500 justify-center items-center"
                        >
                            <p
                                class="text-sm text-gray-800 dark:text-green-500 opacity-90 font-light"
                            >
                                Din Somnang
                            </p>
                            <p
                                class="text-sm text-gray-800 dark:text-green-500 opacity-90 font-light"
                            >
                                Seller
                            </p>
                        </div>
                        <div
                            class="flex absolute bottom-1 right-1 flex-col dark:text-green-500 justify-center items-center"
                        >
                            <p
                                class="text-[10px] text-red-400 dark:text-red-500 font-light"
                            >
                                Heired:
                                <span class="text-[10px]">March 2023</span>
                            </p>
                        </div>
                    </div>

                    <div
                        class="flex relative flex-col gap-2 justify-center items-center dark:bg-gray-900 rounded-lg bg-gray-100 border dark:border-gray-900 shadow-md p-6"
                    >
                        <div class="">
                            <img
                                class="object-cover w-24 h-24 rounded-full"
                                src="https://www.unicef.org/cambodia/sites/unicef.org.cambodia/files/styles/hero_tablet/public/ED_UNICEF_BK_Dec%2005%2C%202017_0086.jpg.webp?itok=TuYJhpRA"
                                alt=""
                            />
                        </div>
                        <div
                            class="flex flex-col dark:text-green-500 justify-center items-center"
                        >
                            <p
                                class="text-sm text-gray-800 dark:text-green-500 opacity-90 font-light"
                            >
                                Din Somnang
                            </p>
                            <p
                                class="text-sm text-gray-800 dark:text-green-500 opacity-90 font-light"
                            >
                                Seller
                            </p>
                        </div>
                        <div
                            class="flex absolute bottom-1 right-1 flex-col dark:text-green-500 justify-center items-center"
                        >
                            <p
                                class="text-[10px] text-red-400 dark:text-red-500 font-light"
                            >
                                Heired:
                                <span class="text-[10px]">March 2023</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex relative flex-col gap-2 justify-center items-center dark:bg-gray-900 rounded-lg bg-gray-100 border dark:border-gray-900 shadow-md p-6"
                    >
                        <div class="">
                            <img
                                class="object-cover w-24 h-24 rounded-full"
                                src="https://www.unicef.org/cambodia/sites/unicef.org.cambodia/files/styles/hero_tablet/public/ED_UNICEF_BK_Dec%2005%2C%202017_0086.jpg.webp?itok=TuYJhpRA"
                                alt=""
                            />
                        </div>
                        <div
                            class="flex flex-col dark:text-green-500 justify-center items-center"
                        >
                            <p
                                class="text-sm text-gray-800 dark:text-green-500 opacity-90 font-light"
                            >
                                Din Somnang
                            </p>
                            <p
                                class="text-sm text-gray-800 dark:text-green-500 opacity-90 font-light"
                            >
                                Seller
                            </p>
                        </div>
                        <div
                            class="flex absolute bottom-1 right-1 flex-col dark:text-green-500 justify-center items-center"
                        >
                            <p
                                class="text-[10px] text-red-400 dark:text-red-500 font-light"
                            >
                                Heired:
                                <span class="text-[10px]">March 2023</span>
                            </p>
                        </div>
                    </div>
                    <div
                        class="flex relative flex-col gap-2 justify-center items-center dark:bg-gray-900 rounded-lg bg-gray-100 border dark:border-gray-900 shadow-md p-6"
                    >
                        <div class="">
                            <img
                                class="object-cover w-24 h-24 rounded-full"
                                src="https://www.unicef.org/cambodia/sites/unicef.org.cambodia/files/styles/hero_tablet/public/ED_UNICEF_BK_Dec%2005%2C%202017_0086.jpg.webp?itok=TuYJhpRA"
                                alt=""
                            />
                        </div>
                        <div
                            class="flex flex-col dark:text-green-500 justify-center items-center"
                        >
                            <p
                                class="text-sm text-gray-800 dark:text-green-500 opacity-90 font-light"
                            >
                                Din Somnang
                            </p>
                            <p
                                class="text-sm text-gray-800 dark:text-green-500 opacity-90 font-light"
                            >
                                Seller
                            </p>
                        </div>
                        <div
                            class="flex absolute bottom-1 right-1 flex-col dark:text-green-500 justify-center items-center"
                        >
                            <p
                                class="text-[10px] text-red-400 dark:text-red-500 font-light"
                            >
                                Heired:
                                <span class="text-[10px]">March 2023</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
