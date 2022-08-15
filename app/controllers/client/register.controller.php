<?php
require "../../models/client/client.model.php";
// require "../../config/encryption.config.php";
$arrayName = array(
  'user_names' => $_POST['names'],
  'user_email' => $_POST['email'],
  'user_password' => $_POST['passwordConfirm'],
  'user_rol_id' => 2
);
$client = new Client();
if ($client->dataExisting($_POST['email'])) {
  echo json_encode(false);
} else {
  $result = $client->postData($arrayName);
  echo json_encode($result);
}
