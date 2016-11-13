<div class="panel" id="distribution_of_problem_types_graph"></div>

<script type="text/javascript">
window.graphs.push(function() {

var data = new google.visualization.arrayToDataTable([
['Problem Type', 'Number of Occurrences'],
['Linux Crashed', 36],
['File Deleted', 35],
['Printer Jammed', 26],
['No Internet', 31],
['Computer Slow', 26],
]);


var options = {
title: 'No. of Problem Occurrences',
subtitle: 'Recorded over the month of Feburary',
legend: {
  position: 'left',
  textStyle: {color: 'black', fontsize: 16}
},
pieSliceText: 'label',
slices: {
  1:{offset: 0.1},
},
width: 900,
height: 500
};

var chart = new google.visualization.PieChart(document.getElementById('distribution_of_problem_types_graph'));

chart.draw(data, options);
});
</script>
