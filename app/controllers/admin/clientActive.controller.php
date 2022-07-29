<?php
require "../../models/client/client.model.php";
$client = new Client();
$result = $client->getAllClientActive();
echo json_encode($result);