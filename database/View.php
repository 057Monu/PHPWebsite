<?php

class View {

    private $view;

    public function __construct($conn){
        $this->view = $conn;
    }

    public function myView($uid){
        try{
            $sql = "SELECT * FROM DATA WHERE DID = :uid";

            $stmt = $this->view->prepare($sql);

            $stmt->bindParam(":uid", $uid);

            $stmt->execute();

            $result_Set = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result_Set;

        }catch (PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    public function allView(){
        try{
            $sql = "SELECT * FROM DATA";

            $result = $this->view->query($sql);

            return $result;

        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
}