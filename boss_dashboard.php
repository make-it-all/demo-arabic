<?php
  $title = "Dashboard";
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
?>
        <div id="page_content">

          <div class="panel">
            <h1>Welcome, James Boss</h1>
            <p>
              Stuff has gone on:
            </p>
            <ul>
              <li>4 Problems have had follow up added.</li>
              <li>2 Problems have been completed.</li>
              <li>7 Calls have been made about problems you created.</li>
            </ul>
          </div>
          
          <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart', 'line']});

            window.graphs = [];
            google.charts.setOnLoadCallback(function(){
              for(i=0;i<window.graphs.length;i++) {
                window.graphs[i].call();
              }
            });
          </script>
          <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_new_calls_graph.php'; ?>
          <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_distribution_of_problem_types_graph.php'; ?>
          <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_availability_of_specialists_graph.php'; ?>


        </div>
      </div>
    </div>
  </body>
</html>
