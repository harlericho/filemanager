<?php
class Connection
{
  private $host = 'localhost';
  private $user = 'postgres';
  private $pass = 'postgres';
  private $dbname = 'postgres_filemanager';
  private $port = '5432';
  private $driver = 'pgsql';
  private $dsn;
  private $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
  ];
  private $pdo;
  public function __construct()
  {
    $this->dsn = $this->driver . ':host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname;
    $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->options);
  }
  public function getPdo()
  {
    return $this->pdo;
  }
}
