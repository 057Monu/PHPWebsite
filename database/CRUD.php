<?php

class CRUD{

    private $db;

    public function __construct($conn){
        $this->db = $conn;
    }

   // Insert
    public function insert($username, $password, $email, $gender){
        try {

            $result = $this->getUserByUsername($username);

            if($result['num'] > 0) {
                return false;
            }else {

                $new_passwd = sha1($password.$username);

                $username = strtolower(trim($username));

                $sql = "INSERT INTO User(email, username, password, gender) VALUES (:email, :users, :passwd, :gender)";

                $stmt = $this->db->prepare($sql);

                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":users", $username);
                $stmt->bindParam(":passwd", $new_passwd);
                $stmt->bindParam(":gender", $gender);

                $stmt->execute();

                echo "Hello";

                return true;
            }
        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function getUser($username, $password){
        try{

            $new_passwd = sha1($password.$username);

            $sql = "SELECT * FROM USER WHERE username = :user AND password = :pass";

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':user', $username);
            $stmt->bindParam(':pass', $new_passwd);

            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;

        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function getUserByUsername($username){
        try{
            $sql = "SELECT COUNT(*) AS num FROM USER WHERE username = :user";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':user', $username);

            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;

        }catch(PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}