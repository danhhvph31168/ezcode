<?php

namespace Dell\Codephp\Controllers\Admin;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Courses;

class CoursesController extends Controller
{
    private Courses $courses;
    private string $foder = 'courses.';
    const PATH_UPLOAD = '/uploads/courses/';
    public function __construct()
    {
        $this->courses = new Courses();
    }
    public function index()
    {
        $data['courses'] = $this->courses->getAll();
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            $data
        );
    }
    public function create()
    {
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = null;
            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = null;
                }
            }
            $this->courses->insert($name, $price, $thumbnailPath, $description, $status);
            header('Location: /codephp/admin/courses');
            exit();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__
        );
    }
    public function update($id)
    {
        $courses = $this->courses->getByID($id);
        if (empty($courses)) {
            e404();
        }
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = $courses['thumbnail'];
            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = $courses['thumbnail'];
                }
            }
            $this->courses->update($id, $name, $price, $thumbnailPath, $description, $status);
            $_SESSION['success'] = 'Thao tác thành công!';
            header("Location: /codephp/admin/courses/$id/update");
            exit();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            ['courses' => $courses]
        );
    }
    public function show($id)
    {
        $courses = $this->courses->getByID($id);
        if (empty($courses)) {
            e404();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            ['courses' => $courses]
        );
    }
    public function delete($id)
    {
        $courses = $this->courses->getByID($id);
        if (empty($courses)) {
            e404();
        }
        $this->courses->delete($courses['id']);
        if (!empty($courses['thumbnail']) && file_exists(PATH_ROOT . $courses['thumbnail'])) {
            unlink(PATH_ROOT . $courses['thumbnail']);
        }
        header('Location: /codephp/admin/courses');
        exit();
    }
}
