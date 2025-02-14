(function () {
    "use strict";

    // Chart
    const chartEl = $(".line-chart");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");

            const lineChart = new Chart(ctx, {
                type: "line",
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
                            data: [
                                0, 200, 250, 200, 500, 450, 850, 1050, 950,
                                1100, 900, 1200,
                            ],
                            borderWidth: 2,
                            borderColor: getColor("primary"),
                            backgroundColor: "transparent",
                            pointBorderColor: "transparent",
                            tension: 0.4,
                        },
                        {
                            label: "VueJs Template",
                            data: [
                                0, 300, 400, 560, 320, 600, 720, 850, 690, 805,
                                1200, 1010,
                            ],
                            borderWidth: 2,
                            borderDash: [2, 2],
                            borderColor: getColor("slate.400"),
                            backgroundColor: "transparent",
                            pointBorderColor: "transparent",
                            tension: 0.4,
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
                lineChart.data.datasets[0].borderColor = getColor("primary");
                lineChart.update();
            });
        });
    }
})();
