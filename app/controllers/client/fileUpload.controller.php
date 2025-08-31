<?php
// Upload file
require "../../models/admin/file.model.php";
if (file_exists($_FILES['file']['tmp_name'])) {
  $randomMd5 = substr(md5(uniqid(rand())), 0, 10);
  $fileName = $randomMd5 . "-" . $_FILES['file']['name'];
  $user_id = $_POST['user_id']; // Asegúrate que este valor viene en el POST
  $filePath = "../../uploads/client/" . $user_id . "/";
  // Crear la carpeta si no existe
  if (!is_dir($filePath)) {
    mkdir($filePath, 0777, true);
  }
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
