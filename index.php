<?php

session_start();

if (isset($_SESSION['logged_in'])) {
  include $_SESSION['logged_in'] . '_dashboard.php';
} else {
  include 'session/_form.php';
}
