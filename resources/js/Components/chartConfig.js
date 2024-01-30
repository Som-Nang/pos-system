export const data = {
    labels: [
        "January",
        "February",
        "March",
        "April",
        "May",
        "June",
        "July",
        "August",
        "September",
        "October",
        "November",
        "December",
    ],
    datasets: [
        {
            label: "Data One",
            backgroundColor: "#72C75E",
            data: [40, 20, 12, 39, 10, 40, 39, 80, 40, 20, 12, 11],
        },
    ],
};

export const options = {
    responsive: true,
    maintainAspectRatio: false,
};
export const pie = {
    labels: ["VueJs", "EmberJs", "ReactJs", "AngularJs"],
    datasets: [
        {
            backgroundColor: ["#72C75E", "#E46651", "#00D8FF", "#DD1B16"],
            data: [40, 20, 80, 10],
        },
    ],
};

export const pieOptions = {
    responsive: true,
    maintainAspectRatio: false,
};
