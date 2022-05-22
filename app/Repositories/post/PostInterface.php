<?php

namespace App\Repositories\Post;

interface PostInterface {
    public function indexData();
    public function createPost($request);
    public function getAllPost();
    public function showPostProfile($id);
    public function filteredPosts($request);
    public function removePost($id);
    public function postUpdate($request, $id);
    public function removeExpiredPost();
}

?>