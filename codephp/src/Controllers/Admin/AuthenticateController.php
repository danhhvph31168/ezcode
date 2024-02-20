<?php

namespace Dell\Codephp\Controllers\Admin;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Courses;

class AuthenticateController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            $_SESSION['errors'] = [];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['errors']['email'] = 'Email không được để trống và không đúng định dạng';
            } else if (empty($password)) {
                $_SESSION['errors']['password'] = 'Password không được để trống';
            } else {
                $user = (new Courses)->LoginAdmin($_POST['email'], $_POST['password']);
                $_SESSION['user'] = $user;
            }

            if (empty($user)) {
                $_SESSION['errors']['not-found'] = 'Người dùng không tồn tại';
            } else {
                if (!empty($_SESSION['user'])) {
                    header("Location: ../admin/courses"); 
                    exit();
                } else {
                    $_SESSION['errors']['not-found'] = 'Email và Password không đúng';
                }
            }
        }
        return $this->renderViewAdmin(__FUNCTION__);
    }
    public function logout()
    {
        session_destroy();
        header('Location: ../auth/login');
        exit();
    }
}
