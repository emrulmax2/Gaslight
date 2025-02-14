(function () {
    "use strict";

    // Chart
    const chartEl = $(".donut-chart");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");
            const chartData = [15, 10, 65];
            const chartColors = () => [
                getColor("pending", 0.9),
                getColor("warning", 0.9),
                getColor("primary", 0.9),
            ];

            const donutChart = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: ["Html", "Vuejs", "Laravel"],
                    datasets: [
                        {
                            data: chartData,
                            backgroundColor: chartColors(),
                            hoverBackgroundColor: chartColors(),
                            borderWidth: 5,
                            borderColor: getColor("white"),
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
                    cutout: "80%",
                },
            });

            // Watch CSS variable color changes
            helper.watchCssVariables(
                "html",
                ["color-pending", "color-warning", "color-primary"],
                (newValues) => {
                    donutChart.data.datasets[0].backgroundColor = chartColors();
                    donutChart.data.datasets[0].hoverBackgroundColor =
                        chartColors();
                    donutChart.update();
                }
            );
        });
    }
})();
