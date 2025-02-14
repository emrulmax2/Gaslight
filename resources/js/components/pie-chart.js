(function () {
    "use strict";

    // Chart
    const chartEl = $(".pie-chart");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");
            const chartData = [15, 10, 65];
            const chartColors = () => [
                getColor("pending", 0.9),
                getColor("warning", 0.9),
                getColor("primary", 0.9),
            ];

            const pieChart = new Chart(ctx, {
                type: "pie",
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
                },
            });

            // Watch CSS variable color changes
            helper.watchCssVariables(
                "html",
                ["color-pending", "color-warning", "color-primary"],
                (newValues) => {
                    pieChart.data.datasets[0].backgroundColor = chartColors();
                    pieChart.update();
                }
            );
        });
    }
})();
