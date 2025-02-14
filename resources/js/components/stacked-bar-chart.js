(function () {
    "use strict";

    // Chart
    const chartEl = $(".stacked-bar-chart");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");

            const stackedBarChart = new Chart(ctx, {
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
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [
                        {
                            label: "Html Template",
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            backgroundColor: getColor("primary"),
                            data: helper.randomNumbers(-100, 100, 12),
                        },
                        {
                            label: "VueJs Template",
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            backgroundColor: getColor("slate.300"),
                            data: helper.randomNumbers(-100, 100, 12),
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
                            stacked: true,
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
                            stacked: true,
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
                stackedBarChart.data.datasets[0].backgroundColor =
                    getColor("primary");
                stackedBarChart.update();
            });
        });
    }
})();
