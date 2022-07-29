<?php
require "../../config/connection.config.php";
class Client extends Connection
{
  public function __construct()
  {
    parent::__construct();
  }
  public function getAll()
  {
    try {
      $sql = "SELECT * FROM tbl_user";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function getAllClientActive()
  {
    try {
      $sql = "SELECT * FROM tbl_user WHERE user_status = 1 AND user_rol_id = 2";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function getAllClientInactive()
  {
    try {
      $sql = "SELECT * FROM tbl_user WHERE user_status = 0 AND user_rol_id = 2";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function statusClientInactive($id)
  {
    try {
      $sql = "UPDATE tbl_user SET user_status = 0, user_updated_at = :user_updated_at  WHERE user_id = :id";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->bindParam(":user_updated_at", date("Y-m-d H:i:s"));
      $stmt->execute();
      return true;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function statusClientActive($id)
  {
    try {
      $sql = "UPDATE tbl_user SET user_status = 1, user_updated_at = :user_updated_at  WHERE user_id = :id";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->bindParam(":user_updated_at", date("Y-m-d H:i:s"));
      $stmt->execute();
      return true;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function getDataParams($data)
  {
    try {
      $sql = "SELECT * FROM tbl_user WHERE user_email = :user_email AND user_password = :user_password AND user_rol_id = 2";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(':user_email', $data['user_email']);
      $stmt->bindParam(':user_password', $data['user_password']);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function dataExisting($email)
  {
    try {
      $sql = "SELECT * FROM tbl_user WHERE user_email = :user_email";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(':user_email', $email);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function postData($data)
  {
    try {
      $sql = "INSERT INTO tbl_user (user_names, user_email, user_password, user_rol_id) VALUES (:user_names, :user_email, :user_password, :user_rol_id)";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(":user_names", $data['user_names']);
      $stmt->bindParam(":user_email", $data['user_email']);
      $stmt->bindParam(":user_password", $data['user_password']);
      $stmt->bindParam(":user_rol_id", $data['user_rol_id']);
      $stmt->execute();
      return true;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
}
