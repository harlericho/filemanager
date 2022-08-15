<?php
require "../../models/admin/file.model.php";
$file = new File();
$result = $file->countFile()['total'];
echo json_encode($result);
