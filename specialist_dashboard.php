<?php
  $title = "Dashboard";
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
?>
<!DOCTYPE html>

<div id="page_content" class="columns">
  <div class="main_column">
    <div class="panel">
      <h1>Welcome, Pauline Keeths</h1>
      <p>
        Since you've been gone:
      </p>
      <ul>
        <li>3 New jobs assigned.</li>
        <li>4 Follow up calls to your jobs.</li>
        <li>1 Specialist has made a request of you.</li>
      </ul>
    </div>

    <div class="panel">
      <table class="index_table">
        <thead>
          <tr>
            <th class="narrow_column">Type</th>
            <th data-searchable>Description</th>
            <th data-searchable>Caller</th>
            <th class="narrow_column">View</th>
          </tr>
        </thead>
        <tbody>
          <?php for($i=0; $i<6; $i++): ?>
            <tr class="<?php echo ($i<3)?'new_job':''?>">

              <td>
                <?php $x = rand(0,80); if ($x < 35): ?>
                  <i class="fa fa-file-code-o" aria-hidden="true"></i>
                <?php elseif ($x < 70): ?>
                  <i class="fa fa-desktop" aria-hidden="true"></i>
                <?php elseif ($x < 75): ?>
                  <i class="fa fa-file-code-o" aria-hidden="true"></i>
                  <i class="fa fa-desktop" aria-hidden="true"></i>
                <?php endif; ?>
              </td>

              <?php
              $words = ['bacon', 'ipsum', 'dolor', 'amet', 'capicola', 'in', 'quis', 'flank', 'laborum', 'nostrud', 'commodo', 'cil'];
              shuffle($words);
              ?>
              <td><a href="#"><?php echo implode(' ', array_slice($words, 0, rand(5,12))); ?>...</a></td>
              <?php
              $names = ["Michael", "James", "John", "Robert", "David", "William", "Mary", "Christopher", "Joseph", "Richard", "Daniel", "Thomas", "Matthew", "Jennifer", "Charles", "Anthony", "Patricia", "Linda", "Mark", "Elizabeth", "Joshua", "Steven", "Andrew", "Kevin", "Brian", "Barbara", "Jessica", "Jason", "Susan", "Timothy", "Paul", "Kenneth", "Lisa", "Ryan", "Sarah", "Karen", "Jeffrey", "Donald", "Ashley", "Eric"];
              $last_names = ["Spinka", "Nitzsche", "Gutmann", "Christiansen", "West", "Abbott", "Goldner", "Tillman", "Gorczany", "Streich", "Gerhold", "O'Hara", "Hahn", "Johns", "Wilderman", "Moore", "Connelly", "Treutel", "Nienow", "Rodriguez", "Borer", "Zulauf", "Jakubowski", "Wiza", "Cormier", "Schultz", "Mueller", "Tillman", "Hessel", "Thiel", "Barrows", "Davis", "Heaney", "Dare", "Marks", "Kuhn", "Fadel", "Graham", "Ferry", "Jast"];
              shuffle($names);
              shuffle($last_names);
              ?>
              <td><a href="#"><?php echo $names[0].' '.$last_names[0]; ?></a></td>

              <td><a href="/problems/<?php echo $i + 1; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            </tr>
          <?php endfor; ?>
        </tbody>
      </table>
    </div>

  </div>
  <div class="sub_column">

    <div class="panel big_number green">
      <p>You have solved</p>
      <h4>43</h4>
      <p>Problems so far this month.</p>
    </div>
    <div class="panel big_number red">
      <p>You have</p>
      <h4>16</h4>
      <p> follow up questions.</p>
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
        window.g_width = 350;
        window.g_height = 250;
      </script>
      <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_new_calls_graph.php'; ?>
    </div>



  </div>

<?php
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php';
?>
