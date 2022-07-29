<?php
require "../../models/client/client.model.php";
$client = new Client();
$result = $client->getAllClientInactive();
echo json_encode($result);