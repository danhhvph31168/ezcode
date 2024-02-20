<?php

namespace Dell\Codephp\Controllers\Admin;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Category;

class CategoryController extends Controller
{
    private Category $category;
    private string $foder = 'categories.';
    const PATH_UPLOAD = '/uploads/categories/';
    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        $data['category'] = $this->category->getAll();
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            $data
        );
    }
    public function create()
    {
        if (!empty($_POST)) {
            $name = $_POST['name'];
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
            $this->category->insert($name, $description, $thumbnailPath, $status);
            header('Location: /codephp/admin/categories');
            exit();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__
        );
    }
    public function update($id)
    {
        $category = $this->category->getByID($id);
        if (empty($category)) {
            e404();
        }
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            $thumbnail = $_FILES['thumbnail'] ?? null;
            $thumbnailPath = $category['thumbnail'];
            $move = false;
            if ($thumbnail) {
                $thumbnailPath = self::PATH_UPLOAD . time() . $thumbnail['name'];
                if (!move_uploaded_file($thumbnail['tmp_name'], PATH_ROOT . $thumbnailPath)) {
                    $thumbnailPath = $category['thumbnail'];
                }else{
                    $move=true;
                }
            }
            $this->category->update($id, $name, $thumbnailPath, $description, $status);
            if ($move && $category['thumbnail'] && file_exists(PATH_ROOT . $category['thumbnail'])) {
                unlink(PATH_ROOT . $category['thumbnail']);
            }
            $_SESSION['success'] = 'Thao tác thành công!';
            header("Location: /codephp/admin/categories/$id/update");
            exit();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            ['category' => $category]
        );
    }
    public function show($id)
    {
        $category = $this->category->getByID($id);
        if (empty($category)) {
            e404();
        }
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            ['category' => $category]
        );
    }
    public function delete($id)
    {
        $category = $this->category->getByID($id);
        if (empty($category)) {
            e404();
        }
        $this->category->delete($category['id']);
        if (!empty($category['thumbnail']) && file_exists(PATH_ROOT . $category['thumbnail'])) {
            unlink(PATH_ROOT . $category['thumbnail']);
        }
        header('Location: /codephp/admin/categories');
        exit();
    }
}
