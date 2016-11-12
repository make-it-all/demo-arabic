<div class="panel" id="new_calls_graph"></div>

<script type="text/javascript">
google.charts.load('current', {'packages':['line']});
// google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

var data = new google.visualization.DataTable();
data.addColumn('string', 'Day');
data.addColumn('number', 'Completed Problems');
data.addColumn('number', 'Outstanding Problems');
data.addColumn('number', 'Total Problems');

data.addRows([
['1st',  7, 3, 10],
['2nd',  11, 4, 15],
['3rd',  16, 6, 22],
['4th',  24, 2, 26],
['5th',  27, 4, 31],
['6th',  27, 9, 36],
['7th',  32, 8, 40],
['8th',  36, 11, 47],
['9th',  49, 4, 53],
['10th', 52, 8, 60],
['11th', 55, 13, 68],
['12th', 60, 16, 76],
['13th', 71, 9, 80],
['14th', 79, 10, 89],
['15th', 88,  6, 96],
['16th', 96, 9, 105],
['17th', 97, 19, 116],
['18th', 100, 19, 119],
['19th', 102, 22, 124],
['20th', 105, 25, 130],
['21st', 107, 28, 135],
['22nd', 107, 39, 146],
['23th', 110, 50, 160],
['24th', 130, 40, 170],
['25th', 141, 34, 175],
['26th', 160, 22, 182],
['27th', 169, 14, 183],
['28th', 178, 12, 190],
['29th', 189, 8, 197],
['30th', 197, 3, 200],
['31st', 200, 5, 205],
]);

var options = {
chart: {
title: 'Problems through the month of Janurary',
subtitle: 'Recorded at the end of each working day',
},
width: 900,
height: 500
};

var chart = new google.charts.Line(document.getElementById('new_calls_graph'));

chart.draw(data, options);
}
</script>
