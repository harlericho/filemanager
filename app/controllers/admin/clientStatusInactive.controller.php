<?php
require "../../models/client/client.model.php";
$client = new Client();
$result = $client->statusClientInactive($_POST['id']);
echo json_encode($result);
