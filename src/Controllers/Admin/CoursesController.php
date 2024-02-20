<?php

namespace Dell\Codephp\Controllers\Admin;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Category;
use Dell\Codephp\Models\Courses;

class CoursesController extends Controller
{
    private Courses $courses;
    private Category $category;
    private string $foder = 'courses.';
    const PATH_UPLOAD = '/uploads/courses/';
    public function __construct()
    {
        $this->courses = new Courses();
        $this->category = new Category();
    }
    public function index()
    {
        $data['category'] = $this->category->getAll();
        if (!empty($_POST)) {
            if (isset($_POST['name'])) {
                $name = $_POST['name'];
                // debug($name);
                $data['courses'] = $this->courses->seachName($name);
            }
            if (isset($_POST['idcate'])) {
                $idcate = $_POST['idcate'];
                $data['courses'] = $this->courses->seachIdcate($idcate);
            }
        } else {
            $data['courses'] = $this->courses->getAll();
            // header("Location: /admin/courses");
        }
        // $data['category'] = $this->category->getAll();
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
            $idcate = $_POST['idcate'];
            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = null;
            if (!empty($thumbnail)) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = null;
                }
            }
            $this->courses->insert($name, $price, $thumbnailPath, $description, $status, $idcate);
            header('Location: /admin/courses');
            exit();
        }
        $data['category'] = $this->category->getAll();
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            $data
        );
    }
    public function update($id)
    {
        $data['courses'] = $this->courses->getByID($id);
        if (empty($data['courses'])) {
            e404();
        }
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            $idcate = $_POST['idcate'];
            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = $data['courses']['c_thumbnail'];
            $move = false;
            if ($thumbnail) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = $data['courses']['c_thumbnail'];
                } else {
                    $move = true;
                }
            }
            $this->courses->update($id, $name, $price, $thumbnailPath, $description, $status, $idcate);
            if ($move && $data['courses']['c_thumbnail'] && file_exists(PATH_ROOT . $data['courses']['c_thumbnail'])) {
                unlink(PATH_ROOT . $data['courses']['c_thumbnail']);
            }
            $_SESSION['success'] = 'Thao tác thành công!';
            header("Location: /admin/courses/$id/update");
            exit();
        }
        $data['category'] = $this->category->getAll();
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            $data
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
        header('Location: /admin/courses');
        exit();
    }
}
