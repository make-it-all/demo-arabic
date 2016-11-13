<?php
  $title = 'New Call';
  require $_SERVER['DOCUMENT_ROOT'].'/partials/_head.php'
 ?>

<div id="page_content">


  <form action="/call?flash=Problem+Created" method="POST" class="with_panels">

    <div id="main_form_panel">

      <div class="field">
        <label>Caller</label>
        <input type="search" name="personnel_id" placeholder="Search for personnel">
        <div class="personnel_card_container">
          <div class="personnel_card">
            <a href="#">Change</a>
            <h3>Henry Morgan</h3>
            <p><b>Email:</b> henry.morgan@make.com</p>
            <p><b>Telephone:</b> 07787-123123</p>
          </div>
          <div class="personnel_card">
            <a href="#">Change</a>
            <h3>Henry Morgan</h3>
            <p><b>Email:</b> henry.morgan@make.com</p>
            <p><b>Telephone:</b> 07787-123123</p>
          </div>
          <div class="personnel_card">
            <a href="#">Change</a>
            <h3>Henry Morgan</h3>
            <p><b>Email:</b> henry.morgan@make.com</p>
            <p><b>Telephone:</b> 07787-123123</p>
          </div>
          <div class="personnel_card">
            <a href="#">Change</a>
            <h3>Henry Morgan</h3>
            <p><b>Email:</b> henry.morgan@make.com</p>
            <p><b>Telephone:</b> 07787-123123</p>
          </div>
        </div>
      </div>

      <div class="actions">
        <input type="submit" name="commit" value="Create Problem"/ >
      </div>
    </div>

    <div id="side_form_panel">


      <div class="tabs_container">
        <input type="radio" class="tab_controller" name="tab" id="tab_1" checked>
        <input type="radio" class="tab_controller" name="tab" id="tab_2">
        <div class="tab_heads_container">
          <label for="tab_1">Add Problem</label>
          <label for="tab_2">Problems</label>
        </div>
        <div class="tab_panels_container">
          <div class="tab_panel">
            <div class="field">
              <label for="new_description">Description</label>
              <textarea name="new_descriptions" id="new_description"></textarea>
            </div>
          <div class="tab_panel">
            <div class="field">
              <label for="new_description">Description</label>
              <textarea name="new_descriptions" id="new_description"></textarea>
            </div>
            <div class="field">
              <label for="new_key_words">Key words</label>
              <input type="text" name="new_key_words" id="new_key_words" />
            </div>
          </div>
          <div class="tab_panel">
            <table class="index_table">
              <thead>
                <tr>
                  <th class="narrow_column">Type</th>
                  <th data-searchable>Description</th>
                  <th data-searchable>Keywords</th>
                  <th class="narrow_column">Completed</th>
                  <th class="narrow_column">Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php $created_at = 0; ?>
                <?php for($i=0; $i<3; $i++): ?>
                  <tr>

                    <td>
                      <?php $x = rand(0,100); if ($x < 35): ?>
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
                      $keywords = ['Microsoft', 'Adobe', 'Apple', 'Blackberry', 'Samsung', 'Linux', 'Word', 'Excel', 'Flash', 'Photoshop', 'Outlook', 'Powerpoint', 'Illistator', 'Stuck', 'Not Starting', 'Black', 'Jammed', 'Off', 'On', 'White', 'Missing', 'Multiple', 'Slow', 'Popup', 'Closing', 'Saving', 'Printing', 'Publishing', 'Opening', 'Deleting', 'Deleted', 'Crashed', 'Fire', 'Locked', 'Password', 'Email', 'Username', 'Forgotten', 'Reset', 'Restart', 'Stop', 'Start'];
                      shuffle($keywords);
                    ?>
                    <td><?php echo implode(', ', array_slice($keywords, 0, rand(1,7))); ?></td>

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
        </div>
      </div>


    </div>

  </form>





</div>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/partials/_foot.php'
?>
