<div class="panel" id="availability_of_specialists_graph"></div>

<script type="text/javascript">
window.graphs.push(function() {

var data = new google.visualization.arrayToDataTable([
['Day', 'Number of Specialists', 'Number of Problems'],
['1st', 1, 10],
['2nd', 2, 25],
['3rd', 1, 6],
['4th', 5, 6],
['5th', 3, 9],
['6th', 2, 12],
['7th', 4, 20],
['8th', 1, 7],
['9th', 4, 18],
['10th', 5, 32],
['11th', 4, 13],
['12th', 1, 21],
['13th', 2, 10],
['14th', 3, 15],
]);

var options = {
title: 'No. of Specialists to Problems',
subtitle: 'Recorded over the first two weeks of March',
curveType: 'function',
legend: {
  position: 'bottom'
},
width: 900,
height: 500,
};

var chart = new google.visualization.LineChart(document.getElementById('availability_of_specialists_graph'));

chart.draw(data, options);
});
</script>
