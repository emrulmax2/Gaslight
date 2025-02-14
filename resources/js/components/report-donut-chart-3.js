(function () {
    "use strict";

    // Chart
    const chartEl = $(".report-donut-chart-3");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");
            const chartData = [35, 65];

            const reportDonutChart3 = new Chart(ctx, {
                type: "doughnut",
                data: {
                    labels: [
                        "31 - 50 Years old",
                        ">= 50 Years old",
                        "17 - 30 Years old",
                    ],
                    datasets: [
                        {
                            data: chartData,
                            backgroundColor: [
                                getColor("danger", 0.6),
                                getColor("theme.2", 0.6),
                            ],
                            hoverBackgroundColor: [
                                getColor("danger", 0.6),
                                getColor("theme.2", 0.6),
                            ],
                            borderWidth: 1,
                            borderColor: [
                                getColor("danger", 0.6),
                                getColor("theme.2", 0.6),
                            ],
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
                    cutout: "89%",
                    rotation: -90,
                    circumference: 180,
                },
            });

            // Watch CSS variable color changes
            helper.watchCssVariables(
                "html",
                ["color-danger", "color-theme-2"],
                (newValues) => {
                    reportDonutChart3.data.datasets[0].borderColor[0] =
                        getColor("danger", 0.6);
                    reportDonutChart3.data.datasets[0].hoverBackgroundColor[0] =
                        getColor("danger", 0.6);
                    reportDonutChart3.data.datasets[0].backgroundColor[0] =
                        getColor("danger", 0.6);
                    reportDonutChart3.data.datasets[0].borderColor[1] =
                        getColor("theme.2", 0.6);
                    reportDonutChart3.data.datasets[0].hoverBackgroundColor[1] =
                        getColor("theme.2", 0.6);
                    reportDonutChart3.data.datasets[0].backgroundColor[1] =
                        getColor("theme.2", 0.6);
                    reportDonutChart3.update();
                }
            );
        });
    }
})();
