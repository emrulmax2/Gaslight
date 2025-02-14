(function () {
    "use strict";

    // Chart
    const chartEl = $(".simple-line-chart-1");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");

            const simpleLineChart1 = new Chart(ctx, {
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
                            label: "# of Votes",
                            data: [
                                0, 200, 250, 200, 500, 450, 850, 1050, 950,
                                1100, 900, 1200,
                            ],
                            borderWidth: 2,
                            borderColor:
                                $(this).data("line-color") !== undefined
                                    ? $(this).data("line-color")
                                    : getColor("primary", 0.8),
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
                            display: false,
                        },
                    },
                    scales: {
                        x: {
                            ticks: {
                                display: false,
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
                                display: false,
                            },
                            grid: {
                                display: false,
                            },
                            border: {
                                display: false,
                            },
                        },
                    },
                },
            });

            // Watch CSS variable color changes
            const el = $(this);
            helper.watchCssVariables(
                "html",
                ["color-primary", `color-${$(el).data("line-color")}`],
                (newValues) => {
                    simpleLineChart1.data.datasets[0].borderColor =
                        $(el).data("line-color") !== undefined
                            ? $(el).data("line-color")
                            : getColor("primary", 0.8);
                    simpleLineChart1.update();
                }
            );
        });
    }
})();
