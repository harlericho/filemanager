<?php
require "../../models/admin/rol.model.php";
$rol = new Rol();
$result = $rol->getAll();
echo json_encode($result);