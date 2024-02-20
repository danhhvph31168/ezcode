<?php

namespace Dell\Codephp\Controllers\Client;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Category;
use Dell\Codephp\Models\Courses;

class HomeController extends Controller
{
    private Courses $courses;
    private Category $category;
    public function __construct()
    {
        $this->courses = new Courses();
        $this->category = new Category();
    }
    public function index()
    {
        $courses = $this->courses->getAll();
        $category = $this->category->getAll();
        return $this->renderViewClient('home', ['courses' => $courses, 'category' => $category]);
    }
}
