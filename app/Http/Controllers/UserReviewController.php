<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\post_review\PostReviewRepository;

class UserReviewController extends Controller
{
    private $postReviewRepository;

    function __construct(PostReviewRepository $postReviewRepository)
    {
        $this->postReviewRepository = $postReviewRepository;
    }

    public function create_post_review(Request $request)
    {
        return $this->postReviewRepository->createPostReview($request);
    }

    public function update_post_review(Request $request, $id)
    {
        return $this->postReviewRepository->updatePostReview($request, $id);
    }

    public function delete_post_review($id)
    {
        return $this->postReviewRepository->deletePostReview($id);
    }

    public function get_post_review_item($id)
    {
        return $this->postReviewRepository->getPostReviewItem($id);
    }

    public function get_post_reviews()
    {
        return $this->postReviewRepository->getPostReviews();
    }
}
