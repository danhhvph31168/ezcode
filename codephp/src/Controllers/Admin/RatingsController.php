<?php

namespace Dell\Codephp\Controllers\Admin;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Ratings;

class RatingsController extends Controller
{
    private Ratings $ratings;
    private string $foder = 'ratings.';
    public function __construct()
    {
        $this->ratings = new Ratings();
    }
    public function index()
    {
        $data['ratings'] = $this->ratings->getAll();
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            $data
        );
    }
    public function delete($id)
    {
        $ratings = $this->ratings->getByID($id);
        if (empty($ratings)) {
            e404();
        }
        $this->ratings->delete($ratings['id']);
        header('Location: /codephp/admin/ratings');
        exit();
    }
}
