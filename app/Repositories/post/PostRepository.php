<?php

namespace App\Repositories\post;

use App\Repositories\post\PostInterface;
use App\Models\Customer;
use App\Models\Vehicle;
use App\Models\SparePart;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostRepository implements PostInterface
{

    public function indexData()
    {
        $post_all = Post::where('posts.deleted_at', '=', null)
            ->join('users', 'posts.user_id', 'users.id')
            ->leftjoin('spare_parts', 'posts.spare_part_id', 'spare_parts.id')
            ->leftjoin('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->leftjoin('vehicle_makes', 'vehicles.make_id', 'spare_parts.make_id', 'vehicle_makes.id')
            ->select(
                'posts.id AS id',
                'posts.post_type',
                'posts.post_title',
                'posts.vehicle_id',
                'users.id AS user_id',
                'posts.main_image',
                'posts.condition',
                'vehicles.model',
                'posts.location',
                'vehicles.start_type',
                'vehicles.manufactured_year',
                'posts.price',
                'vehicles.on_going_lease',
                'vehicles.transmission',
                'vehicles.fuel_type',
                'vehicles.engine_capacity',
                'vehicles.millage',
                'vehicles.isAc',
                'vehicles.isPowerSteer',
                'vehicles.isPowerMirroring',
                'vehicles.isPowerWindow',
                'spare_parts.part_used_in',
                'spare_parts.part_category',
                'posts.additional_info',
                'posts.created_at'
            )->paginate(50);

        return $post_all;
    }

    public function getAllPost()
    {
        $post_all = Post::where('posts.deleted_at', '=', null)
            ->join('users', 'posts.user_id', 'users.id')
            ->leftjoin('spare_parts', 'posts.spare_part_id', 'spare_parts.id')
            ->leftjoin('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->join('vehicle_makes', 'vehicles.make_id', 'vehicle_makes.id')
            ->select(
                'posts.id AS id',
                'posts.post_type',
                'posts.post_title',
                'posts.vehicle_id',
                'users.id AS user_id',
                'posts.main_image',
                'posts.condition',
                'vehicles.model',
                'posts.location',
                'posts.address',
                'vehicles.start_type',
                'vehicles.manufactured_year',
                'posts.price',
                'vehicles.on_going_lease',
                'vehicles.transmission',
                'vehicles.fuel_type',
                'vehicles.engine_capacity',
                'vehicles.millage',
                'vehicles.isAc',
                'vehicles.isPowerSteer',
                'vehicles.isPowerMirroring',
                'vehicles.isPowerWindow',
                'spare_parts.part_used_in',
                'spare_parts.part_category',
                'posts.additional_info',
                'posts.created_at'
            )->get();

        return $post_all;
    }

    public function createPost($request)
    {
        try {
            DB::beginTransaction();
            $post_type = $request->post_type;

            $user_id = $request->user_id;
            $post_id = '';

            $post_save = Post::create([
                'post_title' => $request->post_title,
                'post_type' => $post_type,
                'condition' => $request->condition,
                'price' => $request->price,
                'additional_info' => $request->additional_info,
                'user_id' => $user_id,
                'location' => $request->location,
                'address' => $request->address,
            ]);
            $post_id = $post_save->id;

            $isAc = 0;
            $isPowerSteer = 0;
            $isPowerMirroring = 0;
            $isPowerWindow = 0;
            $on_going_lease = 0;

            ($request->isAc == 'on') ? $isAc = 1 : null;
            ($request->isPowerSteer == 'on') ? $isPowerSteer = 1 : null;
            ($request->isPowerMirroring == 'on') ? $isPowerMirroring = 1 : null;
            ($request->isPowerWindow == 'on') ? $isPowerWindow = 1 : null;
            ($request->on_going_lease == 'on') ? $on_going_lease = 1 : null;

            if (strstr($post_type, "VEHI") || strstr($post_type, "WAN")) {

                $vehicle_data_save = Vehicle::create([
                    'vehicle_type' => $request->vehicle_type,
                    'model' => $request->model,
                    'make_id' => $request->make_id,
                    'start_type' => $request->start_type,
                    'manufactured_year' => $request->manufactured_year,
                    'on_going_lease' => $on_going_lease,
                    'transmission' => $request->transmission,
                    'fuel_type' => $request->fuel_type,
                    'engine_capacity' => $request->engine_capacity,
                    'millage' => $request->millage,
                    'isAc' => $isAc,
                    'isPowerSteer' => $isPowerSteer,
                    'isPowerMirroring' => $isPowerMirroring,
                    'isPowerWindow' => $isPowerWindow,
                ]);
                $vehicle_id = $vehicle_data_save->id;

                $vehicle_id_update = post::find($post_id);
                $vehicle_id_update->vehicle_id = $vehicle_id;
                $vehicle_id_update->save();
            }
            if (strstr($post_type, "SPARE")) {
                $spare_part_save = SparePart::create([
                    'part_used_in' => $request->vehicle_type,
                    'part_category' => $request->part_category,
                    'make_id' => $request->make_id,
                ]);
                $spare_id = $spare_part_save->id;
                $spare_part_id_update = post::find($post_id);
                $spare_part_id_update->spare_part_id = $spare_id;
                $spare_part_id_update->save();
            }

            $request->validate([
                'main_image' => 'required|mimes:jpeg,bmp,png', // Only allow .jpg, .bmp and .png file types.
            ]);
            //get the post to update
            $image_path_update = Post::find($post_id);
            $random_name = uniqid($post_id);
            if ($request->main_image != 'undefined') {
                $main_ext = $request->main_image->extension();
                $path_main = $request->file('main_image')->storeAs(
                    '/public/post_images' . '/' . $post_id,
                    'main_img' . '.' . $random_name . '.' . $main_ext
                );
                $image_path_update->main_image = str_replace("public/", "/", $path_main);
            }
            if ($request->image_one != 'undefined') {
                $img_one_ext = $request->image_one->extension();
                $path_one = $request->file('image_one')->storeAs(
                    '/public/post_images' . '/' . $post_id,
                    'img_one' . '.' . $random_name . '.' . $img_one_ext
                );
                $image_path_update->image_1 = str_replace("public/", "/", $path_one);
            }
            if ($request->image_two != 'undefined') {
                $img_two_ext = $request->image_two->extension();
                $path_two = $request->file('image_two')->storeAs(
                    '/public/post_images' . '/' . $post_id,
                    'img_two' . '.' . $random_name . '.' . $img_two_ext
                );
                $image_path_update->image_2 = str_replace("public/", "/", $path_two);
            }
            if ($request->image_three != 'undefined') {
                $img_three_ext = $request->image_three->extension();
                $path_three = $request->file('image_three')->storeAs(
                    '/public/post_images' . '/' . $post_id,
                    'img_three' . '.' . $random_name . '.' . $img_three_ext
                );
                $image_path_update->image_3 = str_replace("public/", "/", $path_three);
            }
            if ($request->image_four != 'undefined') {
                $img_four_ext = $request->image_four->extension();
                $path_four = $request->file('image_four')->storeAs(
                    '/public/post_images' . '/' . $post_id,
                    'img_four' . '.' . $random_name . '.' . $img_four_ext
                );
                $image_path_update->image_4 = str_replace("public/", "/", $path_main);
            }
            if ($request->image_five != 'undefined') {
                $img_five_ext = $request->image_five->extension();
                $path_five = $request->file('image_five')->storeAs(
                    '/public/post_images' . '/' . $post_id,
                    'img_five' . '.' . $random_name . '.' . $img_five_ext
                );
                $image_path_update->image_5 = str_replace("public/", "/", $path_five);
            }
            $image_path_update->save();
            DB::commit();
            return array('status' => 1, 'msg' => 'Post created successfully!');
        } catch (Exception $e) {
            DB::rollBack();
            return array('status' => 0, 'msg' => 'Post creation is Unsuccessfully!');
        }
    }

    public function showPostProfile($post_id)
    {
        $post_data = Post::where('posts.deleted_at', '=', null)
            ->where('posts.id', '=', $post_id)
            ->join('users', 'posts.user_id', 'users.id')
            ->leftjoin('spare_parts', 'posts.spare_part_id', 'spare_parts.id')
            ->leftjoin('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->leftjoin('vehicle_makes', 'vehicles.make_id', 'vehicle_makes.id')
            ->select(
                'posts.id AS id',
                'posts.post_type',
                'posts.post_title',
                'posts.vehicle_id',
                'users.id AS user_id',
                'users.name',
                'users.last_name',
                'users.contact_no',
                'users.nic',
                'users.email',
                'users.address AS seller_location',
                'posts.main_image',
                'posts.condition',
                'vehicles.model',
                'posts.location',
                'posts.address',
                'vehicles.start_type',
                'vehicles.manufactured_year',
                'posts.price',
                'vehicles.on_going_lease',
                'vehicles.transmission',
                'vehicles.fuel_type',
                'vehicles.engine_capacity',
                'vehicles.millage',
                'vehicles.isAc',
                'vehicles.isPowerSteer',
                'vehicles.isPowerMirroring',
                'vehicles.isPowerWindow',
                'vehicles.vehicle_type',
                'spare_parts.part_used_in',
                'spare_parts.part_category',
                'posts.additional_info',
                'posts.created_at',
                'posts.image_1',
                'posts.image_2',
                'posts.image_3',
                'posts.image_4',
                'posts.image_5',
                'vehicles.make_id',
                'vehicle_makes.make_name'
            )->first();

        $vehi_type = $post_data->vehicle_type;

        $post_by_vehi_type = Post::join('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->where('vehicles.vehicle_type', $vehi_type)
            ->paginate(5);

        return ['post_data' => $post_data, 'related_posts' => $post_by_vehi_type];
    }

    public function filteredPosts($request)
    {
        $request_data = [
            'make' => $request[1]['value'],
            'post_type' => $request[3]['value'],
            'model' => $request[2]['value'],
            'vehi_type' => $request[4]['value'],
            'condition' => $request[5]['value'],
            'price_range' => $request[6]['value'],
            'location' => $request[7]['value'],
            'year_min' => $request[8]['value'],
            'year_max' => $request[9]['value'],
            'gear_type' => $request[10]['value'],
            'fuel_type' => $request[11]['value'],
        ];

        $make = $request[1]['value'];
        $post_type = $request[3]['value'];
        $model = $request[2]['value'];
        $vehi_type = $request[4]['value'];
        $condition = $request[5]['value'];
        $price_range = $request[6]['value'];
        $location = $request[7]['value'];
        $year_min = $request[8]['value'];
        $year_max = $request[9]['value'];
        $gear_type = $request[10]['value'];
        $fuel_type = $request[11]['value'];

        if ($post_type == "VEHI") {

            $post = Post::where('posts.deleted_at', '=', null)
                ->join('users', 'posts.user_id', 'users.id')
                ->leftjoin('vehicles', 'posts.vehicle_id', 'vehicles.id')
                ->leftjoin('vehicle_makes', 'vehicles.make_id', 'vehicle_makes.id');

            $post = $post->when($location != 'any', function ($p) use ($location) {
                return $p->where('posts.location', 'like', '%' . $location . '%');
            });

            $post = $post->when($condition != 'any', function ($p) use ($condition) {
                return $p->where('posts.condition', 'like', '%' . $condition . '%');
            });

            $post = $post->when($price_range != 'Any', function ($p) use ($price_range) {
                if ($price_range != '< 100000' && $price_range != '> 15000000') {
                    $min_price = (int) strstr($price_range, "-", true);
                    $tmp_max_price = strstr($price_range, "-");
                    $completed_max_price = (int) trim($tmp_max_price, '-');
                    return $p->whereBetween('posts.price', [$min_price, $completed_max_price]);
                }

                if ($price_range == '< 100000') {
                    return $p->where('posts.price', '<', 100000);
                }
                if ($price_range == '> 15000000') {
                    return $p->where('posts.price', '>', 15000000);
                }
            });

            $post = $post->when($make != null, function ($p) use ($make) {
                return $p->where('vehicles.make_id', '=', $make);
            });

            $post = $post->when($model != null, function ($p) use ($model) {
                return $p->where('vehicles.model', 'like', '%' . $model . '%');
            });

            $post = $post->when($year_min == 0 && $year_max != 0, function ($p) use ($year_max) {
                return $p->where('vehicles.manufactured_year', '<=', $year_max);
            });

            $post = $post->when($year_min != 0 && $year_max == 0, function ($p) use ($year_min) {
                return $p->where('vehicles.manufactured_year', '>=', $year_min);
            });

            $post = $post->when($year_min != 0 && $year_max != 0, function ($p) use ($year_min, $year_max) {
                return $p->whereBetween('vehicles.manufactured_year', [$year_min, $year_max]);
            });

            $post = $post->when($fuel_type != 'any', function ($p) use ($fuel_type) {
                return $p->where('vehicles.fuel_type', 'like', '%' . $fuel_type . '%');
            });

            $post = $post->when($gear_type != 'any', function ($p) use ($gear_type) {
                return $p->where('vehicles.transmission', 'like', '%' . $gear_type . '%');
            });

            $post = $post->when($vehi_type != 'any', function ($p) use ($vehi_type) {
                return $p->where('vehicles.vehicle_type', 'like', '%' . $vehi_type . '%');
            });

            $post = $post->when($post_type == "VEHI", function ($p) {
                return $p->select(
                    'posts.id AS id',
                    'posts.post_type',
                    'posts.post_title',
                    'posts.main_image',
                    'posts.condition',
                    'model',
                    'start_type',
                    'manufactured_year',
                    'posts.price',
                    'on_going_lease',
                    'transmission',
                    'fuel_type',
                    'engine_capacity',
                    'millage',
                    'isAc',
                    'isPowerSteer',
                    'isPowerMirroring',
                    'isPowerWindow',
                    'posts.additional_info',
                    'posts.location',
                    'posts.address',
                    'posts.created_at'
                );
            });
            $filtered_post_data = $post->get();
            return $filtered_post_data;
        }

        if ($post_type == "SPARE") {
            $post = Post::where('posts.deleted_at', '=', null)
                ->join('users', 'posts.user_id', 'users.id')
                ->join('spare_parts', 'posts.spare_part_id', 'spare_parts.id')
                ->join('vehicle_makes', 'spare_parts.make_id', 'vehicle_makes.id');

            $post = $post->when($location != 'any', function ($p) use ($location) {
                return $p->where('posts.location', 'like', '%' . $location . '%');
            });

            $post = $post->when($condition != 'any', function ($p) use ($condition) {
                return $p->where('posts.condition', 'like', '%' . $condition . '%');
            });

            $post = $post->when($price_range != 'Any', function ($p) use ($price_range) {
                if ($price_range != '< 100000' && $price_range != '> 15 Million') {
                    $min_price = (int) strstr($price_range, "-", true);
                    $tmp_max_price = strstr($price_range, "-");
                    $completed_max_price = (int) trim($tmp_max_price, '-');
                    return $p->whereBetween('posts.price', [$min_price, $completed_max_price]);
                }

                if ($price_range == '< 100000') {
                    return $p->where('posts.price', '<', '100000');
                }
                if ($price_range == '> 15 Million') {
                    return $p->where('posts.price', '>', '15000000');
                }
            });

            $post = $post->when($make != 'null', function ($p) use ($make) {
                return $p->where('spare_parts.make_id', '=', $make);
            });

            $post = $post->when($post_type == "SPARE", function ($p) {
                return $p->select(
                    'posts.id AS id',
                    'posts.post_type',
                    'posts.post_title',
                    'posts.main_image',
                    'posts.location',
                    'posts.address',
                    'posts.condition',
                    'spare_parts.part_used_in',
                    'spare_parts.part_category',
                    'posts.price',
                    'posts.additional_info',
                    'posts.created_at'
                );
            });

            $filtered_post_data = $post->get();
            return $filtered_post_data;
        }
    }

    public function postUpdate($request, $id)
    {
        // try {
        //     DB::beginTransaction();

        $post_type = $request->post_type;
        //get the post from id
        $post_update = Post::find($id);
        $post_update->post_title = $request->post_title;
        $post_update->post_type = $post_type;
        $post_update->condition = $request->condition;
        $post_update->price = $request->price;
        $post_update->additional_info = $request->additional_info;
        $post_update->location = $request->location;
        $post_update->address = $request->address;
        $post_update->save();

        if (strstr($post_type, "VEHI")) {
            $vehicle_id = $post_update->vehicle_id;
            $vehicle = Vehicle::find($vehicle_id);
            $vehicle->model = $request->model;
            $vehicle->start_type = $request->start_type;
            $vehicle->manufactured_year = $request->manufactured_year;
            $vehicle->on_going_lease = $request->on_going_lease;
            $vehicle->transmission = $request->transmission;
            $vehicle->fuel_type = $request->fuel_type;
            $vehicle->engine_capacity = $request->engine_capacity;
            $vehicle->millage = $request->millage;
            $vehicle->isAc = $request->isAc;
            $vehicle->isPowerSteer = $request->isPowerSteer;
            $vehicle->isPowerMirroring = $request->isPowerMirroring;
            $vehicle->isPowerWindow = $request->isPowerWindow;
            $vehicle->save();
        }

        if (strstr($post_type, "SPARE")) {
            $spare_part_id = $post_update->spare_part_id;
            $spare_part_update = SparePart::find($spare_part_id);
            $spare_part_update->part_used_in = $request->part_used_in;
            $spare_part_update->part_category = $request->part_category;
            $spare_part_update->save();
        }
        dd($request->main_image);
        if ($request->main_image != null && $request->image_one != null && $request->image_two != null && $request->image_three != null && $request->image_five != null) {
            $request->validate([
                'main_image' => 'sometimes|required|nullable|image|mimes:jpeg,bmp,png,gif|max:2048', // Only allow .jpg, .bmp and .png file types.
                'image_one' => 'sometimes|required|nullable|image|mimes:jpeg,bmp,png,gif|max:2048', // Only allow .jpg, .bmp and .png file types.
                'image_two' => 'sometimes|required|nullable|image|mimes:jpeg,bmp,png,gif|max:2048', // Only allow .jpg, .bmp and .png file types.
                'image_three' => 'sometimes|required|nullable|image|mimes:jpeg,bmp,png,gif|max:2048', // Only allow .jpg, .bmp and .png file types.
                'image_four' => 'sometimes|required|nullable|image|mimes:jpeg,bmp,png,gif|max:2048', // Only allow .jpg, .bmp and .png file types.
                'image_five' => 'sometimes|required|nullable|image|mimes:jpeg,bmp,png,gif|max:2048', // Only allow .jpg, .bmp and .png file types.
            ]);

            $random_name = uniqid($id);
            if ($request->main_image != null) {
                $main_ext = $request->main_image->extension();
                $path_main = $request->file('main_image')->storeAs(
                    '/public/post_images' . '/' . $id,
                    'main_img' . '.' . $random_name . '.' . $main_ext
                );
                $post_update->main_image = str_replace("public/", "/", $path_main);
            }
            if ($request->image_one != null) {
                $img_one_ext = $request->image_one->extension();
                $path_one = $request->file('image_one')->storeAs(
                    '/public/post_images' . '/' . $id,
                    'img_one' . '.' . $random_name . '.' . $img_one_ext
                );
                $post_update->image_1 = str_replace("public/", "/", $path_one);
            }
            if ($request->image_two != null) {
                $img_two_ext = $request->image_two->extension();
                $path_two = $request->file('image_two')->storeAs(
                    '/public/post_images' . '/' . $id,
                    'img_two' . '.' . $random_name . '.' . $img_two_ext
                );
                $post_update->image_2 = str_replace("public/", "/", $path_two);
            }
            if ($request->image_three != null) {
                $img_three_ext = $request->image_three->extension();
                $path_three = $request->file('image_three')->storeAs(
                    '/public/post_images' . '/' . $id,
                    'img_three' . '.' . $random_name . '.' . $img_three_ext
                );
                $post_update->image_3 = str_replace("public/", "/", $path_three);
            }
            if ($request->image_four != null) {
                $img_four_ext = $request->image_four->extension();
                $path_four = $request->file('image_four')->storeAs(
                    '/public/post_images' . '/' . $id,
                    'img_four' . '.' . $random_name . '.' . $img_four_ext
                );
                $post_update->image_4 = str_replace("public/", "/", $path_main);
            }
            if ($request->image_five != null) {
                $img_five_ext = $request->image_five->extension();
                $path_five = $request->file('image_five')->storeAs(
                    '/public/post_images' . '/' . $id,
                    'img_five' . '.' . $random_name . '.' . $img_five_ext
                );
                $post_update->image_5 = str_replace("public/", "/", $path_five);
            }
        }

        $post_update->save();

        //     DB::commit();
        //     return array('status' => 1, 'msg' => 'Post has Updated successfully!');
        // } catch (\Exception $e) {
        //     DB::rollBack();
        //     return array('status' => 0, 'msg' => 'Post Updation is Unsuccessfull!');
        // }
    }

    public function removePost($post_id)
    {
        try {
            $post = Post::find($post_id);
            $post_data = $post->first();

            $main_img_path = $post_data->main_image;
            $img_one_path = $post_data->image_1;
            $img_two_path = $post_data->image_2;
            $img_three_path = $post_data->image_3;
            $img_four_path = $post_data->image_4;
            $img_path_five = $post_data->image_5;

            Storage::delete($main_img_path);
            Storage::delete($img_one_path);
            Storage::delete($img_two_path);
            Storage::delete($img_three_path);
            Storage::delete($img_four_path);
            Storage::delete($img_path_five);
            $post->delete();

            return array('status' => 'Post Deleted Successfully!');
        } catch (\Exception $e) {
            return array('status' => 'Post Deleting is Unsuccessfull!');
        }
    }

    public function removeExpiredPost()
    {
        try {
            $prev_same_date = \Carbon\Carbon::now() . subYear();
            $get_expired_post = Post::whereDate('create_at', $prev_same_date);
            $main_img_path = $get_expired_post->main_image;
            $img_one_path = $get_expired_post->image_1;
            $img_two_path = $get_expired_post->image_2;
            $img_three_path = $get_expired_post->image_3;
            $img_four_path = $get_expired_post->image_4;
            $img_path_five = $get_expired_post->image_5;

            Storage::delete($main_img_path);
            Storage::delete($img_one_path);
            Storage::delete($img_two_path);
            Storage::delete($img_three_path);
            Storage::delete($img_four_path);
            Storage::delete($img_path_five);
            $get_expired_post->delete();
            return array('status' => 'Successfully removed the expired post!');
        } catch (\Exception $ex) {
            return array('status' => 'expired post data removal unsuccessfull!');
        }
    }
}
