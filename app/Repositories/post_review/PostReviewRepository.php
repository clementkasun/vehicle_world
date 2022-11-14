<?php

namespace App\Repositories\post_review;

use App\Repositories\post_review\PostReviewInterface;
use App\Models\UserReview;
use File;

class PostReviewRepository implements PostReviewInterface
{
    public function indexData()
    {
        return view('post_reviews');
    }

    public function createPostReview($request)
    {
        $user_id = $request->user_id;
        $id = $request->post_id;
        $path = public_path('/storage/reviews/' . $id . '/');
        
        if ($request->hasFile('img_one')) {

            $img_one       = $request->file('img_one');
            $file_ext_one    = $img_one->extension();

            $image_resize_one = \Image::make($img_one->getRealPath());
            $image_resize_one->resize(100, 100);
            // I am saying to create the dir if it's not there.
            \File::exists($path) or File::makeDirectory($path);
            $random_name_one = uniqid($id);
            $image_resize_one->save($path . $random_name_one . '.' . $file_ext_one);
            $review_img_one_path = '/storage/reviews/' . $id . '/' . $random_name_one . '.' . $file_ext_one;
        }

        if ($request->hasFile('img_two')) {

            $img_two       = $request->file('img_two');
            $file_ext_two    = $img_two->extension();

            $image_resize_two = \Image::make($img_two->getRealPath());
            $image_resize_two->resize(100, 100);
            // I am saying to create the dir if it's not there.
            \File::exists($path) or File::makeDirectory($path);
            $random_name_two = uniqid($id);
            $image_resize_two->save($path . $random_name_two . '.' . $file_ext_two);
            $review_img_two_path = '/storage/reviews/' . $id . '/' . $random_name_two . '.' . $file_ext_two;
        }

        if ($request->hasFile('img_three')) {

            $img_three       = $request->file('img_three');
            $file_ext_three    = $img_three->extension();

            $image_resize_three = \Image::make($img_three->getRealPath());
            $image_resize_three->resize(100, 100);
            // I am saying to create the dir if it's not there.
            \File::exists($path) or File::makeDirectory($path);
            $random_name_three = uniqid($id);
            $image_resize_three->save($path . $random_name_three . '.' . $file_ext_three);
            $review_img_three_path = '/storage/reviews/' . $id . '/' . $random_name_three . '.' . $file_ext_three;
        }

        if ($request->hasFile('img_four')) {

            $img_four       = $request->file('img_four');
            $file_ext_four    = $img_four->extension();

            $image_resize_four = \Image::make($img_four->getRealPath());
            $image_resize_four->resize(100, 100);
            // I am saying to create the dir if it's not there.
            \File::exists($path) or File::makeDirectory($path);
            $random_name_four = uniqid($id);
            $image_resize_four->save($path . $random_name_four . '.' . $file_ext_four);
            $review_img_four_path = '/storage/reviews/' . $id . '/' . $random_name_four . '.' . $file_ext_four;
        }

        $post_review = UserReview::create([
            'user_id' => $user_id,
            'post_id' => $request->post_id,
            'review_desc' => $request->user_review,
            'user_star' => $request->rating_index,
            'img_one' => (isset($review_img_one_path)) ?  $review_img_one_path : null,
            'img_two' => (isset($review_img_two_path)) ? $review_img_two_path : null,
            'img_three' => (isset($review_img_three_path)) ? $review_img_three_path : null,
            'img_four' => (isset($review_img_four_path)) ? $review_img_four_path : null,
            'created_at' => now(),
        ]);

        // $user = User::find($user_id)->first();
        // Notification::send($user, new CustomerPostCreatedNotification($user));

        if ($post_review == true) {
            return array('status' => 1, 'msg' => 'Successfully save the review to the system!');
        } else {
            return array('status' => 0, 'msg' => 'Review saving was unsuccessful!');
        }
    }

    public function updatePostReview($request)
    {
        $user_id = $request->user_id;

        $id = $request->post_id;
        $path = public_path('/storage/reviews/' . $id . '/');
        
        if ($request->hasFile('img_one')) {

            $img_one       = $request->file('img_one');
            $file_ext_one    = $img_one->extension();

            $image_resize_one = \Image::make($img_one->getRealPath());
            $image_resize_one->resize(100, 100);
            // I am saying to create the dir if it's not there.
            \File::exists($path) or File::makeDirectory($path);
            $random_name_one = uniqid($id);
            $image_resize_one->save($path . $random_name_one . '.' . $file_ext_one);
            $review_img_one_path = '/storage/reviews/' . $id . '/' . $random_name_one . '.' . $file_ext_one;
        }

        if ($request->hasFile('img_two')) {

            $img_two       = $request->file('img_two');
            $file_ext_two    = $img_two->extension();

            $image_resize_two = \Image::make($img_two->getRealPath());
            $image_resize_two->resize(100, 100);
            // I am saying to create the dir if it's not there.
            \File::exists($path) or File::makeDirectory($path);
            $random_name_two = uniqid($id);
            $image_resize_two->save($path . $random_name_two . '.' . $file_ext_two);
            $review_img_two_path = '/storage/reviews/' . $id . '/' . $random_name_two . '.' . $file_ext_two;
        }

        if ($request->hasFile('img_three')) {

            $img_three       = $request->file('img_three');
            $file_ext_three    = $img_three->extension();

            $image_resize_three = \Image::make($img_three->getRealPath());
            $image_resize_three->resize(100, 100);
            // I am saying to create the dir if it's not there.
            \File::exists($path) or File::makeDirectory($path);
            $random_name_three = uniqid($id);
            $image_resize_three->save($path . $random_name_three . '.' . $file_ext_three);
            $review_img_three_path = '/storage/reviews/' . $id . '/' . $random_name_three . '.' . $file_ext_three;
        }

        if ($request->hasFile('img_four')) {

            $img_four       = $request->file('img_four');
            $file_ext_four    = $img_four->extension();

            $image_resize_four = \Image::make($img_four->getRealPath());
            $image_resize_four->resize(100, 100);
            // I am saying to create the dir if it's not there.
            \File::exists($path) or File::makeDirectory($path);
            $random_name_four = uniqid($id);
            $image_resize_four->save($path . $random_name_four . '.' . $file_ext_four);
            $review_img_four_path = '/storage/reviews/' . $id . '/' . $random_name_four . '.' . $file_ext_four;
        }

        $post_review = UserReview::find($request->post_id);
        $post_review->user_id = $user_id;
        $post_review->review_desc = $request->user_review;
        $post_review->user_star = $request->rating_index;
        $post_review->img_one = $review_img_one_path;
        $post_review->img_two = $review_img_two_path;
        $post_review->img_three = $review_img_three_path;
        $post_review->img_four = $review_img_four_path;
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
