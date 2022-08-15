<?php
require "../../models/client/client.model.php";
session_start();
$arrayName = array(
  'user_email' => $_POST['email'],
  'user_password' => $_POST['password']
);
$client = new Client();
$result = $client->getDataParamsAdmin($arrayName);
if ($result) {
  $_SESSION['user_email'] = $result['user_email'];
  $_SESSION['user_id'] = $result['user_id'];
  echo json_encode(true);
} else {
  echo json_encode(false);
}
