<?php

namespace App\Http\Controllers;

use App\Repositories\favourite\FavouriteRepository;
use Illuminate\Http\Request;

class UserFavouriteController extends Controller
{
    private $userFavouriteRepository;

    function __construct(FavouriteRepository $userFavouriteRepository)
    {
        $this->userFavouriteRepository = $userFavouriteRepository;
    }

    function index_data($id){
       return $this->userFavouriteRepository->indexData($id);
    }

    function create_favourite_item(Request $request){
       return $this->userFavouriteRepository->createFavourite($request);
    }

    function get_all_favourite(){
       return $this->userFavouriteRepository->getAllFavourites();
    }

    function removeFavourite($id){
       return $this->userFavouriteRepository->removeFavourite($id);
    }

    function mostFavouriteVehicles(){
       return $this->userFavouriteRepository->mostFavouriteVehicles();
    }

}
