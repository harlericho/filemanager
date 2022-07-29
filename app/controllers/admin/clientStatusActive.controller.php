<?php
require "../../models/client/client.model.php";
$client = new Client();
$result = $client->statusClientActive($_POST['id']);
echo json_encode($result);
