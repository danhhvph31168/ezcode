<?php

namespace Dell\Codephp\Controllers\Admin;

use DateTime;
use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Users;

class UsersController extends Controller
{
    private Users $users;
    private string $foder = 'users.';
    const PATH_UPLOAD = '/uploads/users/';
    public function __construct()
    {
        $this->users = new Users();
    }
    public function index()
    {
        $data['users'] = $this->users->getAll();
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            $data
        );
    }
    public function create()
    {
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $dob = $_POST['dob'];
            $date = date('Y-m-d', strtotime($dob));
            $tel = $_POST['tel'];
            $address = $_POST['address'];
            $role = $_POST['role'];
            $avatar = $_FILES['avatar'] ?? null;
            $avatarPath = null;
            if (!empty($avatar)) {
                $avatarPath = self::PATH_UPLOAD . time() . $avatar['name'];
                if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                    $avatarPath = null;
                }
            }
            $this->users->insert($username, $fullname, $email, $password, $dob, $avatarPath, $tel, $address, $role);
            header('Location: /admin/users');
            exit();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__
        );
    }
    public function update($id)
    {
        $users = $this->users->getByID($id);
        if (empty($users)) {
            e404();
        }
        if (!empty($_POST)) {
            $username = $_POST['username'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $tel = $_POST['tel'];
            $address = $_POST['address'];
            $avatar = $_FILES['avatar'] ?? null;
            $avatarPath = $users['avatar'];
            $move = false;
            if ($avatar) {
                $avatarPath = self::PATH_UPLOAD . time() . $avatar['name'];
                if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                    $avatarPath = $users['avatar'];
                } else {
                    $move = true;
                }
            }
            $this->users->update($id, $username, $fullname, $email, $password, $avatarPath, $tel, $address);
            if ($move && $users['avatar'] && file_exists(PATH_ROOT . $users['avatar'])) {
                unlink(PATH_ROOT . $users['avatar']);
            }
            $_SESSION['success'] = 'Thao tác thành công!';
            header("Location: /admin/users/$id/update");
            exit();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            ['users' => $users]
        );
    }
    public function show($id)
    {
        $users = $this->users->getByID($id);
        if (empty($users)) {
            e404();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            ['users' => $users]
        );
    }
    public function delete($id)
    {
        $users = $this->users->getByID($id);
        if (empty($users)) {
            e404();
        }
        $this->users->delete($users['id']);
        if (!empty($users['avatar']) && file_exists(PATH_ROOT . $users['avatar'])) {
            unlink(PATH_ROOT . $users['avatar']);
        }
        header('Location: /admin/users');
        exit();
    }
}
