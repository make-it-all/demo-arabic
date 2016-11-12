<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php if (isset($title)): ?>
      <title><?php echo $title; ?></title>
    <?php endif; ?>
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
          <?php if (file_exists('_index_page_info.php')): ?>
            <div id="page_info">
              <?php include '_index_page_info.php'; ?>
            </div>
          <?php endif; ?>
          <?php if (file_exists('_index_page_filters.php')): ?>
            <div id="page_filters">
              <?php include '_index_page_filters.php'; ?>
            </div>
          <?php endif; ?>
        </div>
