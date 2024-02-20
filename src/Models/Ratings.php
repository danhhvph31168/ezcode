<?php

namespace Dell\Codephp\Models;

use Dell\Codephp\Commons\Model;

class Ratings extends Model
{
    public function getAll()
    {
        try {
            $sql = 'select r.id as id,
            c.id as c_id,
            c.name as c_name,
            u.id as u_id,
            u.username as u_username,
            u.avatar as u_avatar, 
            r.value as r_value,
            r.note as r_note 
            from ratings as r 
            inner join courses as c on c.id=r.course_id 
            inner join users as u on u.id=r.user_id';
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
            $sql = 'select * from ratings where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = 'delete from ratings where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
}
