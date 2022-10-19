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
        $user_id = $request->user_id;
        $post_review = UserReview::create([
            'user_id' => $user_id,
            'post_id' => $request->post_id,
            'review_desc' => $request->user_review,
            'user_star' => $request->user_star,
            'created_at' => now(),
        ]);

        if ($post_review == true) {
            return array('status' => 1, 'msg' => 'Successfully save the review to the system!');
        } else {
            return array('status' => 0, 'msg' => 'Review saving was unsuccessful!');
        }
    }

    public function updatePostReview($request)
    {
        $user_id = $request->user_id;
        $post_review = UserReview::find($request->post_id);
        $post_review->user_id = $user_id;
        $post_review->review_desc = $request->user_review;
        $post_review->user_star = $request->user_star;
        $post_review->updated_at = now();
        $post_review->save();

        if ($post_review == true) {
            return array('status' => 1, 'msg' => 'Successfully updated the review to the system!');
        } else {
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

        if ($post_review == true) {
            return array('status' => 1, 'msg' => 'Successfully deleted the review to the system!');
        } else {
            return array('status' => 1, 'msg' => 'Post review deletion was unsuccessful!');
        }
    }

    public function getPostReviews($id)
    {
        $post_reviews = UserReview::where('post_id', $id)->with('User')->get();
        return $post_reviews;
    }

    public function calPostReviewAnalytics($id)
    {
        $post_review_count = UserReview::where('post_id', $id)->get()->count();

        $one_stars = UserReview::where('post_id', $id)->where('user_star', 1)->get()->count();
        $one_stars_perc = 0.0;
        if ($one_stars != 0) {
            $one_stars_perc = $one_stars / $post_review_count * 100;
        }
        
        $two_stars = UserReview::where('post_id', $id)->where('user_star', 2)->get()->count();
        $two_stars_perc = 0.0;
        if ($two_stars != 0) {
            $two_stars_perc = $two_stars / $post_review_count * 100;
        }

        $three_stars = UserReview::where('post_id', $id)->where('user_star', 3)->get()->count();
        $three_stars_perc = 0.0;
        if ($three_stars != 0) {
            $three_stars_perc = $three_stars / $post_review_count * 100;
        }

        $four_stars = UserReview::where('post_id', $id)->where('user_star', 4)->get()->count();
        $four_stars_perc = 0.0;
        if ($four_stars != 0) {
            $four_stars_perc = $four_stars / $post_review_count * 100;
        }

        $five_stars = UserReview::where('post_id', $id)->where('user_star', 5)->get()->count();
        $five_stars_perc = 0.0;
        if ($five_stars != 0) {
            $five_stars_perc = $five_stars / $post_review_count * 100;
        }

        $average_star = UserReview::where('post_id', $id)->avg('user_star');

        return array(
            'review_count' => $post_review_count,
            'one_stars' => $one_stars,
            'two_stars' => $two_stars,
            'three_stars' => $three_stars,
            'four_stars' => $four_stars,
            'five_stars' => $five_stars,
            'one_stars_perc' => round($one_stars_perc),
            'two_stars_perc' => round($two_stars_perc),
            'three_stars_perc' => round($three_stars_perc),
            'four_stars_perc' => round($four_stars_perc),
            'five_stars_perc' => round($five_stars_perc),
            'avg_star' => round($average_star)
        );
    }
}
