<div class="panel" id="distribution_of_problem_types_graph"></div>

<script type="text/javascript">
window.graphs.push(function() {

var data = new google.visualization.arrayToDataTable([
['Problem Type', 'Number of Occurrences'],
['Linux Crashed', 21],
['File Deleted', 25],
['Printer Jammed', 23],
['No Internet', 26],
['Computer Slow', 21],
['Other', 5],
]);


var options = {
title: 'No. of Problem Occurrences',
subtitle: 'Recorded over the month of Feburary',
legend: {
  position: 'left',
  textStyle: {color: 'black', fontsize: 16}
},
pieSliceText: 'label',
width: 900,
height: 500
};

var chart = new google.visualization.PieChart(document.getElementById('distribution_of_problem_types_graph'));

chart.draw(data, options);
});
</script>
