<?php
require "../../config/connection.config.php";
class Rol extends Connection
{
  public function __construct()
  {
    parent::__construct();
  }
  public function getAll()
  {
    try {
      $sql = "SELECT * FROM tbl_rol";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function countRol()
  {
    try {
      $sql = "SELECT COUNT(*) AS total FROM tbl_rol";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
}
