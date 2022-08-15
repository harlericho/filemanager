<?php
require "../../models/admin/file.model.php";
$file = new File();
$result = $file->inactiveFileId($_POST["id"]);
echo json_encode($result);
