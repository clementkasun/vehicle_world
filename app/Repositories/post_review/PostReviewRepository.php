<?php

namespace App\Repositories\post_review;

use App\Repositories\post_review\PostReviewInterface;
use App\Models\UserReview;

class PostReviewRepository implements PostReviewInterface
{
    public function indexData()
    {
        return view('post_reviews');
    }

    public function createPostReview($request)
    {
        $user_id = 1;
        $post_review = UserReview::create([
            'user_id' => $user_id,
            'post_id' => $request->post_id,
            'review_desc' => $request->user_review,
            'user_star' => $request->user_star,
            'created_at' => now(),
        ]);

        if($post_review == true){
            return array('status' => 1, 'msg' => 'Successfully save the review to the system!');
        }else{
            return array('status' => 0, 'msg' => 'Review saving was unsuccessful!');
        }
    }

    public function updatePostReview($request)
    {
        $user_id = 1;
        $post_review = UserReview::find($request->post_id);
        $post_review->user_id = $user_id;
        $post_review->review_desc = $request->user_review;
        $post_review->user_star = $request->user_star;
        $post_review->updated_at = now();
        $post_review->save();

        if($post_review == true){
            return array('status' => 1, 'msg' => 'Successfully updated the review to the system!');
        }else{
            return array('status' => 0, 'msg' => 'Review updating was unsuccessful!');
        }
    }
    
    public function getPostReviewItem($id)
    {
        
        $post_review = UserReview::find($id);
        return $post_review;
        
    }
    
    public function deletePostReview($id)
    {
        
        $post_review = UserReview::find($id);
        $post_review->delete();
        
        if($post_review == true){
            return array('status' => 1, 'msg' => 'Successfully deleted the review to the system!');
        }else{
            return array('status' => 1, 'msg' => 'Post review deletion was unsuccessful!');
        }
        
    }

    public function getPostReviews()
    {
        $post_reviews = UserReview::with('User')->get();
        return $post_reviews;
    }


}