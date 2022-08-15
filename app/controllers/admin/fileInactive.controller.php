<?php
require "../../models/admin/file.model.php";
$file = new File();
$result = $file->getAllFileInactive();
echo json_encode($result);
