<?php
  (session_status() == PHP_SESSION_NONE) ? session_start() : '';
  $boss = false;
  $help = false;
  $spec = false;
  if (isset($_SESSION['logged_in'])) {
    switch ($_SESSION['logged_in']) {
    case 'boss':
      $boss = true;
      break;
    case 'helpdesk':
      $help = true;
      break;
    case 'specialist':
      $spec = true;
      break;
    default:
      $boss = true;
      $help = true;
      $spec = true;
    }
  }
?>
<div id="sidebar">
  <a href="/">Dashboard</a>
  <?php if ($spec): ?>
    <section>
      <h4>Jobs</h4>
      <a href="#">My Jobs</a>
      <a href="#">Unassigned</a>
      <a href="#">Completed</a>
    </section>
  <?php endif; ?>
  <?php if (!$spec): ?>
  <section>
    <h4>Calls</h4>
    <a href="/calls">All</a>
    <a href="/calls/new">New</a>
  </section>
<?php endif; ?>
  <section>
    <h4>Problems</h4>
    <a href="/problems">All</a>
    <a href="/problems/new">New</a>
    <a href="#">Completed</a>
    <a href="#">Outstanding</a>
  </section>
<?php if (!$spec): ?>
  <section>
    <h4>Personnel</h4>
    <a href="/personnels">All</a>
    <a href="/personnels#operators">Operators</a>
    <a href="/personnels#specialists">Specialists</a>
    <a href="/personnels#admins">Admins</a>
  </section>
<?php endif; ?>
  <?php if ($boss): ?>
  <section>
    <h4>Users</h4>
    <a href="/users">All</a>
    <a href="/users?f=operator">Operators</a>
    <a href="/users?f=specialist">Specialists</a>
    <a href="/users?f=admin">Admins</a>
  </section>
  <?php endif; ?>
  <div id="language_selector">
    <input type="checkbox" class="dropdown_controller" id="language_dropdown"/>
    <div class="dropdown_content">
      <div class="dropdown_content"><a href="https://make-it-all-demo-arabic.herokuapp.com"><img src="/assets/images/arabic-flag.png"/>العربية</a></div>
      <div class="dropdown_content"><a href="https://make-it-all-demo-german.herokuapp.com"><img src="/assets/images/german-flag.png"/>Deutsch</a></div>
      <div class="dropdown_content"><a href="https://make-it-all-demo-chinese.herokuapp.com"><img src="/assets/images/chinese-flag.png"/>中文(简体)</a></div>
    </div>
    <label for="language_dropdown"><img src="/assets/images/eng-flag.png"/> English</label>
  </div>
</div>
