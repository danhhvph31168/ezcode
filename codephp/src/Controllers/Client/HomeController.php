<?php

namespace Dell\Codephp\Controllers\Client;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Courses;

class HomeController extends Controller
{
    private Courses $courses;
    public function __construct()
    {
        $this->courses = new Courses();
    }
    public function index()
    {
        $courses = $this->courses->getAll();
        return $this->renderViewClient('home', ['courses' => $courses]);
    }
}
