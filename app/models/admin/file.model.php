<?php
require "../../config/connection.config.php";
class File extends Connection
{
  public function __construct()
  {
    parent::__construct();
  }
  public function getAll()
  {
    try {
      $sql = "SELECT * FROM tbl_file";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function getAllFileActive()
  {
    try {
      $sql = "SELECT * FROM tbl_file f JOIN tbl_user u on f.file_user_id=u.user_id WHERE f.file_status = 1";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $result[] = array(
          "file_id" => $row["file_id"],
          "user_email" => $row["user_email"],
          "file_name" => $row["file_name"],
          "file_size" => $row["file_size"],
          "file_type" => $row["file_type"],
          "file_created_at" => $row["file_created_at"],
          "file_updated_at" => $row["file_updated_at"]
        );
      }
      if (!empty($result)) {
        return $result;
      }
      return 0;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function getAllFileInactive()
  {
    try {
      $sql = "SELECT * FROM tbl_file f JOIN tbl_user u on f.file_user_id=u.user_id WHERE f.file_status = 0";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      while ($row = $stmt->fetch()) {
        $result[] = array(
          "file_id" => $row["file_id"],
          "user_email" => $row["user_email"],
          "file_name" => $row["file_name"],
          "file_size" => $row["file_size"],
          "file_type" => $row["file_type"],
          "file_created_at" => $row["file_created_at"],
          "file_updated_at" => $row["file_updated_at"]
        );
      }
      if (!empty($result)) {
        return $result;
      }
      return 0;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function getAllFileClient($id)
  {
    try {
      $sql = "SELECT * FROM tbl_file f JOIN tbl_user u on f.file_user_id=u.user_id WHERE f.file_status = 1 AND f.file_user_id = :id";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function countFile($id)
  {
    try {
      $sql = "SELECT COUNT(*) AS total FROM tbl_file WHERE file_user_id=:file_user_id";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(":file_user_id", $id);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function countFileAdmin()
  {
    try {
      $sql = "SELECT COUNT(*) AS total FROM tbl_file";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function uploadFile($data)
  {
    try {
      $sql = "INSERT INTO tbl_file (file_name,file_path,file_size,file_type,file_user_id) VALUES (:file_name,:file_path,:file_size,:file_type,:file_user_id)";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(":file_name", $data["file_name"]);
      $stmt->bindParam(":file_path", $data["file_path"]);
      $stmt->bindParam(":file_size", $data["file_size"]);
      $stmt->bindParam(":file_type", $data["file_type"]);
      $stmt->bindParam(":file_user_id", $data["file_user_id"]);
      $stmt->execute();
      return true;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function getFileId($id)
  {
    try {
      $sql = "SELECT * FROM tbl_file WHERE file_id = :id";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
      $result = $stmt->fetch();
      return $result;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
  public function inactiveFileId($id)
  {
    try {
      $sql = "UPDATE tbl_file SET file_status = 0 WHERE file_id = :id";
      $stmt = $this->getPdo()->prepare($sql);
      $stmt->bindParam(":id", $id);
      $stmt->execute();
      return true;
    } catch (\Throwable $th) {
      return $th->getMessage();
    }
  }
}
