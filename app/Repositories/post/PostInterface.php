<?php

namespace App\Repositories\Post;

interface PostInterface {
    public function indexData();
    public function createPost($request);
    public function getAllPost();
    public function showPostProfile($id);
    public function filteredPosts($request);
    public function searchPosts($request);
    public function removePost($id);
    public function postUpdate($request, $id);
    public function removeExpiredPost();
    public function changePostAsSold($id);
    public function vehiclePostCount();
    public function sparePartsCount();
    public function wantedPostCount();
    public function saledPostCount();
    public function pendingSaleCount();
    public function getMonthlySales();
    public function getHeighestSoldVehicles();
    public function getHeighestSellers();
    public function getYearlySales();
    public function vehicleTypeWiseSales();
    public function getPercentages();
    public function getTrendingPosts();
    public function mostFavouredPosts();
    public function renew_post($post_id);
}

?>