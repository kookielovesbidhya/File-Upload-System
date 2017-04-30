<?php
  include '../setting.php';

  class DB{
    private $conn;
    private $host;
    private $user;
    private $db;
    private $password;
    private $obj;

    public function __construct() {
      $this->conn = false;
      $this->host = $GLOBALS['dbhost'];
      $this->user = $GLOBALS['dbuser'];
      $this->db = $GLOBALS['dbname'] ;
      $this->password = $GLOBALS['dbpass'];
      return($this->connect());
    }

    public function __destruct() {
      if($this->conn)
        $this->conn = null;
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

    //returns DB conncetion.
    public function getMyDb() {
      if($this->conn instanceof PDO) {
        return $this->conn;
      }
    }
}
 ?>
