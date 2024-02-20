<?php

namespace Dell\Codephp\Models;

use Dell\Codephp\Commons\Model;

class Category extends Model
{
    public function getAll()
    {
        try {
            $sql = 'select * from categories';
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
            $sql = 'select * from categories where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function insert($name, $description, $thumbnail, $status)
    {
        try {
            $sql = 'INSERT INTO categories(name,description,thumbnail,status) 
            VALUES(:name,:description,:thumbnail,:status)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':thumbnail', $thumbnail);
            $stmt->bindParam(':status', $status);
            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERRRRR' . $e->getMessage();
            die;
        }
    }
    public function update($id, $name, $thumbnail, $description, $status)
    {
        try {
            $sql = 'update categories set 
            name=:name,thumbnail=:thumbnail,description=:description,status=:status
            where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':thumbnail', $thumbnail);
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
            $sql = 'delete from categories where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
}
