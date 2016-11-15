<?php
  $title = "Dashboard";
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
?>
        <div id="page_content" class="columns">
          <div class="main_column">

            <div class="panel">
              <h1>Welcome, Alice Help</h1>
              <p>
                Since you've been gone:
              </p>
              <ul>
                <li>4 Problems have had follow up added.</li>
                <li>2 Problems have been completed.</li>
                <li>7 Calls have been made about problems you created.</li>
              </ul>
            </div>

            <div class="panel" id="new_call">
              <h2>New Call</h2>
              <form class="" action="index.html" method="post">
                <div class="field">
                  <label for="pppp23">Caller Name</label>
                  <select class="" id="pppp23" name="personnel_id" >
                    <option value=""></option>
                    <option value="1">Jason Goldner (691-019-3179)</option>
                    <option value="2">Andrew Nienow (741-472-1254)</option>
                    <option value="3">Barbara Spinka (515-206-4912 x2404)</option>
                    <option value="4">David Wiza (182.078.4299)</option>
                    <option value="4">Brian Streich (1-706-040-7250 x642)</option>
                    <option value="4">Joshua Spinka (1-871-522-0673 x09139)</option>
                    <option value="4">Susan Kuhn (325.931.5697 x88342)</option>
                    <option value="4">Lisa Mueller (1-989-139-1657)</option>
                    <option value="4">James Mueller (691-019-3179)</option>
                    <option value="4">Richard Hahn (821-588-0033 x83893)</option>
                  </select>
                </div>
                <div class="field">
                  <label for="asdasd">Notes</label>
                  <textarea name="name" id="asdasd" placeholder="Notes..."></textarea>
                </div>
                <div class="field">
                  <label for="qweqweqweeeeeeqwe">Keywords</label>
                  <input type="text" name="name" id="qweqweqweeeeeeqwe" placeholder="Keywords" />
                </div>
                <div class="problem_list">
                  <div class="problem">
                  </div>
                </div>
                <div class="actions more_like_quacktions">
                  <input type="submit" name="commit" value="New Problem" />
                  <input type="submit" name="commit" value="Existing Problem" />
                </div>

              </form>
            </div>

          </div>
          <div class="sub_column">

            <div class="panel card_panel">
              <h3>Notifications</h3>
              <div class="card">
                <h5>Felix de Neve (Admin)</h5>
                <p>
                  Hello,<br>
                  Excepteur ipsum proident culpa nulla Lorem commodo occaecat nulla Lorem commodo esse ullamco qui culpa. Reprehenderit nulla non minim id.
                </p>
                <div class="fade_out"></div>
                <div class="line_cont">
                  <div class="line red"></div>
                  <div class="line blue"></div>
                </div>
              </div>
              <div class="card">
                <h5>Jane Merry (Operator, Specialist)</h5>
                <p>
                  Hello,<br>
                  This is some sdam-ple text for the presentation sorry about it please dont actually read it because it is a wastye of your time, sorry again - Team 6
                </p>
                <div class="fade_out"></div>
                <div class="line_cont">
                  <div class="line red"></div>
                  <div class="line green"></div>
                  <div class="line blue"></div>
                </div>
              </div>
              <div class="card">
                <h5>Brian Clarke (Specialist)</h5>
                <p>
                  Hello,<br>
                  I've taken a look at the thing - it was very very awesome!
                  <br>
                  Ive sent over some more stuff please can you take
                </p>
                <div class="fade_out"></div>
                <div class="line_cont">
                  <div class="line green"></div>
                  <div class="line blue"></div>
                </div>
              </div>
              <div class="card">
                <h5>Brian Clarke</h5>
                <p>
                  Hello,<br>
                  Lorem Ipsum bacon meat word another ideas please, chris say word! random degnerate good longer needs sample data to fill this box so it doesnt look to weird,
                </p>
                <div class="fade_out"></div>
                <div class="line_cont">
                  <div class="line blue"></div>
                </div>
              </div>
            </div>


            <div class="panel graphed">
              <script type="text/javascript">
              google.charts.load('current', {'packages':['corechart', 'line']});

              window.graphs = [];
              google.charts.setOnLoadCallback(function(){
                for(i=0;i<window.graphs.length;i++) {
                  window.graphs[i].call();
                }
              });
              window.g2_width = 350;
              window.g2_height = 250;
              </script>
              <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_availability_of_specialists_graph.php'; ?>
            </div>
          </div>



<?php
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php';
?>
