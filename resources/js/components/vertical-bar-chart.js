(function () {
    "use strict";

    // Chart
    const chartEl = $(".vertical-bar-chart");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");

            const verticalBarChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                        "Jan",
                        "Feb",
                        "Mar",
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                    ],
                    datasets: [
                        {
                            label: "Html Template",
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            data: [0, 200, 250, 200, 500, 450, 850, 1050],
                            backgroundColor: getColor("primary"),
                        },
                        {
                            label: "VueJs Template",
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            data: [0, 300, 400, 560, 320, 600, 720, 850],
                            backgroundColor: getColor("slate.300"),
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            labels: {
                                color: getColor("slate.500", 0.8),
                            },
                        },
                    },
                    scales: {
                        x: {
                            ticks: {
                                font: {
                                    size: 12,
                                },
                                color: getColor("slate.500", 0.8),
                            },
                            grid: {
                                display: false,
                            },
                            border: {
                                display: false,
                            },
                        },
                        y: {
                            ticks: {
                                font: {
                                    size: 12,
                                },
                                color: getColor("slate.500", 0.8),
                                callback: function (value) {
                                    return "$" + value;
                                },
                            },
                            grid: {
                                color: getColor("slate.300"),
                                borderDash: [2, 2],
                            },
                            border: {
                                display: false,
                            },
                        },
                    },
                },
            });

            // Watch CSS variable color changes
            helper.watchCssVariables("html", ["color-primary"], (newValues) => {
                verticalBarChart.data.datasets[0].backgroundColor =
                    getColor("primary");
                verticalBarChart.update();
            });
        });
    }
})();
