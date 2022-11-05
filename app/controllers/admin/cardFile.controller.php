<?php
require "../../models/admin/file.model.php";
session_start();
$file = new File();
if ($_SESSION["user_id"] == 1) {
  $result = $file->countFileAdmin()['total'];
} else {
  $result = $file->countFile($_SESSION['user_id'])['total'];
}
echo json_encode($result);
