<div id="title_bar">
  <div id="app_logo">
    <img src="/assets/images/logo.jpg" alt="logo" />
  </div>
  <div class="flex-spacer"></div>
  <div id="user_section">
    Signed in as
    <b>
    <?php
      (session_status() == PHP_SESSION_NONE) ? session_start() : '';
      switch ($_SESSION['logged_in']) {
      case 'boss':
        echo 'James Boss';
        break;
      case 'helpdesk':
      echo 'Alice Help';
        break;
      case 'specialist':
        echo 'paul spec';
        break;
      }
    ?>
    </b>
    -
    <a href="session/logout.php">Log out</a>
  </div>
</div>
