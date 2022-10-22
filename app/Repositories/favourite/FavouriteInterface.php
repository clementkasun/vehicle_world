<?php

namespace App\Repositories\favourite;

interface FavouriteInterface {
    public function indexData($id);
    public function changeFavourite($request);
    public function removeFavourite($id);
    public function getAllFavourites();
    public function mostFavouriteVehicles();
}

?>