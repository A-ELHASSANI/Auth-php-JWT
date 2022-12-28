<?php

class User
{
    private $conn;
    private $table_name = "clients_sites_personnels";

    public $login;
    public $mdp;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function create()
    {
      

        $query = "INSERT INTO " . $this->table_name . "
                SET
                    login = ?,
                    mdp = ?";

        $stmt = $this->conn->prepare($query);
        $this->login = htmlspecialchars(strip_tags($this->login));
        $this->mdp = htmlspecialchars(strip_tags($this->mdp));

    //     $stmt->bindParam(":login", $this->login);

    //     $password_hash = password_hash($this->mdp, PASSWORD_BCRYPT);
    //     $stmt->bindParam(":mdp", $password_hash);

    //    $stmt->execute();        

        $stmt->bindParam(1, $this->login);
        $stmt->bindParam(2, $this->mdp);
        $stmt->execute();
        // return false;
    }

function emailExists() {
 
    $query = "SELECT login,mdp 
            FROM " . $this->table_name . "
            WHERE login = ?
            LIMIT 0,1";
 
    $stmt = $this->conn->prepare($query);
 
    $this->login=htmlspecialchars(strip_tags($this->login));
 
    $stmt->bindParam(1, $this->login);
 
    $stmt->execute();
 
    $num = $stmt->rowCount();
    if ($num > 0) {
 
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
 
        $this->login= $row['login'];
        $this->mdp = $row['mdp'];
 
        return true;
    }
     return false;
}
 
}
