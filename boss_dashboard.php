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
  <?php require 'partials/_header.php'; ?>
   <div id="page_wrapper">
    <?php require 'partials/_sidebar.php'; ?>

    <div id="page">
      <?php if (isset($_GET['flash'])): ?>
        <div id="flash_messages">
          <div class="flash_message">
            <?php echo $_GET['flash']; ?>
            <i class="fa fa-times" aria-hidden="true"></i>
          </div>
        </div>
      <?php endif; ?>
      <div id="page_inner">
        <div id="page_head">
          <div id="page_info">
            <h1>Welcome, Micheal Boss</h1>
            <p>
              Stuff has gone on:
            </p>
            <ul>
              <li>4 Problems have had follow up added.</li>
              <li>2 Problems have been completed.</li>
              <li>7 Calls have been made about problems you created.</li>
            </ul>
          </div>
        </div>
        <div id="page_content">

          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_new_calls_graph.php'; ?>
          <?php require $_SERVER['DOCUMENT_ROOT'].'/partials/graphs/_distribution_of_problem_types_graph.php'; ?>

        </div>
      </div>
    </div>
  </body>
</html>
