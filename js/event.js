var ChartsAmcharts = function() {
    var initChart1 = function() {
        var chart = AmCharts.makeChart("chart_1", {
            "type": "serial",
            "theme": "light",

            "fontFamily": 'Open Sans',
            "color":    '#888888',

            "legend": {
                "equalWidths": true,
                "valueAlign": "left",
                "valueWidth": 20
            },
            
            "dataProvider": data1,
            "valueAxes": [{
                "stackType": "regular",
                "axisAlpha": 0,
                "position": "left",
                "title": "Times"
            }],
            "startDuration": 0.1,
            "graphs": graphs1,
            "chartCursor": {
                "cursorAlpha": 1,
                "cursorColor": "#FF4500"
            },
            "categoryField": "timestamp",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "startOnAxis": true
            }
        });

        $('#chart_1').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }
    
    var initChart2 = function() {
        var chart = AmCharts.makeChart("chart_2", {
            "type": "serial",
            "theme": "light",

            "fontFamily": 'Open Sans',
            "color":    '#888888',

            "legend": {
                "equalWidths": true,
                "valueAlign": "left",
                "valueWidth": 20
            },
            
            "dataProvider": data2,
            "valueAxes": [{
                "stackType": "regular",
                "axisAlpha": 0,
                "position": "left",
                "title": "Times"
            }],
            "startDuration": 0.1,
            "graphs": graphs2,
            "chartCursor": {
                "cursorAlpha": 1,
                "cursorColor": "#FF4500"
            },
            "categoryField": "timestamp",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "startOnAxis": true
            }
        });

        $('#chart_2').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }
    
    var initChart3 = function() {
        var chart = AmCharts.makeChart("chart_3", {
            "type": "serial",
            "theme": "light",

            "fontFamily": 'Open Sans',
            "color":    '#888888',

            "legend": {
                "equalWidths": true,
                "valueAlign": "left",
                "valueWidth": 20
            },
            
            "dataProvider": data3,
            "valueAxes": [{
                "stackType": "regular",
                "axisAlpha": 0,
                "position": "left",
                "title": "Times"
            }],
            "startDuration": 0.1,
            "graphs": graphs3,
            "chartCursor": {
                "cursorAlpha": 1,
                "cursorColor": "#FF4500"
            },
            "categoryField": "timestamp",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "startOnAxis": true
            }
        });

        $('#chart_3').closest('.portlet').find('.fullscreen').click(function() {
            chart.invalidateSize();
        });
    }

    return {
        //main function to initiate the module

        init: function() {

            initChart1();
            initChart2();
            initChart3();
        }

    };

}();