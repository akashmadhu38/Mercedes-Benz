    var chartJs = function() {

        var doughnutData = [{
                value: 300,
                color: "#057aff",
                highlight: "#057aff",
                label: "Chrome"
            }, {
                value: 50,
                color: "#556B8D",
                highlight: "#556B8D",
                label: "IE"
            }, {
                value: 100,
                color: "#ff004d",
                highlight: "#ff004d",
                label: "Safari"
            }, {
                value: 40,
                color: "#CED1D3",
                highlight: "#CED1D3",
                label: "Other"
            }, {
                value: 120,
                color: "#00cc36",
                highlight: "#00cc36",
                label: "Firefox"
            }

        ];



        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100)
        };
        var lineChartData = {
                labels: ["January", "February", "March", "April", "May", "June", "July"],
                datasets: [{
                    label: 'Network Usage',
                    fillColor: 'rgba(5,122,255,0.5)',
                    strokeColor: 'rgba(3,110,231,0.5)',
                    pointColor: 'rgba(5,122,255,0.5)',
                    pointStrokeColor: '#fff',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                }, {
                    label: 'CPU Load',
                    fillColor: 'rgba(0,204,54,0.5)',
                    strokeColor: 'rgba(4,150,42,0.5)',
                    pointColor: 'rgba(0,204,54,0.5)',
                    pointStrokeColor: '#fff',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(151,187,205,1)',
                    data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                }]

            }



         var randomScalingFactor = function() {
            return Math.round(Math.random() * 100)
        };
        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                fillColor: 'rgba(0,204,54,0.5)',
                strokeColor: 'rgba(0,0,0,0)',
                highlightFill: 'rgba(0,204,54,1)',
                highlightStroke: 'rgba(0,0,0,0)',
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }, {
                label: 'CPU Load',
                fillColor: 'rgba(5,122,255,0.5)',
                strokeColor: 'rgba(0,0,0,0)',
                highlightFill: 'rgba(5,122,255,1)',
                highlightStroke: 'rgba(0,0,0,0)',
                data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
            }]

        }


        var chartData = [{
            value: Math.random(),
            color: "#00cc36"
        }, {
            value: Math.random(),
            color: "#ff004d"
        }, {
            value: Math.random(),
            color: "#eeeeee"
        }, {
            value: Math.random(),
            color: "#CED1D3"
        }, {
            value: Math.random(),
            color: "#057aff"
        }, {
            value: Math.random(),
            color: "#556B8D"
        }];



        window.onload = function() {
            var ctx1 = document.getElementById("line").getContext("2d");
            window.myLine = new Chart(ctx1).Line(lineChartData, {
                responsive: true
            });

            var ctx2 = document.getElementById("bar").getContext("2d");
            window.myBar = new Chart(ctx2).Bar(barChartData, {
                responsive: true
            });

            var ctx3 = document.getElementById("doughnut").getContext("2d");
            window.myDoughnut = new Chart(ctx3).Doughnut(doughnutData, {
                responsive: true
            });

            var ctx4 = document.getElementById("polarArea").getContext("2d");
            window.myPolarArea = new Chart(ctx4).PolarArea(chartData, {
                responsive: true
            });

        };

    }();

