<?php
  $title='All Personnel';
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
 ?>
<div id="page_content">
  <?php
    $total = 254;
    require $_SERVER['DOCUMENT_ROOT'].'/partials/_pagination.php';
  ?>
  <table class="index_table">
    <thead>
      <tr>
        <th data-searchable>Personnel Id</th>
        <th data-searchable>Name</th>
        <th data-searchable>Email</th>
        <th data-searchable>Phone</th>
        <th data-searchable>Department</th>
        <th class="narrow_column">Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php for($i=0; $i<20; $i++): ?>
        <tr id="<?php echo 'hi'.$i;?>">

          <?php
            $names = ["Michael", "James", "John", "Robert", "David", "William", "Mary", "Christopher", "Joseph", "Richard", "Daniel", "Thomas", "Matthew", "Jennifer", "Charles", "Anthony", "Patricia", "Linda", "Mark", "Elizabeth", "Joshua", "Steven", "Andrew", "Kevin", "Brian", "Barbara", "Jessica", "Jason", "Susan", "Timothy", "Paul", "Kenneth", "Lisa", "Ryan", "Sarah", "Karen", "Jeffrey", "Donald", "Ashley", "Eric"];
            $last_names = ["Spinka", "Nitzsche", "Gutmann", "Christiansen", "West", "Abbott", "Goldner", "Tillman", "Gorczany", "Streich", "Gerhold", "O'Hara", "Hahn", "Johns", "Wilderman", "Moore", "Connelly", "Treutel", "Nienow", "Rodriguez", "Borer", "Zulauf", "Jakubowski", "Wiza", "Cormier", "Schultz", "Mueller", "Tillman", "Hessel", "Thiel", "Barrows", "Davis", "Heaney", "Dare", "Marks", "Kuhn", "Fadel", "Graham", "Ferry", "Jast"];
            $phone_numbers = ["892.028.8222", "1-871-522-0673 x09139", "(531) 769-3180 x39359", "691-019-3179", "(741) 472-1254", "1-984-504-5904 x612", "720-497-9639", "1-706-040-7250 x642", "(597) 762-4437 x20856", "821-588-0033 x83893", "1-610-131-5395 x617", "(492) 478-5225", "378.842.0673", "325.931.5697 x88342", "1-484-886-0437 x865", "659-077-7489", "(916) 512-5165", "876.000.1119 x64166", "292-195-0849", "561-524-9364", "196.693.4749 x99719", "515-206-4912 x2404", "873.095.0870 x198", "646.935.7280", "840-032-2821", "1-989-139-1657", "(684) 537-2297", "118-179-5197 x75781", "(959) 549-4142 x22189", "1-128-098-6323", "(253) 317-3412", "(404) 312-2373", "168-186-6217 x803", "(540) 543-5513 x333", "552.866.6406", "843-148-1288", "593.227.7499 x1490", "1-257-459-6203 x342", "182.078.4299", "642.879.0017"];
            $emails = ["@make-it-all.org", ".adams@make-it-all.co", ".bradtke@make-it-all.com", "@make-it-all.info", ".aufderhar@make-it-all.com", "@make-it-all.name", "@make-it-all.info", ".schmidt@make-it-all.info", "@make-it-all.org", "@make-it-all.org", "@make-it-all.co", "@make-it-all.name", "@make-it-all.org", ".satterfield@make-it-all.com", "@make-it-all.info", ".wuckert@make-it-all.name", "@make-it-all.com", "@make-it-all.biz", "@make-it-all.name", "@make-it-all.biz", "@make-it-all.name", ".lemke@make-it-all.info", "@make-it-all.org", "@make-it-all.co", ".gerhold@make-it-all.biz", ".considine@make-it-all.org", "@make-it-all.name", "@make-it-all.io", "@make-it-all.info", "@make-it-all.com", "@make-it-all.info", "@make-it-all.net", "@make-it-all.co", "@make-it-all.net", "@make-it-all.org", "@make-it-all.biz", "@make-it-all.co", "@make-it-all.org", "@make-it-all.biz", ".bogan@make-it-all.org"];
            $departments = ["Outdoors & Kids", "Books & Sports", "Garden", "Books & Outdoors", "Movies & Baby", "Baby", "Health & Music", "Computers", "Games", "Home"];
            shuffle($names);
            shuffle($last_names);
            shuffle($phone_numbers);
            shuffle($emails);
            shuffle($departments);
          ?>
          <td><a href="#"><?php echo uniqid(); ?></a></td>
          <td><a href="#"><?php echo $names[0].' '.$last_names[0]; ?></a></td>
          <td><a href="#"><?php echo strtolower($names[0]).$emails[0]; ?></a></td>
          <td><a href="#"><?php echo $phone_numbers[0]; ?></a></td>
          <td><a href="#"><?php echo $departments[0]; ?></a></td>

          <td><a href="/calls/<?php echo $i + 1; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php'; ?>
