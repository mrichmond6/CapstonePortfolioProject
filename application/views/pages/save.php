<?php
//application/views/pages/save.php
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
  die();
}
// sanitize the $_POST, save to the database and output a result.
?>