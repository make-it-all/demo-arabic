<?php
  $title='Call Index';
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
 ?>
<div id="page_content">
  <table class="index_table">
    <thead>
      <tr>
        <th class="narrow_column"></th>
        <th data-searchable>Caller</th>
        <th data-searchable>Contact Number</th>
        <th data-searchable>Operator</th>
        <th data-searchable>Notes</th>
        <th class="orderable orderable-asc"><a href="#">Received At</a></th>
        <th class="narrow_column">Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php $created_at = 0; ?>
      <?php for($i=0; $i<10; $i++): ?>
        <tr>

          <td>

          </td>


          <?php
            $names = ["Michael", "James", "John", "Robert", "David", "William", "Mary", "Christopher", "Joseph", "Richard", "Daniel", "Thomas", "Matthew", "Jennifer", "Charles", "Anthony", "Patricia", "Linda", "Mark", "Elizabeth", "Joshua", "Steven", "Andrew", "Kevin", "Brian", "Barbara", "Jessica", "Jason", "Susan", "Timothy", "Paul", "Kenneth", "Lisa", "Ryan", "Sarah", "Karen", "Jeffrey", "Donald", "Ashley", "Eric"];
            $phone_numbers = ["892.028.8222", "1-871-522-0673 x09139", "(531) 769-3180 x39359", "691-019-3179", "(741) 472-1254", "1-984-504-5904 x612", "720-497-9639", "1-706-040-7250 x642", "(597) 762-4437 x20856", "821-588-0033 x83893", "1-610-131-5395 x617", "(492) 478-5225", "378.842.0673", "325.931.5697 x88342", "1-484-886-0437 x865", "659-077-7489", "(916) 512-5165", "876.000.1119 x64166", "292-195-0849", "561-524-9364", "196.693.4749 x99719", "515-206-4912 x2404", "873.095.0870 x198", "646.935.7280", "840-032-2821", "1-989-139-1657", "(684) 537-2297", "118-179-5197 x75781", "(959) 549-4142 x22189", "1-128-098-6323", "(253) 317-3412", "(404) 312-2373", "168-186-6217 x803", "(540) 543-5513 x333", "552.866.6406", "843-148-1288", "593.227.7499 x1490", "1-257-459-6203 x342", "182.078.4299", "642.879.0017"];
            shuffle($names);
            shuffle($phone_numbers);
          ?>
          <td><a href="#"><?php echo $names[0]; ?></a></td>
          <td><a href="#"><?php echo $phone_numbers[0]; ?></a></td>
          <td><?php echo $names[1]; ?></td>

          <?php
          $words = ['bacon', 'ipsum', 'dolor', 'amet', 'capicola', 'in', 'quis', 'flank', 'laborum', 'nostrud', 'commodo', 'cil'];
          shuffle($words);
          ?>
          <td><a href="#"><?php echo implode(' ', array_slice($words, 0, rand(5,12))); ?>...</a></td>

          <td>
            <?php $created_at += rand(10, 50); ?>
            <?php if ($created_at < 60): ?>
              <?php echo $created_at; ?> minutes ago
            <?php else: ?>
              <?php if (floor($created_at/60) == 1): ?>
                <?php echo floor($created_at/60); ?> hour ago
              <?php else: ?>
                <?php echo floor($created_at/60); ?> hours ago
              <?php endif; ?>
            <?php endif;?>
          </td>

          <td><a href="/calls/<?php echo $i + 1; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php'; ?>
