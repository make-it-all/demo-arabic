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
                  <td><input type="checkbox" /></td>
                  <td>Henry Morgan</td>
                  <td>henry@morgan.com</td>
                  <?php
                    $roles = ['specialist', 'operator'];
                    shuffle($roles);
                  ?>
                  <td><?php echo implode(', ', array_slice($roles, 0, rand(-1,2))); ?></td>
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
