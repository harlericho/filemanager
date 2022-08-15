<?php
// Upload file
require "../../models/admin/file.model.php";
if (file_exists($_FILES['file']['tmp_name'])) {
  $randomMd5 = substr(md5(uniqid(rand())), 0, 10);
  $fileName = $randomMd5 . "-" . $_FILES['file']['name'];
  $filePath = "../../uploads/client/";
  $targetPath = $filePath . basename($fileName);
  copy($_FILES['file']['tmp_name'], $targetPath);
  $arrayName = array(
    'file_name' => $_POST['name'],
    'file_path' => $fileName,
    'file_type' => $_FILES['file']['type'],
    'file_size' => $_FILES['file']['size'],
    'file_user_id' => $_POST['user_id']
  );
  $file = new File();
  $result = $file->uploadFile($arrayName);
  echo json_encode($result);
}
