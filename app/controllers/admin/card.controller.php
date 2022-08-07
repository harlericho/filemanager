<?php
require "../../models/client/client.model.php";
$client = new Client();
$result = $client->countUsers();
echo json_encode($result);
