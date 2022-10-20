<?php

namespace App\Repositories\favourite;

use App\Repositories\favourite\FavouriteInterface;
use App\Models\UserFavourite;

class FavouriteRepository implements FavouriteInterface
{
    public function indexData($id)
    {
        $user_favourites = UserFavourite::where('user_id', $id)->with('Post')->get();
        return view('favourites', ['user_favourites' => $user_favourites]);
    }

    public function createFavourite($request)
    {
        $favourite = UserFavourite::create([
            'user_id' => $request->user_id,
            'post_id' => $request->post_id,
            'created_at' => now()
        ]);

        if ($favourite == true) {
            return array('status' => 1, 'msg' => 'Successfully saved your favourite item');
        } else {
            return array('status' => 0, 'msg' => 'Your favourite item saving was unsuccessful');
        }
    }

    public function getAllFavourites()
    {
        $favourite = UserFavourite::all();
        return $favourite;
    }

    public function removeFavourite($id)
    {
        $favourite_item_remove = UserFavourite::find($id)->delete();

        if ($favourite_item_remove == true) {
            return array('status' => 1, 'msg' => 'Successfully removed your favourite item');
        } else {
            return array('status' => 0, 'msg' => 'Your favourite item removing was unsuccessful');
        }
    }
}
