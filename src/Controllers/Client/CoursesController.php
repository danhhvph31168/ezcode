<?php

namespace Dell\Codephp\Controllers\Client;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Category;
use Dell\Codephp\Models\Courses;

class CoursesController extends Controller
{
    private Courses $courses;
    private Category $category;

    public function __construct()
    {
        $this->courses = new Courses();
        $this->category = new Category();
    }
    public function show($id)
    {
        $category = $this->category->getAll();
        $courses = $this->courses->getByID($id);
        return $this->renderViewClient('showcourses', ['courses' => $courses, 'category' => $category]);
    }
    public function categoriescourses($idcate)
    {
        $category = $this->category->getAll();
        $courses = $this->courses->seachIdcate($idcate);
        return $this->renderViewClient('categoriescourses', ['courses' => $courses, 'category' => $category]);
    }
}
