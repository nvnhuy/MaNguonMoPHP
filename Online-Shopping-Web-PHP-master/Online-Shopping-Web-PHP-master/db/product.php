<?php
class product
{
    public $Id;
    public $Name;
    public $Desc;
    public $Price;
    public $img;

    public function __construct()
    {
    }

    public static function getAllProductts($pdo)
    {
        // $query = ";
        $stmd = $pdo->prepare("SELECT * FROM product");
        if ($stmd->execute()) {
            $stmd->setFetchMode(PDO::FETCH_CLASS, 'product');
            return $stmd->fetchAll();
        }
    }

    public static function getOneByIdd($pdoo, $id)
    {
        $query = "SELECT * FROM product WHERE Id = :id";
        $stmd = $pdoo->prepare($query);
        $stmd->bindValue(':id', $id, PDO::PARAM_INT);
        if ($stmd->execute()) {
            $stmd->setFetchMode(PDO::FETCH_CLASS, 'product');
            return $stmd->fetch();
        }
    }
    public  function create($pdoo)
    {

        $sql = "INSERT INTO watch(Name, Desc, Price, id_cate) VALUES (:Name, :Desc, :Price, :id_cate)";
        $stmt = $pdoo->prepare($sql);
        $stmt->bindValue(':Name', $this->Name, PDO::PARAM_STR);
        $stmt->bindValue(':Desc', $this->Desc, PDO::PARAM_STR);
        $stmt->bindValue(':Price', $this->Price, PDO::PARAM_INT);
        // $stmt->bindValue(':img1', $this->img1, PDO::PARAM_STR);
        if ($stmt->execute()) {
            $this->Id = $pdoo->lastInsertId();
            return true;
        }
    }
    public static function update($Id, $Name, $Descc, $Price, $pdoo)
    {
        $sql = "UPDATE product SET `Name` =:Name, `Descc` =:Descc, `Price` =:Price WHERE Id = :Id";

        // Chuẩn bị câu truy vấn
        $stmt = $pdoo->prepare($sql);

        // Gán giá trị cho các tham số
        $stmt->bindParam(':Id', $Id, PDO::PARAM_INT);
        $stmt->bindParam(':Name', $Name, PDO::PARAM_STR);
        $stmt->bindParam(':Descc', $Descc, PDO::PARAM_STR);
        $stmt->bindParam(':Price', $Price, PDO::PARAM_INT);

        // Thực thi câu truy vấn
        $stmt->execute();
    }
    public static function delete($pdo, $Id)
    {
        $sql = "DELETE FROM `product` WHERE Id=:Id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':Id', $Id, PDO::PARAM_INT);

        // Thực thi câu truy vấn
        $stmt->execute();
    }
}
