<?php
  $title='Call Index';
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php';
 ?>
<div id="page_content">
  <table class="index_table">
    <thead>
      <tr>
        <th class="narrow_column">Type</th>
        <th data-searchable>Description</th>
        <th data-searchable>Keywords</th>
        <th class="orderable orderable-asc"><a href="#">Created At</a></th>
        <th class="narrow_column">Completed</th>
        <th class="narrow_column">Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php $created_at = 0; ?>
      <?php for($i=0; $i<20; $i++): ?>
        <tr>

          <td>
            <?php if (rand(0, 1) == 0): ?>
              <i class="fa fa-file-code-o" aria-hidden="true"></i>
            <?php else: ?>
              <i class="fa fa-desktop" aria-hidden="true"></i>
            <?php endif; ?>
          </td>

          <?php
            $words = ['bacon', 'ipsum', 'dolor', 'amet', 'capicola', 'in', 'quis', 'flank', 'laborum', 'nostrud', 'commodo', 'cil'];
            shuffle($words);
          ?>
          <td><a href="#"><?php echo implode(' ', array_slice($words, 0, rand(5,12))); ?>...</a></td>

          <?php
            $keywords = ['Microsoft', 'Adobe', 'Apple', 'Blackberry', 'Samsung', 'Linux', 'Word', 'Excel', 'Flash', 'Photoshop', 'Outlook', 'Powerpoint', 'Illistator', 'Stuck', 'Not Starting', 'Black', 'Jammed', 'Off', 'On', 'White', 'Missing', 'Multiple', 'Slow', 'Popup', 'Closing', 'Saving', 'Printing', 'Publishing', 'Opening', 'Deleting', 'Deleted', 'Crashed', 'Fire', 'Locked', 'Password', 'Email', 'Username', 'Forgotten', 'Reset', 'Restart', 'Stop', 'Start'];
            shuffle($keywords);
          ?>
          <td><?php echo implode(', ', array_slice($keywords, 0, rand(1,7))); ?></td>

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

          <td>
            <?php if (rand(0, 1) == 0): ?>
              <i class="fa fa-times bad" aria-hidden="true"></i>
            <?php else: ?>
              <i class="fa fa-check good" aria-hidden="true"></i>
            <?php endif; ?>
          </td>
          <td><a href="/problems/<?php echo $i + 1; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php'; ?>
      
