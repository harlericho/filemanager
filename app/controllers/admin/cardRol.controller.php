<?php
require "../../models/admin/rol.model.php";
$rol = new Rol();
$result = $rol->countRol()['total'];
echo json_encode($result);
