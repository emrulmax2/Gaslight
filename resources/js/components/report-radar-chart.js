(function () {
    "use strict";

    // Chart
    const chartEl = $(".report-radar-chart");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");

            const reportRadarChart = new Chart(ctx, {
                type: "radar",
                data: {
                    labels: [
                        "Quality Metrics",
                        "Resource Allocation",
                        "Staffing Levels",
                        "Patient Demographics",
                        "Operational Efficiency",
                        "Financial Performance",
                    ],
                    datasets: [
                        {
                            label: "My First Dataset",
                            data: [65, 59, 90, 56, 55, 40],
                            fill: true,
                            borderWidth: 1,
                            backgroundColor: getColor("primary", 0.2),
                            borderColor: getColor("primary", 0.6),
                            pointBackgroundColor: getColor("primary", 0.6),
                            pointBorderColor: "#fff",
                            pointHoverBackgroundColor: "#fff",
                            pointHoverBorderColor: getColor("primary", 0.6),
                        },
                        {
                            label: "My Second Dataset",
                            data: [28, 48, 40, 19, 27, 100],
                            fill: true,
                            borderWidth: 1,
                            backgroundColor: getColor("info", 0.2),
                            borderColor: getColor("info", 0.6),
                            pointBackgroundColor: getColor("info", 0.6),
                            pointBorderColor: "#fff",
                            pointHoverBackgroundColor: "#fff",
                            pointHoverBorderColor: getColor("info", 0.6),
                        },
                    ],
                },
                options: {
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    scales: {
                        r: {
                            ticks: {
                                stepSize: 40,
                            },
                            pointLabels: {
                                font: {
                                    size: 11,
                                },
                            },
                        },
                    },
                },
            });

            // Watch CSS variable color changes
            helper.watchCssVariables(
                "html",
                ["color-primary", "color-info"],
                (newValues) => {
                    reportRadarChart.data.datasets[0].backgroundColor =
                        getColor("primary", 0.2);
                    reportRadarChart.data.datasets[0].borderColor = getColor(
                        "primary",
                        0.6
                    );
                    reportRadarChart.data.datasets[0].pointBackgroundColor =
                        getColor("primary", 0.6);
                    reportRadarChart.data.datasets[0].pointHoverBorderColor =
                        getColor("primary", 0.6);

                    reportRadarChart.data.datasets[1].backgroundColor =
                        getColor("info", 0.2);
                    reportRadarChart.data.datasets[1].borderColor = getColor(
                        "info",
                        0.6
                    );
                    reportRadarChart.data.datasets[1].pointBackgroundColor =
                        getColor("info", 0.6);
                    reportRadarChart.data.datasets[1].pointHoverBorderColor =
                        getColor("info", 0.6);

                    reportRadarChart.update();
                }
            );
        });
    }
})();
