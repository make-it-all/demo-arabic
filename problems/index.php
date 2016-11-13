<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Index</title>
    <link rel="stylesheet" href="/assets/stylesheets/css/application.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/assets/javascripts/application.js"></script>
    <script src="/assets/javascripts/chosen.js"></script>
  </head>
  <body>
  <?php require '../partials/_header.php'; ?>
   <div id="page_wrapper">
    <?php require '../partials/_sidebar.php'; ?>

    <div id="page">
      <?php include $_SERVER["DOCUMENT_ROOT"].'/partials/_flash.php'; ?>
      <div id="page_inner">
        <div id="page_head">
          <div id="page_info">
            <h1>136 Problems</h1>
            <div id="page_actions">
              <a href="/problems/new/index.php" class="page_action">New +</a>
            </div>
            <p>29 problems have been solved since last log on
            </p>
            <p>35 problems remain outstanding</p>
          </div>
          <div id="page_filters">
            <!-- <div id="filter_container">
              <div class="filter_group">
                <h4>Type</h4>
                <a href="#" class="active_filter">Hardware</a>
                <a href="#">Software</a>
              </div>
              <div class="filter_group">
                <h4>Completed</h4>
                <a href="#"><i class="fa fa-times"></i></a>
                <a href="#"><i class="fa fa-check"></i></a>
              </div>
            </div> -->
            <div id="search_form">
              <form action="" method="GET">
                <input type="search" name="q[name_or_email_cont]" placeholder="search..."/>
                <input type="submit" value="Search"/>
              </form>
            </div>
          </div>
        </div>
        <div id="page_content">
          <php require $_SERVER['DOCUMENT_ROOT'].'/partials/_pagination.php'; ?>

          <table class="index_table">
            <thead>
              <tr>
                <th class="narrow_column">Type</th>
                <th data-searchable>Description</th>
                <th data-searchable>Keywords</th>
                <th class="orderable orderable-asc"><a href="#">Created At</a></th>
                <th class="narrow_column">Done</th>
                <th class="narrow_column">Edit</th>
                <th class="narrow_column">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php $created_at = 0; ?>
              <?php for($i=0; $i<20; $i++): ?>
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
                  <td><a href="/problems/<?php echo $i + 1; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>
              <?php endfor; ?>
            </tbody>
          </table>
          <div class="pagination pagination--bottom">
            <div class="pagination--links">
              <a href="/problems/" class="pagination--first"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
              <a href="?page=1" class="pagination--prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
              <a href="?page=1" class="pagination--number">1</a>
              <span class="pagination--number pagination--active">2</span>
              <a href="?page=3" class="pagination--number">3</a>
              <a href="?page=4" class="pagination--number">4</a>
              <a href="?page=5" class="pagination--number">5</a>
              <a href="?page=3" class="pagination--next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
              <a href="?page=9" class="pagination--last"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
            </div>
            <div class="pagination--results">
              <p>
                Showing 21-40 of 136
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
