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
    public function changePostAsSold($id);
    public function vehiclePostCount();
    public function sparePartsCount();
    public function wantedPostCount();
    public function saledPostCount();
    public function pendingSaleCount();
    public function getCurrentYearSales();
    public function getHeighestSoldVehicles();
}

?>