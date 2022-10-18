<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Repositories\post\PostRepository;

class PostController extends Controller
{

    private $postRepository;

    function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $user = Auth::user();
        return view('home', ['user_profile_data' => $user]);
    }

    public function get_post_profile($post_id)
    {
        $post_profile_data = $this->postRepository->showPostProfile($post_id);
        return view('./post_profile', $post_profile_data);
    }

    public function get_post_update_form($post_id)
    {
        $post_profile_data = $this->postRepository->showPostProfile($post_id);
        return view('./registration/post_update', $post_profile_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->postRepository->createPost($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return $this->postRepository->getAllPost();
    }


    public function filtered_posts(Request $request)
    {
        return $this->postRepository->filteredPosts($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->postRepository->postUpdate($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       return $this->postRepository->removePost($id);
    }

    public function soldPost($id)
    {
       return $this->postRepository->changePostAsSold($id);
    }
}
