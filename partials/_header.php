<div id="title_bar">
  <div id="app_logo">
    <img src="/assets/images/logo.jpg" alt="logo" />
  </div>
  <div class="flex-spacer"></div>
  <div id="user_section">
    وقعت في مثل
    <b>
    <?php
      (session_status() == PHP_SESSION_NONE) ? session_start() : '';
      if (isset($_SESSION['logged_in'])) {
        switch ($_SESSION['logged_in']) {
        case 'boss':
          echo 'James Boss';
          break;
        case 'helpdesk':
        echo 'Alice Help';
          break;
        case 'specialist':
          echo 'Pauline Keeths';
          break;
        default:
          echo 'John Gorg';
        }
      }
    ?>
    </b>
    -
    <a href="/session/logout.php">تسجيل الخرو</a>
  </div>
</div>
