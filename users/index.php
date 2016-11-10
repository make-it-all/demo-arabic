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
            <h1>30 Users</h1>
            <div id="page_actions">
              <a href="/users/new/index.php" class="page_action">New</a>
              <a href="#" class="page_action">Another Link</a>
            </div>
            <p>Here you can view and manage users. Plus some other help text, hello
            </p>
            <p>Maybe even another paragraph worth. Bored of writing text now but you get the idea...</p>
          </div>
          <div id="page_filters">
            <div id="search_form">
              <form action="" method="GET">
                <input type="search" name="q[name_or_email_cont]" placeholder="search..."/>
                <input type="submit" value="Search"/>
              </form>
            </div>
          </div>
        </div>
        <div id="page_content">
          <table class="index_table">
            <thead>
              <tr>
                <th class="narrow_column"><input type="checkbox" /></th>
                <th class="main_column"><a href="#">Name</a><i class="fa fa-sort-desc column_sort_indicator" aria-hidden="true"></i></th>
                <th><a href="#">Email</a></th>
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
      </div>
    </div>
  </body>
</html>
