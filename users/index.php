<?php
  $title = 'Users';
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
?>

<div id="page_content">
  <table class="index_table">
    <thead>
      <tr>
        <th class="narrow_column"><input type="checkbox" /></th>
        <th class="main_column orderable orderable-asc"><a href="#">Name</a></th>
        <th class="orderable"><a href="#">Email</a></th>
        <th>Role</th>
        <th class="narrow_column">Edit</th>
        <th class="narrow_column">Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0; $i<20; $i++): ?>
        <tr>
          <?php
            $names = ["Michael", "James", "John", "Robert", "David", "William", "Mary", "Christopher", "Joseph", "Richard", "Daniel", "Thomas", "Matthew", "Jennifer", "Charles", "Anthony", "Patricia", "Linda", "Mark", "Elizabeth", "Joshua", "Steven", "Andrew", "Kevin", "Brian", "Barbara", "Jessica", "Jason", "Susan", "Timothy", "Paul", "Kenneth", "Lisa", "Ryan", "Sarah", "Karen", "Jeffrey", "Donald", "Ashley", "Eric"];
            $last_names = ["Spinka", "Nitzsche", "Gutmann", "Christiansen", "West", "Abbott", "Goldner", "Tillman", "Gorczany", "Streich", "Gerhold", "O'Hara", "Hahn", "Johns", "Wilderman", "Moore", "Connelly", "Treutel", "Nienow", "Rodriguez", "Borer", "Zulauf", "Jakubowski", "Wiza", "Cormier", "Schultz", "Mueller", "Tillman", "Hessel", "Thiel", "Barrows", "Davis", "Heaney", "Dare", "Marks", "Kuhn", "Fadel", "Graham", "Ferry", "Jast"];
            $emails = ["@make-it-all.org", ".adams@make-it-all.co", ".bradtke@make-it-all.com", "@make-it-all.info", ".aufderhar@make-it-all.com", "@make-it-all.name", "@make-it-all.info", ".schmidt@make-it-all.info", "@make-it-all.org", "@make-it-all.org", "@make-it-all.co", "@make-it-all.name", "@make-it-all.org", ".satterfield@make-it-all.com", "@make-it-all.info", ".wuckert@make-it-all.name", "@make-it-all.com", "@make-it-all.biz", "@make-it-all.name", "@make-it-all.biz", "@make-it-all.name", ".lemke@make-it-all.info", "@make-it-all.org", "@make-it-all.co", ".gerhold@make-it-all.biz", ".considine@make-it-all.org", "@make-it-all.name", "@make-it-all.io", "@make-it-all.info", "@make-it-all.com", "@make-it-all.info", "@make-it-all.net", "@make-it-all.co", "@make-it-all.net", "@make-it-all.org", "@make-it-all.biz", "@make-it-all.co", "@make-it-all.org", "@make-it-all.biz", ".bogan@make-it-all.org"];
            shuffle($names);
            shuffle($last_names);
            shuffle($emails);
          ?>
          <td><input type="checkbox" /></td>
          <td><a href="#"><?php echo $names[0].' '.$last_names[0]; ?></a></td>
          <td><a href="#"><?php echo strtolower($names[0]).$emails[0]; ?></a></td>
          <?php
            $roles = ['specialist', 'operator'];
            shuffle($roles);
          ?>
          <td>
            <?php echo (isset($_GET['f']))? $_GET['f']:implode(', ', array_slice($roles, 0, rand(-1,2))); ?>
          </td>
          <td><a href="/users/1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td><a href="#" data-confirm="Are you sure you want to delete this user?"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>

<?php
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php';
?>
