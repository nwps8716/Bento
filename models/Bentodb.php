<?php
class Bentodb
{
    public $dbcon;
    public $dbpdo;

    public function __construct()
    {
        $this->dbpdo = new myPDO();
        $this->dbcon = $this->dbpdo->getConnection();
    }

    public function getUserName($userName)
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
        $sql = "INSERT INTO `UserData` (`userName`, `passWord`) VALUES (:userName, :passWord)";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':userName', $userName);
        $stmt->bindValue(':passWord', $passWord);

        $result = $stmt->execute();

    	$this->dbpdo->closeConnection();

        return $result;
    }

    public function checkUserData($userName, $passWord, $level)
    {
        $sql = "SELECT * FROM `UserData` WHERE `userName` = :userName AND `passWord` = :passWord AND `level` = :level";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':userName', $userName);
        $stmt->bindValue(':passWord', $passWord);
        $stmt->bindValue(':level', $level);

        $stmt->execute();

        $result = $stmt->fetch();
        $this->dbpdo->closeConnection();

        return $result;  //回傳使用者帳號
    }

    public function insertShopData($userId, $shopName, $shopAddress, $shopPhone)
    {
        $sql = "INSERT INTO `ShopData` (`userId`, `shopName`, `shopAddress`, `shopPhone`) VALUES (:userId, :shopName, :shopAddress, :shopPhone)";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':userId', $userId);
        $stmt->bindValue(':shopName', $shopName);
        $stmt->bindValue(':shopAddress', $shopAddress);
        $stmt->bindValue(':shopPhone', $shopPhone);

        $result = $stmt->execute();

    	$this->dbpdo->closeConnection();

        return $result;
    }

    public function insertShopMenu($shopName, $item, $price)
    {
        $sql = "INSERT INTO `ShopMenu` (`shopName`, `item`, `price`) VALUES (:shopName, :item, :price)";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':shopName', $shopName);
        $stmt->bindValue(':item', $item);
        $stmt->bindValue(':price', $price);

        $result = $stmt->execute();

    	$this->dbpdo->closeConnection();

        return $result;
    }

    //單獨抓shopName的部分回傳function newOrderPage()
    public function getShopName()
    {
        $sql = "SELECT `shopName` FROM `ShopData`";
        $stmt = $this->dbcon->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function getShopPhone($shopName)
    {
        $sql = "SELECT * FROM `ShopData` WHERE `shopName` = :shopName";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':shopName', $shopName);

        $stmt->execute();

        $result = $stmt->fetch();
        $this->dbpdo->closeConnection();

        return $result[4];
    }

    public function checkRepeatShop($shopName, $shopAddress, $shopPhone)
    {
        $sql = "SELECT * FROM `ShopData` WHERE `shopName` = :shopName OR `shopAddress` = :shopAddress OR `shopPhone` = :shopPhone";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':shopName', $shopName);
        $stmt->bindValue(':shopAddress', $shopAddress);
        $stmt->bindValue(':shopPhone', $shopPhone);

        $stmt->execute();

        $result = $stmt->fetch();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function insertAllOrder($shopName, $shopPhone, $endTime, $principal, $remark, $userId)
    {
        $sql = "INSERT INTO `AllOrder` (`shopName`, `shopPhone`, `endTime`, `principal`, `remark`, `userId`) VALUES (:shopName, :shopPhone, :endTime, :principal, :remark, :userId)";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':shopName', $shopName);
        $stmt->bindValue(':shopPhone', $shopPhone);
        $stmt->bindValue(':endTime', $endTime);
        $stmt->bindValue(':principal', $principal);
        $stmt->bindValue(':remark', $remark);
        $stmt->bindValue(':userId', $userId);

        $result = $stmt->execute();

    	$this->dbpdo->closeConnection();

        return $result;
    }

    public function checkRepeatOrder($shopName, $principal)
    {
        $sql = "SELECT * FROM `AllOrder` WHERE `shopName` = :shopName AND `principal` = :principal";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':shopName', $shopName);
        $stmt->bindValue(':principal', $principal);

        $stmt->execute();

        $result = $stmt->fetch();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function deleteOrder($orderId, $userId)
    {
        $sql = "DELETE FROM `AllOrder` WHERE `orderId` = :orderId AND `userId` = :userId";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':orderId',$orderId);
        $stmt->bindValue(':userId',$userId);

        $result = $stmt->execute();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function getAllOrder()
    {
        $sql = "SELECT * FROM `AllOrder`";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->execute();

        $result = $stmt->fetchAll();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function getSingleOrder($orderId)
    {
        $sql = "SELECT * FROM `AllOrder` WHERE `orderId` = :orderId";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':orderId', $orderId);

        $stmt->execute();

        $result = $stmt->fetch();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function getShopMenu($shopName)
    {
        $sql = "SELECT * FROM `ShopMenu` WHERE `shopName` = :shopName";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':shopName', $shopName);

        $stmt->execute();

        $result = $stmt->fetchAll();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function getShopMenuById($shopMenuId)
    {
        $sql = "SELECT * FROM `ShopMenu` WHERE `ID` = :shopMenuId";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':shopMenuId', $shopMenuId);

        $stmt->execute();

        $result = $stmt->fetch();
        $this->dbpdo->closeConnection();

        return $result;
    }

    //訂購餐點輸入資料庫
    public function insertPurchaser($orderId, $purchaser, $item, $price, $userId)
    {
        $sql = "INSERT INTO `Purchaser` (`orderId`, `purchaser`, `item`, `price`, `userId`) VALUES (:orderId, :purchaser, :item, :price, :userId)";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':orderId', $orderId);
        $stmt->bindValue(':purchaser', $purchaser);
        $stmt->bindValue(':item', $item);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':userId', $userId);

        $result = $stmt->execute();

    	$this->dbpdo->closeConnection();

        return $result;
    }

    public function selfMeals($orderId, $userId)                                //顯示單筆訂單一般使用者自己的訂餐狀況
    {
        $sql = "SELECT * FROM `Purchaser` WHERE `orderId` = :orderId AND `userId` = :userId";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':orderId', $orderId);
        $stmt->bindValue(':userId', $userId);

        $stmt->execute();

        $result = $stmt->fetchAll();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function orderByPage($orderId, $userId, $start, $per)
    {
        $sql = "SELECT * FROM `Purchaser` WHERE `orderId` = :orderId AND `userId` = :userId ORDER BY `ID` LIMIT :start, :per";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':orderId', $orderId);
        $stmt->bindValue(':userId', $userId);
        $stmt->bindValue(':start', $start, PDO::PARAM_INT);
        $stmt->bindValue(':per', $per, PDO::PARAM_INT);

        $stmt->execute();

        $result = $stmt->fetchAll();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function purchaserByOrderId($orderId)                                //顯示單筆訂單所有使用者的訂餐資料
    {
        $sql = "SELECT * FROM `Purchaser` WHERE `orderId` = :orderId";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':orderId', $orderId);

        $stmt->execute();

        $result = $stmt->fetchAll();
        $this->dbpdo->closeConnection();

        return $result;
    }

    //下面2個函式主要是為了統計餐點個別數量，先取有幾種不同品項，再去個別算數量。
    public function differentItem($orderId)
    {
        $sql = "SELECT distinct `item` FROM `Purchaser` Where `orderId` = :orderId";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':orderId', $orderId);

        $stmt->execute();

        $result = $stmt->fetchAll();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function countByItem($orderId, $item)
    {
        $sql = "SELECT * FROM `Purchaser` WHERE `orderId` = :orderId AND `item` = :item";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':orderId', $orderId);
        $stmt->bindValue(':item', $item);

        $stmt->execute();

        $result = $stmt->fetchAll();
        $this->dbpdo->closeConnection();

        return $result;
    }

    public function deleteSingleItem($singleItemID)                             //餐點取消
    {
        $sql = "DELETE FROM `Purchaser` WHERE `ID` = :singleItemID";
        $stmt = $this->dbcon->prepare($sql);

        $stmt->bindValue(':singleItemID',$singleItemID);

        $result = $stmt->execute();
        $this->dbpdo->closeConnection();

        return $result;
    }
}
