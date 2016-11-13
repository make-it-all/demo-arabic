<?php
  $title = "Dashboard";
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
?>
        <div id="page_content" class="columns">
          <div class="main_column">

            <div class="panel">
              <h1>Welcome, Sally</h1>
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
                  <select class="" name="personnel_id">
                    <option value="1">Paul</option>
                    <option value="2">Mark</option>
                    <option value="3">Brain</option>
                    <option value="4">Katie</option>
                  </select>
                </div>
                <div class="problem_list">
                  <div class="problem">
                  </div>
                </div>
                <div class="actions">
                  <button type="button" name="new_problem">New Problem</button>
                  <button type="button" name="new_problem">Existing Problem</button>
                </div>
                <div class="actions">
                  <input type="submit" name="commit" value="Save Call">
                </div>
              </form>
            </div>

          </div>
          <div class="sub_column">

          </div>



<?php
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php';
?>
