<?php
// Download file
require "../../models/admin/file.model.php";
if (isset($_GET['id'])) {
  $file = new File();
  $result = $file->getFileId($_GET['id']);
  $filePath = "../../uploads/client/" . $result['file_path'];
  if (file_exists($filePath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filePath));
    readfile($filePath);
    echo 1;
  }
  echo 1;
}
