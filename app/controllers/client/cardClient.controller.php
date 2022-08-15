<?php
require "../../models/client/client.model.php";
$client = new Client();
$result = $client->countUsers()['total'];
echo json_encode($result);
