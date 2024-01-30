<script setup>
import { Line, Pie } from "vue-chartjs";
import * as chartConfig from "./chartConfig.js";
import { ref, onMounted } from "vue";
import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Legend,
    ArcElement,
} from "chart.js";

ChartJS.register(
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Title,
    Tooltip,
    Legend,

    ArcElement
);

const chartData = ref(chartConfig.data);
const chartOptions = ref(chartConfig.options);
const pie = ref(chartConfig.pie);
const pieOption = ref(chartConfig.pieOption);
</script>
<template>
    <div class="" id="chart1">
        <Line
            :data="chartData"
            :options="chartOptions"
            class="md:w-full chart"
        />
    </div>
    <div class="" id="chart2">
        <Pie :data="pie" :options="pieOption" class="md:w-full pie" />
    </div>
</template>

<style scoped>
#chart1 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 350px;
}
#chart2 {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 350px;
}
@media screen and (max-width: 1024px) {
    .chart,
    .pie {
        width: 90% !important;
    }
}
</style>
