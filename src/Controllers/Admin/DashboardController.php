<?php

namespace Dell\Codephp\Controllers\Admin;

use Dell\Codephp\Commons\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return $this->renderViewAdmin('dashboard');
    }
}
