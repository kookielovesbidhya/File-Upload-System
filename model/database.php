<?php
  //include '../setting.php';

    class DBase {
    private $conn;
    private $host;
    private $user;
    private $db;
    private $password;

    public function __construct() {
      $ini_array = parse_ini_file("../sql.ini");
      $this->host = $ini_array['DB_host'];
      $this->user = $ini_array['DB_USER'];
      $this->db = $ini_array['DB'] ;
      $this->password = $ini_array['DB_PASS'];
      $this->conn = $this->connect();
      return $this->conn;
    }

    //Connects to database using PDO
    public function connect(){
      if (!$this->conn) {
        try {
          $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db.'', $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        }
        catch (Exception $e) {
          die('Erreur : ' . $e->getMessage());
        }

        if (!$this->conn) {
          $this->status_fatal = true;
          echo 'Connection BDD failed';
          die();
        }
        else {
          $this->status_fatal = false;
        }
      }
    return $this->conn;
    }

    public function getMyDb()
    {
      return $this->conn;
    }
}
 ?>
