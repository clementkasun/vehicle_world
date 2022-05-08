<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Repositories\post\PostRepository;

class PostController extends Controller
{
    
    private $postRepository;

    function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $index_data = $this->postRepository->indexData();
        return view('home', ['posts' => $index_data]);
    }

    public function get_post_profile($post_id)
    {
        $post_profile_data = $this->postRepository->showPostProfile($post_id);
        return view('./post_profile', $post_profile_data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store_post = $this->postRepository->createPost($request);
        return $store_post;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $show_all_post = $this->postRepository->getAllPost();
        return $show_all_post;
    }


    public function filtered_posts(Request $request){
        $filetered_post = $this->postRepository->filteredPosts($request);
        return $filetered_post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
        $update_post = $this->postRepository->postUpdate($request, $post_id);
        return $update_post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $remove_post = $this->postRepository->removePost($id);
        return $remove_post;
    }
}
