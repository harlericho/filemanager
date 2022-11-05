<?php
require "../../models/client/client.model.php";
session_start();
$client = new Client();
$result = $client->getAllId($_SESSION['user_id']);
echo json_encode($result);
