<?php

namespace Dell\Codephp\Models;

use Dell\Codephp\Commons\Model;

class Courses extends Model
{
    public function getAll()
    {
        try {
            $sql = 'select c.id as id,
            c.name as c_name,
            c.price as c_price,
            c.thumbnail as c_thumbnail,
            c.description as c_description,
            c.status as c_status,
            c.total_register as c_total_register,
            ca.id as ca_id,
            ca.name as ca_name
            from courses as c
            inner join categories as ca
            on c.idcate=ca.id';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function getByID($id)
    {
        try {
            $sql = 'select c.id as id,
            c.name as c_name,
            c.price as c_price,
            c.thumbnail as c_thumbnail,
            c.description as c_description,
            c.status as c_status,
            c.total_register as c_total_register,
            ca.id as ca_id,
            ca.name as ca_name 
            from courses as c
            inner join categories as ca
            on c.idcate=ca.id where c.id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function insert($name, $price, $thumbnail, $description, $status, $idcate)
    {
        try {
            $sql = 'INSERT INTO courses(name,price,thumbnail,description,status,idcate) 
            VALUES(:name,:price,:thumbnail,:description,:status,:idcate)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':thumbnail', $thumbnail);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':idcate', $idcate);
            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERRRRR' . $e->getMessage();
            die;
        }
    }
    public function update($id, $name, $price, $thumbnail, $description, $status, $idcate)
    {
        try {
            $sql = 'update courses set 
            name=:name,price=:price,thumbnail=:thumbnail,description=:description,status=:status,idcate=:idcate
            where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':thumbnail', $thumbnail);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':idcate', $idcate);
            $stmt->execute();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = 'delete from courses where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function add($idcate)
    {
        try {
            $sql = 'insert into test(idcate) values(:idcate)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idcate', $idcate);
            $stmt->execute();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function LoginAdmin($email, $password)
    {
        try {
            $sql = 'select * from users where email=:email and password=:password';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function seachIdcate($idcate)
    {
        try {
            $sql = "select c.id as id,
            c.name as c_name,
            c.price as c_price,
            c.thumbnail as c_thumbnail,
            c.description as c_description,
            c.status as c_status,
            c.total_register as c_total_register,
            ca.id as ca_id,
            ca.name as ca_name
            from courses as c
            inner join categories as ca
            on c.idcate=ca.id where idcate=:idcate";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':idcate', $idcate);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function seachName($name)
    {
        try {
            $sql = "select c.id as id,
            c.name as c_name,
            c.price as c_price,
            c.thumbnail as c_thumbnail,
            c.description as c_description,
            c.status as c_status,
            c.total_register as c_total_register,
            ca.id as ca_id,
            ca.name as ca_name
            from courses as c
            inner join categories as ca
            on c.idcate=ca.id where c.name=:name";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
}
