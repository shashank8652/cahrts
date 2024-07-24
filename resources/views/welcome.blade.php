<!DOCTYPE html>
<html>

<head>
    <title>
       Charts 
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <style>
    body {
        font-family: "Nunito Sans", sans-serif;
    }




    .containerbox {
        display: grid;
        grid-template-columns: repeat(1, 160px);
        grid-gap: 80px;
        margin: auto 0;
        justify-content: center;
    }



    .containerbox .box {
        width: 100%;
    }

    .containerbox .box h2 {
        display: block;
        text-align: center;
        color: #000;
    }

    .containerbox .box .chart {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        font-size: 40px;
        line-height: 160px;
        height: 160px;
        color: #000;
    }

    .containerbox .box canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        width: 100%;
    }

    .box canvas {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        width: 100%;
    }

    p {
        color: #7C828A;
        font-size: 16px;
    }

    .carousel {
        height: 210px;
    }

    .custom-tooltip {
        background: #fff;
        border: 1px solid #ddd;
        padding: 5px;
        border-radius: 5px;
        position: absolute;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.1s;
    }

    .carousel-indicators [data-bs-target] {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        color: #000;
        background-color: #7c828a6b;
    }
    </style>

</head>

<body>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-6">
                <h3 class="text-center">
                    Chart JS Area Chart Example 2
                </h3>
                <canvas id="myChart"> </canvas>
            </div>


            <div class="col-md-6">
                <h3 class="text-center">
                    Chart title
                </h3>
                <p class="text-center">Here go numbers XX of total XX</p>


                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="containerbox">

                                <div class="box">
                                    <div class="chart" data-percent="76" data-scale-color="#ffb400">76%</div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="containerbox">

                                <div class="box">
                                    <div class="chart" data-percent="76" data-scale-color="#ffb400">76%</div>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="containerbox">

                                <div class="box">
                                    <div class="chart" data-percent="76" data-scale-color="#ffb400">76%</div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

       <div class="row mb-5">
            <div class="col-md-6">
                <h3 class="text-center">
                    Chart JS Area Chart Example 2
                </h3>
                <canvas id="myArea"> </canvas>
            </div>


            <div class="col-md-6">
                <h3 class="text-center">
                    Chart JS Area Chart Example 2
                </h3>
                <canvas id="barChart"></canvas>
            </div>

        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <h3 class="text-center">
                    Chart JS Area Chart Example 2
                </h3>
                <canvas id="myChart5"> </canvas>
            </div>
        </div>

    </div>
  </div>
    <script>
    var ctx = document.getElementById("myChart").getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["15 April", "17 April", "19 April", "21 April"],
            datasets: [{
                    label: 'Point 01', // Name the series
                    data: [250, 260, 100, 250, 0, 0], // Specify the data values array
                    fill: true,
                    borderColor: '#147AD6', // Add custom color border (Line)
                    backgroundColor: '#147AD6', // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                },
                {
                    label: 'Point 02', // Name the series
                    data: [400, 480, 220, 350, 0, 0], // Specify the data values array
                    fill: true,
                    borderColor: '#EC6666', // Add custom color border (Line)
                    backgroundColor: '#EC6666', // Add custom color background (Points and Fill)
                    borderWidth: 1 // Specify bar border width
                   
                },
            ],

        },
        options: {
            scales: {
                y: {
                    grid: {
                        display: false,
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    fontSize: 20,
                    left:"0",
                    labels: {
                        color: '#7C828A',
                        fontSize: 20,
                        
                    }
                },
                title: {
                    display: true,
                    text: "15 April - 21 April",
                    position: "top",
                    fontSize: 25,
                    fontFamily: "NunitoSans-Regular",
                    fontColor: "#7C828A",
                    fontStyle: "bold italic",
                    padding: 20,
                    lineHeight: 5,
                },
            }
        }
    });
    </script>




    <script>
    var ctx4 = document.getElementById("myChart5").getContext('2d');

    var myChart5 = new Chart(ctx4, {
        type: 'line',
        data: {
            labels: ["15 April", "16 April", "17 April", "19 April", "21 April"],
            datasets: [{
                    label: 'Point 01', // Name the series
                    data: [250, 50, 200, 180, 200, 0], // Specify the data values array
                    fill: true,
                    borderColor: '#147AD6', // Add custom color border (Line)
                    backgroundColor: '#147AD6', // Add custom color background (Points and Fill)
                    borderWidth: 1, // Specify bar border width
                    pointRadius: 5,
                    tension: 0.4 // This makes the line smooth
                },
                {
                    label: 'Point 02', // Name the series
                    data: [450, 300, 380, 350, 490, 500], // Specify the data values array
                    fill: true,
                    borderColor: '#79D2DE', // Add custom color border (Line)
                    backgroundColor: '#79D2DE', // Add custom color background (Points and Fill)
                    borderWidth: 1, // Specify bar border width
                    pointRadius: 5,
                    tension: 0.4 // This makes the line smooth
                },
            ],

        },
        options: {
            scales: {
                y: {
                    grid: {
                        display: false,
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                },
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    fontSize: 20,
                    labels: {
                        color: '#7C828A',
                        fontSize: 20,
                    }
                },
                title: {
                    display: true,
                    text: "15 April - 21 April",
                    position: "top",
                    fontSize: 25,
                    fontFamily: "NunitoSans-Regular",
                    fontColor: "#7C828A",
                    fontStyle: "bold italic",
                    padding: 20,
                    lineHeight: 5,
                },
            }
        }
    });
    </script>



    <script>
    var ctx3 = document.getElementById('barChart').getContext('2d');
    var gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(75, 192, 192, 0.2)');
    gradient.addColorStop(1, 'rgba(75, 192, 192, 0)');

    // var data = [250, 450, 489, 200, 300, 250];

    var barChart = new Chart(ctx3, {
        type: 'bar',
        data: {
            labels: ['JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN'],
            datasets: [{
                type: 'line',
                label: 'Line Data',
                data: [250, 200, 489, 200, 150, 100],
                // data: data,
                backgroundColor: gradient,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: true,
                pointBackgroundColor: function(context) {
                    return context.dataIndex === 2 ? 'rgba(75, 192, 192, 1)' :
                        'rgba(75, 192, 192, 0)';
                },
                pointHoverRadius: 10,
                pointHoverBackgroundColor: 'rgba(75, 192, 192, 1)',
            }, {
                type: 'bar',
                label: 'Bar Data',
                data: [500, 500, 500, 500, 500, 500],
                backgroundColor: ['#7c828a6b', '#7c828a6b', '#7C828A', '#7c828a6b', '#7c828a6b',
                    '#7c828a6b', '#7c828a6b'
                ],
                borderColor: '#7c828a6b',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.raw + ' additional text';
                        }
                    }
                },
                annotation: {
                    annotations: {
                        box1: {
                            type: 'box',
                            xMin: 2,
                            xMax: 3,
                            backgroundColor: 'rgba(100, 100, 255, 0.1)',
                        }
                    }
                },
                title: {
                    display: true,
                    text: "15 April - 21 April",
                    position: "top",
                    fontSize: 25,
                    fontFamily: "NunitoSans-Regular",
                    fontColor: "#7C828A",
                    fontStyle: "bold italic",
                    padding: 20,
                    lineHeight: 5,
                },
                legend: {
                    display: false,
                },
                
            },
            
            scales: {
                y: {
                    grid: {
                        display: false,
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                },
            },
        }
    });
    </script>



    <script>
    const ctx2 = document.getElementById('myArea').getContext('2d');
    const myArea = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            datasets: [{
                label: 'My Dataset',
                data: [200, 250, 180, 190, 202, 200, 150],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 2,
                fill: true,
                pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                pointRadius: 5,
                tension: 0.4 // This makes the line smooth
            }]
        },
        options: {
            scales: {
                y: {
                    grid: {
                        display: false,
                    },
                },
                x: {
                    grid: {
                        display: false,
                    },
                },
            },
            plugins: {
                tooltip: {
                    enabled: false,
                    external: function(context) {
                        // Tooltip Element
                        let tooltipEl = document.getElementById('chartjs-tooltip');

                        // Create element on first render
                        if (!tooltipEl) {
                            tooltipEl = document.createElement('div');
                            tooltipEl.id = 'chartjs-tooltip';
                            tooltipEl.classList.add('custom-tooltip');
                            document.body.appendChild(tooltipEl);
                        }

                        // Hide if no tooltip
                        const tooltipModel = context.tooltip;
                        if (tooltipModel.opacity === 0) {
                            tooltipEl.style.opacity = 0;
                            return;
                        }

                        // Set Text
                        if (tooltipModel.body) {
                            const bodyLines = tooltipModel.body.map(bodyItem => bodyItem.lines);

                            let innerHtml = '';
                            bodyLines.forEach(function(body, i) {
                                innerHtml += '<div>' + body + '</div>';
                            });

                            tooltipEl.innerHTML = innerHtml;
                        }

                        // Position the tooltip
                        const position = context.chart.canvas.getBoundingClientRect();
                        tooltipEl.style.opacity = 1;
                        tooltipEl.style.left = position.left + window.pageXOffset + tooltipModel.caretX +
                            'px';
                        tooltipEl.style.top = position.top + window.pageYOffset + tooltipModel.caretY +
                        'px';
                    }
                },
                title: {
                    display: true,
                    text: "15 April - 21 April",
                    position: "top",
                    fontSize: 25,
                    fontFamily: "NunitoSans-Regular",
                    fontColor: "#7C828A",
                    fontStyle: "bold italic",
                    padding: 20,
                    lineHeight: 5,
                },
                legend: {
                    display: false,
                },
            }
        }
    });
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>

    <script>
    $(function() {
        $('.chart').easyPieChart({
            size: 160,
            barColor: "#147AD6",
            scaleLength: 0,
            lineWidth: 22,
            trackColor: "#7c828a6b",
            lineCap: "circle",
            animate: 2000,
        });
    });
    </script>

</body>

</html>