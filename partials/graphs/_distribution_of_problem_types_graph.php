<div class="panel" id="distribution_of_problem_types_graph"></div>

<script type="text/javascript">
window.graphs.push(function() {

var data = new google.visualization.arrayToDataTable([
['Problem Type', 'Number of Occurrences'],
['Apple', 94],
['Linux', 26],
['Printer', 16],
['Deleted', 35],
['Jammed', 26],
['Fire', 3],
['Closing', 15],
['Crashed', 48],
['Opening', 31],
['Missing', 19],
['Stuck', 45],
['Slow', 69],
]);


var options = {
title: 'No. of Problem Type Occurrences',
subtitle: 'Recorded over the month of Feburary',
legend: {
  position: 'left',
  textStyle: {color: 'black', fontsize: 16}
},
pieSliceText: 'label',
slices: {
  0: {offset: 0.2},
  3:{offset: 0.2},
  7:{offset: 0.2},
},
width: 900,
height: 500
};

var chart = new google.visualization.PieChart(document.getElementById('distribution_of_problem_types_graph'));

chart.draw(data, options);
});
</script>
