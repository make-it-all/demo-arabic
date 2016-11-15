<?php
  $title = "Dashboard";
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
?>
<!DOCTYPE html>

<div id="page_content" class="columns">
  <div class="main_column">
    <div class="panel">
      <h1>أهلا بك Pauline Keeths</h1>
      <p>
        منذ كنت قد ذهبت
      </p>
      <ul>
        <li>3 وظائف جديدة أوكلت</li>
        <li>4 متابعة المكالمات لفرص العمل الخاص بك</li>
        <li>1 جعلت متخصص طلب منكم</li>
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
      <p>منذ كنت قد ذهبت</p>
      <h4>43</h4>
      <p>المشكلة حتى الآن هذا الشهر</p>
    </div>
    <div class="panel big_number red">
      <p>You have</p>
      <h4>16</h4>
      <p> follow up questions.</p>
    </div>
  </div>

<?php
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php';
?>
