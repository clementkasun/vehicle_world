<?php

namespace App\Repositories\favourite;

interface FavouriteInterface {
    public function indexData($id);
    public function changeFavourite($request);
    public function getAllFavourites();
    public function mostFavouriteVehicles();
}

?>