<?php
require "../../models/admin/file.model.php";
$file = new File();
// session
session_start();
if (isset($_SESSION["user_id"])) {
  $user_id = $_SESSION["user_id"];
} else {
  $user_id = 0;
}
$result = $file->getAllFileClient($user_id);
echo json_encode($result);
