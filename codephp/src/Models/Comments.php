<?php

namespace Dell\Codephp\Models;

use Dell\Codephp\Commons\Model;

class Comments extends Model
{
    public function getAll()
    {
        try {
            $sql = 'select cm.id as id,
            cm.content as cm_content,
            c.id as c_id,
            c.name as c_name,
            u.id as u_id,
            u.username as u_username,
            u.avatar as u_avatar
            from comments as cm
            inner join courses as c on c.id=cm.course_id
            inner join users as u on u.id=cm.user_id';
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
            $sql = 'select * from comments where id=:id';
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
            $sql = 'delete from comments where id=:id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (\PDOException $e) {
            $e->getMessage();
            die;
        }
    }
}
