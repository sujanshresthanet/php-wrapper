<!DOCTYPE html>
<html>
<head>
<link href="css/extension-page-style.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.widgets.js"></script>

<style>

.code-block-holder pre {
      max-height: 188px;  
      min-height: 188px; 
      overflow: auto;
      border: 1px solid #ccc;
      border-radius: 5px;
}


.tab-btn-holder {
    width: 100%;
    margin: 20px 0 0;
    border-bottom: 1px solid #dfe3e4;
    min-height: 30px;
}

.tab-btn-holder a {
    background-color: #fff;
    font-size: 14px;
    text-transform: uppercase;
    color: #006bb8;
    text-decoration: none;
    display: inline-block;
    *zoom:1; *display:inline;


}

.tab-btn-holder a.active {
    color: #858585;
    padding: 9px 10px 8px;
    border: 1px solid #dfe3e4;
    border-bottom: 1px solid #fff;
    margin-bottom: -1px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    position: relative;
    z-index: 300;
}

</style>

</head>
<body>
	<?php
	include("../src/fusioncharts.php");
	$ganttChart = new FusionCharts("gantt", "ex1" , "100%", "200", "chart-1", "json", '{
            "chart": {
                "dateformat": "mm/dd/yyyy",
                "caption": "Social Media Optimization",
                "subcaption": "Typical Steps Involved",
                "theme": "fint",
                "canvasBorderAlpha": "40"
            },
            "categories": [
                {
                    "category": [
                        {
                            "start": "08/01/2014",
                            "end": "08/31/2014",
                            "label": "Aug \'14"
                        },
                        {
                            "start": "09/01/2014",
                            "end": "09/30/2014",
                            "label": "Sep \'14"
                        },
                        {
                            "start": "10/01/2014",
                            "end": "10/31/2014",
                            "label": "Oct \'14"
                        },
                        {
                            "start": "11/01/2014",
                            "end": "11/30/2014",
                            "label": "Nov \'14"
                        },
                        {
                            "start": "12/01/2014",
                            "end": "12/31/2014",
                            "label": "Dec \'14"
                        },
                        {
                            "start": "01/01/2015",
                            "end": "01/31/2015",
                            "label": "Jan \'15"
                        },
                        {
                            "start": "02/01/2015",
                            "end": "02/28/2015",
                            "label": "Feb \'15"
                        },
                        {
                            "start": "03/01/2015",
                            "end": "03/31/2015",
                            "label": "Mar \'15"
                        }
                    ]
                }
            ],
            "processes": {
                "fontsize": "12",
                "isbold": "1",
                "align": "right",
                "process": [
                    {
                        "label": "Identify Customers"
                    },
                    {
                        "label": "Survey 500 Customers"
                    },
                    {
                        "label": "Interpret Requirements"
                    },
                    {
                        "label": "Market Analysis"
                    },
                    {
                        "label": "Brainstorm concepts"
                    },
                    {
                        "label": "Define Ad Requirements"
                    },
                    {
                        "label": "Design & Develop"
                    },
                    {
                        "label": "Mock test"
                    },
                    {
                        "label": "Documentation"
                    },
                    {
                        "label": "Start Campaign"
                    }
                ]
            },
            "tasks": {
                "task": [
                    {
                        "start": "08/04/2014",
                        "end": "08/10/2014"
                    },
                    {
                        "start": "08/08/2014",
                        "end": "08/19/2014"
                    },
                    {
                        "start": "08/19/2014",
                        "end": "09/02/2014"
                    },
                    {
                        "start": "08/24/2014",
                        "end": "09/02/2014"
                    },
                    {
                        "start": "09/02/2014",
                        "end": "09/21/2014"
                    },
                    {
                        "start": "09/21/2014",
                        "end": "10/06/2014"
                    },
                    {
                        "start": "10/06/2014",
                        "end": "01/21/2015"
                    },
                    {
                        "start": "01/21/2015",
                        "end": "02/19/2015"
                    },
                    {
                        "start": "01/28/2015",
                        "end": "02/24/2015"
                    },
                    {
                        "start": "02/24/2015",
                        "end": "03/27/2015"
                    }
                ]
            }
            
        }');
	// Render the chart
	$ganttChart->render();
?>
<div class="live-chart-wrapper">
<span id="chart-1" class="chart" ><!-- Fusion Charts will render here--></span>

</div>

</body>
</html>

