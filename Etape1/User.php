<?php

declare(strict_types = 1);

$host = "localhost";
$username = "root";
$password = "";
$dbname = "classes";

$conn = new mysqli($host, $username, $password, $dbname);

    if($conn->connect_error) {
        die("Echoue : " . $conn->connect_error) ;
    }

$conn->close();

class User 
{  
    private $id;
    public $login;
    public $email;
    public $password;
    public $firstname;
    public $lastname;
    private $db;

    public function __construct($id = null) {
        $conn = new mysqli($host, $username, $password, $dbname);

    }

    //CREATE
    public function register($login, $email, $password, $firstname, $lastname) {
        $sql = "INSERT INTO utilisateurs (login, password, email, firstname, lastname)
                VALUES (:exemple, :exemple1, :exemple2, :James, :Dalin)";

        $stmt = $this->db->prepare($sql);
        $resultats = $stmt->execute([
            "login" => $login,
            "password" => $password,
            "email" => $email,
            "firstname" => $firstname,
            "lastname" => $lastname
        ]);

        if ($resultats) {
            $this->id = $this->db->lastInserId();
            $this->login = $login;
            $this->email = $email;
            $this->password = $password;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
        }

        return $resultats;
    }

    //READ
    public function getUserById($id) {
        $sql = "SELECT * FROM utilisateur WHERE = :id";
    }
}