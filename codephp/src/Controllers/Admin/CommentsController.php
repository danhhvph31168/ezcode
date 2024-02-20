<?php

namespace Dell\Codephp\Controllers\Admin;

use Dell\Codephp\Commons\Controller;
use Dell\Codephp\Models\Comments;

class CommentsController extends Controller
{
    private Comments $comments;
    private string $foder = 'comments.';
    // const PATH_UPLOAD = '/uploads/categories/';
    public function __construct()
    {
        $this->comments = new Comments();
    }
    public function index()
    {
        $data['comments'] = $this->comments->getAll();
        return $this->renderViewAdmin(
            $this->foder . __FUNCTION__,
            $data
        );
    }
    public function delete($id)
    {
        $comments = $this->comments->getByID($id);
        if (empty($comments)) {
            e404();
        }
        $this->comments->delete($comments['id']);
        // if (!empty($comments['thumbnail']) && file_exists(PATH_ROOT . $comments['thumbnail'])) {
        //     unlink(PATH_ROOT . $comments['thumbnail']);
        // }
        header('Location: /codephp/admin/comments');
        exit();
    }
}
