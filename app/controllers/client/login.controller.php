<?php
require "../../models/client/client.model.php";
require "../../config/encryption.config.php";
$arrayName = array(
  'user_email' => $_POST['email'],
  'user_password' => Encryption::encryptacion($_POST['password'])
);
$client = new Client();
$result = $client->getDataParams($arrayName);
if ($result) {
  echo json_encode(true);
} else {
  echo json_encode(false);
}