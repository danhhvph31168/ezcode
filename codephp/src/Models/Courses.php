<?php

namespace Dell\Codephp\Models;

use Dell\Codephp\Commons\Model;

class Courses extends Model
{
    public function getAll()
    {
        try {
            $sql = 'select * from courses';
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
            $sql = 'select * from courses where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function insert($name, $price, $thumbnail,$description,$status)
    {
        try {
            $sql = 'INSERT INTO courses(name,price,thumbnail,description,status) 
            VALUES(:name,:price,:thumbnail,:description,:status)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':thumbnail', $thumbnail);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':status', $status);
            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERRRRR' . $e->getMessage();
            die;
        }
    }
    public function update($id, $name, $price, $thumbnail,$description,$status)
    {
        try {
            $sql = 'update courses set 
            name=:name,price=:price,thumbnail=:thumbnail,description=:description,status=:status
            where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':thumbnail', $thumbnail);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':status', $status);
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
    public function LoginAdmin($email, $password){
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
}
