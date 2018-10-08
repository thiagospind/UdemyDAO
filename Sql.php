<?php
/**
 * Created by PhpStorm.
 * User: 00660
 * Date: 08/10/2018
 * Time: 09:00
 */

class Sql extends PDO {
    private $conn;

    public function __construct(string $dsn, string $username, string $passwd)
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=aapvr","root","aapvr");
    }

    public function setParams($statement, $parameters = array()){

        foreach ($parameters as $key => $value){
            $statement->bindParam($key, $value);
        }
    }

    public function setParam($statement, $key, $value){
        $statement->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt->execute();
    }

    public function select($rawQuery, $params = array()){
        $stmt = $this->query($rawQuery,$params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}