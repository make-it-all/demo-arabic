<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Manage James Limon</title>
    <link rel="stylesheet" href="/assets/stylesheets/css/application.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="/assets/javascripts/application.js"></script>
    <script src="/assets/javascripts/chosen.js"></script>
  </head>
  <body>
  <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/_header.php'; ?>
   <div id="page_wrapper">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/_sidebar.php'; ?>

    <div id="page">
      <div id="page_inner">
        <div id="page_head">
          <div id="page_info">
            <h1>New User</h1>
            <div id="page_actions">
              <a href="#" class="page_action">View All</a>
            </div>
          </div>
        </div>
        <div id="page_content">

          <?php require $_SERVER['DOCUMENT_ROOT'].'/users/_new_form.php'; ?>

        </div>
      </div>
    </div>
  </body>
</html>
