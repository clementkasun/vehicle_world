<?php

namespace App\Repositories\post_review;

interface PostReviewInterface {
    public function indexData();
    public function createPostReview($request);
    public function updatePostReview($request);
    public function deletePostReview($id);
    public function getPostReviewItem($id);
    public function getPostReviews();
}

?>