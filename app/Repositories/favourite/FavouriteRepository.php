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

    public function changeFavourite($request)
    {

        $is_post_favoured = UserFavourite::where('user_id', $request->user_id)->orWhere('post_id', $request->post_id)->exists();
        if ($is_post_favoured == true) {

            $favourite_item_remove = UserFavourite::where('user_id', $request->user_id)->orWhere('post_id', $request->post_id)->delete();
            if ($favourite_item_remove == true) {
                return array('status' => 1, 'msg' => 'Successfully removed your favourite item', 'cheacked' => false);
            } else {
                return array('status' => 0, 'msg' => 'Your favourite item removing was unsuccessful');
            }
            
        } else {

            $favourite = UserFavourite::create([
                'user_id' => $request->user_id,
                'post_id' => $request->post_id,
                'created_at' => now()
            ]);

            if ($favourite == true) {
                return array('status' => 1, 'msg' => 'Successfully saved your favourite item', 'cheacked' => true);
            } else {
                return array('status' => 0, 'msg' => 'Your favourite item saving was unsuccessful');
            }

        }
    }

    public function getAllFavourites()
    {
        $favourite = UserFavourite::all();
        return $favourite;
    }

    public function mostFavouriteVehicles()
    {
        $favourite_post = UserFavourite::select('post_id')->groupBy('post_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(3)
            ->with('post')
            ->get();
        return $favourite_post;
    }
}
