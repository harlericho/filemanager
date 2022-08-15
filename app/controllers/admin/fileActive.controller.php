<?php
require "../../models/admin/file.model.php";
$file = new File();
$result = $file->getAllFileActive();
echo json_encode($result);
