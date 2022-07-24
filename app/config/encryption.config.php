<?php
define('METHOD', 'AES-256-CBC');
define('SECRET_KEY', '$TiEnDa@2022');
define('SECRET_IV', '909090');
class Encryption
{
  public static function encryptacion($cadena)
  {
      $output = FALSE;
      $key = hash('sha256', SECRET_KEY);
      $iv = substr(hash('sha256', SECRET_IV), 0, 16);
      $output = openssl_encrypt($cadena, METHOD, $key, 0, $iv);
      $output = base64_encode($output);
      return $output;
  }
  public static function desencryptacion($cadena)
  {
      $key = hash('sha256', SECRET_KEY);
      $iv = substr(hash('sha256', SECRET_IV), 0, 16);
      $output = openssl_decrypt(base64_decode($cadena), METHOD, $key, 0, $iv);
      return $output;
  }
}
