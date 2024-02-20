<?php

namespace Dell\Codephp\Models;

use Dell\Codephp\Commons\Model;

class Users extends Model
{
    public function getAll()
    {
        try {
            $sql = 'select * from users';
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
            $sql = 'select * from users where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function insert($username, $fullname, $email,$password,$dob,$avatar,$tel,$address,$role)
    {
        try {
            $sql = 'INSERT INTO users(username,fullname,email,password,dob,avatar,tel,address,role) 
            VALUES(:username,:fullname,:email,:password,:dob,:avatar,:tel,:address,:role)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':avatar', $avatar);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':role', $role);
            $stmt->execute();
        } catch (\PDOException $e) {
            echo 'ERRRRR' . $e->getMessage();
            die;
        }
    }
    public function update($id,$username, $fullname, $email,$password,$avatar,$tel,$address)
    {
        try {
            $sql = 'update users set 
            username=:username,fullname=:fullname,email=:email,
            password=:password,avatar=:avatar,tel=:tel,address=:address
            where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':fullname', $fullname);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':avatar', $avatar);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':address', $address);
            $stmt->execute();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = 'delete from users where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
}
