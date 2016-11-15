<?php
  $title = "Dashboard";
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
?>
<script type="text/javascript">
google.charts.load('current', {'packages':['corechart', 'line']});

window.graphs = [];
google.charts.setOnLoadCallback(function(){
  for(i=0;i<window.graphs.length;i++) {
    window.graphs[i].call();
  }
});
</script>
        <div id="page_content">

          <div class="column-4">
            <div class="panel big_number green">
              <p>There have been</p>
              <h4>43</h4>
              <p>Problems solved so far this month.</p>
            </div>
            <div class="panel big_number red">
              <p>There are currently</p>
              <h4>16</h4>
              <p> problems open</p>
            </div>
            <div class="panel big_number blue">
              <p>There are</p>
              <h4>9</h4>
              <p> problems being worked on.</p>
            </div>
            <div class="panel big_number purple">
              <p>This hour, there have been</p>
              <h4>11</h4>
              <p> calls to the operators.</p>
            </div>

          </div>
          <div class="column-3">

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
              window.g_width = 350
              window.g2_width = 350
              window.g_height = 250
              window.g2_height = 250
            </script>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_new_calls_graph.php'; ?>
            <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_availability_of_specialists_graph.php'; ?>
            <!-- <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_distribution_of_problem_types_graph.php'; ?> -->
          </div>

          <div class="messages_panel">

            <div class="people_online">
              <div class="field">
                <input type="search" name="name" class="search_people" placeholder="Search People...">
                <button><i class="fa fa-search"></i></button>
              </div>
              <div class="personnel_card_container">
                <div class="personnel_card">
                  <h3>Paul Banks</h3>
                  <p><b>Email:</b> paul.m.banks@make.com</p>
                  <p><b>Telephone:</b> 07787-123123</p>
                </div>
                <div class="personnel_card">
                  <h3>Jon Goodman</h3>
                  <p><b>Email:</b> jon@make-specialist.com</p>
                  <p><b>Telephone:</b> 07787 123525x34</p>
                </div>
                <div class="personnel_card">
                  <h3>Amy Right</h3>
                  <p><b>Telephone:</b> 01952 535 356</p>
                </div>
                <div class="personnel_card">
                  <h3>Kya West</h3>
                  <p><b>Email:</b> kya.west@make.com</p>
                  <p><b>Telephone:</b> 07787 4563873</p>
                </div>
              </div>
            </div>

            <div class="people_messsages">
              <h3>Aaron Kunk (Specialist)</h3>
              <div class="message_container">

                <p class="message-left">
                  Laborum sunt consectetur aliqua proident velit reprehenderit labore commodo et officia non pariatur.
                </p>
                <p class="message-right">
                  Laborum sunt consectetur aliqua proident velit reprehenderit labore commodo et officia non pariatur.
                </p>
                <p class="message-right">
                  Laborum sunt consectetur aliqua proident velit reprehenderit labore commodo et officia non pariatur.
                </p>
                <p class="message-left">
                  Laborum sunt consectetur aliqua proident velit reprehenderit labore commodo et officia non pariatur.
                </p>
                <p class="message-right">
                  Laborum sunt consectetur aliqua proident velit reprehenderit labore commodo et officia non pariatur.
                </p>
              </div>
            </div>

          </div>


        </div>
      </div>
    </div>
  </body>
</html>
