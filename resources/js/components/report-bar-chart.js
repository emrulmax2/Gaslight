(function () {
    "use strict";

    // Chart
    const chartEl = $(".report-bar-chart");

    if (chartEl.length) {
        chartEl.each(function () {
            const ctx = $(this)[0].getContext("2d");

            // Fake visitor data
            let reportBarChartData = new Array(25).fill(0).map((data, key) => {
                if (key % 3 == 0 || key % 5 == 0) {
                    return Math.ceil(Math.random() * (0 - 20) + 20);
                } else {
                    return Math.ceil(Math.random() * (0 - 7) + 7);
                }
            });

            // Fake visitor bar color
            let reportBarChartColor = reportBarChartData.map((data) => {
                if (data >= 8 && data <= 14) {
                    return $("html").hasClass("dark")
                        ? "#2E51BBA6"
                        : getColor("primary", 0.3);
                } else if (data >= 15) {
                    return $("html").hasClass("dark")
                        ? "#2E51BB"
                        : getColor("primary", 0.3);
                }

                return $("html").hasClass("dark")
                    ? "#2E51BB59"
                    : getColor("primary", 0.3);
            });

            let reportBarChartBorderColor = reportBarChartData.map((data) => {
                if (data >= 8 && data <= 14) {
                    return $("html").hasClass("dark")
                        ? "#2E51BBA6"
                        : getColor("primary", 0.3);
                } else if (data >= 15) {
                    return $("html").hasClass("dark")
                        ? "#2E51BB"
                        : getColor("primary", 0.3);
                }

                return $("html").hasClass("dark")
                    ? "#2E51BB59"
                    : getColor("primary", 0.3);
            });

            const barChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: reportBarChartData,
                    datasets: [
                        {
                            categoryPercentage: 0.8,
                            barPercentage: 1,
                            borderRadius: 1.5,
                            data: reportBarChartData,
                            borderWidth: 1,
                            borderColor: getColor("primary", 0.7),
                            backgroundColor: getColor("primary", 0.3),
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
                        },
                        y: {
                            ticks: {
                                display: false,
                                beginAtZero: true,
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

            setInterval(() => {
                // Swap visitor data
                let newData = reportBarChartData[0];
                reportBarChartData.shift();
                reportBarChartData.push(newData);

                // Swap visitor bar color
                let newColor = reportBarChartColor[0];
                reportBarChartColor.shift();
                reportBarChartColor.push(newColor);

                barChart.update();
            }, 1000);

            // Watch CSS variable color changes
            helper.watchCssVariables("html", ["color-primary"], (newValues) => {
                barChart.data.datasets[0].borderColor = getColor(
                    "primary",
                    0.7
                );
                barChart.data.datasets[0].backgroundColor = getColor(
                    "primary",
                    0.3
                );
                barChart.update();
            });
        });
    }
})();
