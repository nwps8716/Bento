<?php
class Bentodb {

    public $dbcon;
    public $dbpdo;


    public function __construct()
    {
        $this->dbpdo = new myPDO();
        $this->dbcon = $this->dbpdo->getConnection();
    }

    public function getUserData($userName)
    {
        $sql = "SELECT * FROM `UserData` WHERE `userName` = :userName";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':userName', $userName);

        $stmt->execute();

        $result = $stmt->fetch();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function insertUserData($userName, $passWord)
    {
        $sql = "INSERT INTO `UserData`(`userName`, `passWord`) VALUES (:userName, :passWord)";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':userName', $userName);
        $stmt->bindValue(':passWord', $passWord);

        $result = $stmt->execute();

    	$this->dbpdo->closeConnection();

        return $result;
    }

    public function checkUserData($userName, $passWord)
    {
        $sql = "SELECT * FROM `UserData` WHERE `userName` = :userName AND `passWord` = :passWord";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':userName', $userName);
        $stmt->bindValue(':passWord', $passWord);

        $stmt->execute();

        $result = $stmt->fetch();
        $this->dbpdo->closeConnection();

        return $result[1];
    }
}
