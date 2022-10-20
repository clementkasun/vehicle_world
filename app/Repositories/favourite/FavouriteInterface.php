<?php

namespace App\Repositories\favourite;

interface FavouriteInterface {
    public function indexData($id);
    public function createFavourite($request);
    public function getAllFavourites();
    public function removeFavourite($id);
}

?>