<?php

namespace App\Repositories\post;

use App\Repositories\post\PostInterface;
use App\Models\Vehicle;
use App\Models\SparePart;
use App\Models\Post;
use App\Notifications\CustomerPostCreatedNotification;
use App\Notifications\CustomerPostDeleteNotification;
use App\Notifications\CustomerPostStatusChangedNotification;
use App\Notifications\CustomerPostUpdatedNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use File;
use App\Models\User;
use App\Models\UserFavourite;

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
                'posts.created_at',
                'posts.status'
            )->paginate(50);

        return $post_all;
    }

    public function getAllPost()
    {

        $post_all  = Post::with(['Vehicle.VehicleMake', 'SparePart'], 'User')->paginate(100);
        return $post_all;
    }

    public function createPost($request)
    {
        try {
            DB::beginTransaction();
            $post_type = $request->post_type;
            $user_id = $request->user_id;

            $isAc = 0;
            $isPowerSteer = 0;
            $isPowerMirroring = 0;
            $isPowerWindow = 0;
            $on_going_lease = 0;

            $post_main_saved_path = null;
            $post_one_saved_path = null;
            $post_two_saved_path = null;
            $post_three_saved_path = null;
            $post_four_saved_path = null;
            $post_five_saved_path = null;
            $post_saved_vehicle_id = null;
            $post_saved_spare_id = null;
            $id = null;

            $request->validate([
                'vehicle_type' => 'nullable|sometimes',
                'model' => 'nullable|sometimes',
                'make_id' => 'required',
                'start_type' => 'nullable|sometimes|string|max:10',
                'manufactured_year' => 'nullable|sometimes',
                'transmission' => 'nullable|sometimes|string|max:20',
                'fuel_type' => 'nullable|sometimes|string|max:10',
                'engine_capacity' => 'nullable|sometimes|int',
                'millage' => 'nullable|sometimes|int',
                'on_going_lease' => 'nullable|sometimes|string|max:10',
                'isAc' => 'nullable|sometimes|string|max:10',
                'isPowerSteer' => 'nullable|sometimes|string|max:10',
                'isPowerMirroring' => 'nullable|sometimes|string|max:10',
                'isPowerWindow' => 'nullable|sometimes|string|max:10',
                'part_used_in' => 'nullable|sometimes',
                'part_category' => 'nullable|sometimes|string|max:255',
                'post_title' => 'required|string|max:45',
                'post_type' => 'required|string|max:20',
                'condition' => 'required|string|max:30',
                'price' => 'required|int',
                'additional_info' => 'required|string|max:255',
                'user_id' => 'required|int',
                'location' => 'required|string|max:50',
                'address' => 'required|string|max:255',
                'main_image' => 'image|mimes:jpeg,bmp,png,jpg,svg|max:8000', // Only allow .jpg, .bmp and .png file types.
                'image_one' => 'image|mimes:jpeg,bmp,png,jpg,svg|max:8000', // Only allow .jpg, .bmp and .png file types.
                'image_two' => 'image|mimes:jpeg,bmp,png,jpg,svg|max:8000', // Only allow .jpg, .bmp and .png file types.
                'image_three' => 'image|mimes:jpeg,bmp,png,jpg,svg|max:8000', // Only allow .jpg, .bmp and .png file types.
                'image_four' => 'image|mimes:jpeg,bmp,png,jpg,svg|max:8000', // Only allow .jpg, .bmp and .png file types.
                'image_five' => 'image|mimes:jpeg,bmp,png,jpg,svg|max:8000', // Only allow .jpg, .bmp and .png file types.
            ]);

            ($request->isAc == 'on') ? $isAc = 1 : null;
            ($request->isPowerSteer == 'on') ? $isPowerSteer = 1 : null;
            ($request->isPowerMirroring == 'on') ? $isPowerMirroring = 1 : null;
            ($request->isPowerWindow == 'on') ? $isPowerWindow = 1 : null;
            ($request->on_going_lease == 'on') ? $on_going_lease = 1 : null;

            if ($post_type == "VEHI" || $post_type == "WAN") {

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
                $post_saved_vehicle_id = $vehicle_data_save->id;
                $id = $post_saved_vehicle_id;
            }

            if ($post_type == "SPARE") {
                $spare_part_save = SparePart::create([
                    'part_used_in' => $request->vehicle_type,
                    'part_category' => $request->part_category,
                    'make_id' => $request->make_id,
                    'part_used_in' => $request->vehicle_type
                ]);
                $post_saved_spare_id = $spare_part_save->id;
                $id = $post_saved_spare_id;
            }

            $path = public_path('/storage/post_images/' . $id . '/');

            if ($request->hasFile('main_image')) {

                $image_main       = $request->file('main_image');
                $file_ext_main    = $image_main->extension();

                $image_resize_main = \Image::make($image_main->getRealPath());
                $image_resize_main->resize(300, 200);
                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_main = uniqid($id);
                $image_resize_main->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_main . '.' . $file_ext_main);
                $post_main_saved_path = '/storage/post_images/' . $id . '/' . $random_name_main . '.' . $file_ext_main;
            }

            if ($request->hasFile('image_one')) {

                $image_one     = $request->file('image_one');
                $file_ext_one    = $image_one->extension();

                $image_resize_one = \Image::make($image_one->getRealPath());
                $image_resize_one->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_one = uniqid($id);
                $image_resize_one->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_one . '.' . $file_ext_one);
                $post_one_saved_path = '/storage/post_images/' . $id . '/' . $random_name_one . '.' . $file_ext_one;
            }

            if ($request->hasFile('image_two')) {

                $image_two       = $request->file('image_two');
                $file_ext_two    = $image_two->extension();

                $image_resize_two = \Image::make($image_two->getRealPath());
                $image_resize_two->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_two = uniqid($id);
                $image_resize_two->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_two . '.' . $file_ext_two);
                $post_two_saved_path = '/storage/post_images/' . $id . '/' . $random_name_two . '.' . $file_ext_two;
            }

            if ($request->hasFile('image_three')) {

                $image_three       = $request->file('image_three');
                $file_ext_three    = $image_three->extension();

                $image_resize_three = \Image::make($image_three->getRealPath());
                $image_resize_three->resize(300, 200);
                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_three = uniqid($id);
                $image_resize_three->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_three . '.' . $file_ext_three);
                $post_three_saved_path = '/storage/post_images/' . $id . '/' . $random_name_three . '.' . $file_ext_three;
            }

            if ($request->hasFile('image_four')) {

                $image_four       = $request->file('image_four');
                $file_ext_four   = $image_four->extension();

                $image_resize_four = \Image::make($image_four->getRealPath());
                $image_resize_four->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_four = uniqid($id);
                $image_resize_four->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_four . '.' . $file_ext_four);
                $post_four_saved_path = '/storage/post_images/' . $id . '/' . $random_name_four . '.' . $file_ext_four;
            }

            if ($request->hasFile('image_five')) {

                $image_five       = $request->file('image_five');
                $file_ext_five   = $image_five->extension();

                $image_resize_five = \Image::make($image_five->getRealPath());
                $image_resize_five->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_five = uniqid($id);
                $image_resize_five->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_five . '.' . $file_ext_five);
                $post_five_saved_path = '/storage/post_images/' . $id . '/' . $random_name_five . '.' . $file_ext_five;
            }

            if ($post_type == "VEHI" || $post_type == "WAN") {
                Post::create([
                    'post_title' => $request->post_title,
                    'post_type' => $post_type,
                    'condition' => $request->condition,
                    'price' => $request->price,
                    'additional_info' => $request->additional_info,
                    'user_id' => $user_id,
                    'location' => $request->location,
                    'address' => $request->address,
                    'vehicle_id' => $id,
                    'spare_part_id' => null,
                    'main_image' => $post_main_saved_path,
                    'image_1' => $post_one_saved_path,
                    'image_2' => $post_two_saved_path,
                    'image_3' => $post_three_saved_path,
                    'image_4' => $post_four_saved_path,
                    'image_5' => $post_five_saved_path
                ]);
            }

            if ($post_type == "SPARE") {
                Post::create([
                    'post_title' => $request->post_title,
                    'post_type' => $post_type,
                    'condition' => $request->condition,
                    'price' => $request->price,
                    'additional_info' => $request->additional_info,
                    'user_id' => $user_id,
                    'location' => $request->location,
                    'address' => $request->address,
                    'vehicle_id' => null,
                    'spare_part_id' => $id,
                    'main_image' => $post_main_saved_path,
                    'image_1' => $post_one_saved_path,
                    'image_2' => $post_two_saved_path,
                    'image_3' => $post_three_saved_path,
                    'image_4' => $post_four_saved_path,
                    'image_5' => $post_five_saved_path
                ]);
            }

            $user = User::find($user_id)->first();
            Notification::send($user, new CustomerPostCreatedNotification($user));
            DB::commit();
            return array('status' => 1, 'msg' => 'Post has created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return array('status' => 0, 'msg' => 'Post creation was unsuccessful!');
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
                'posts.vehicle_id AS vehicle_id',
                'posts.condition',
                'posts.location',
                'posts.address',
                'posts.price',
                'posts.main_image',
                'posts.image_1',
                'posts.image_2',
                'posts.image_3',
                'posts.image_4',
                'posts.image_5',
                'posts.status',
                'posts.additional_info',
                'posts.created_at',
                'posts.view_count',
                'users.id AS user_id',
                'users.name',
                'users.last_name',
                'users.contact_no',
                'users.nic',
                'users.email',
                'users.address AS seller_location',
                'vehicles.model',
                'vehicles.start_type',
                'vehicles.manufactured_year',
                'vehicles.on_going_lease',
                'vehicles.transmission',
                'vehicles.fuel_type',
                'vehicles.engine_capacity',
                'vehicles.millage',
                'vehicles.isAc',
                'vehicles.isPowerSteer',
                'vehicles.isPowerMirroring',
                'vehicles.isPowerWindow',
                'vehicles.make_id AS make_id',
                'vehicles.vehicle_type',
                'vehicle_makes.make_name',
                'spare_parts.part_used_in',
                'spare_parts.part_category',
            )->first();
        $vehi_type = $post_data->vehicle_type;
        $post_count = $post_data->view_count + 1;

        $posts_view_count_update = Post::find($post_id);
        $posts_view_count_update->view_count = $post_count;
        $posts_view_count_update->save();

        $post_by_vehi_type = Post::join('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->select(
                'posts.id AS id',
                'posts.post_title',
                'posts.location',
                'posts.main_image',
                'posts.price'
            )
            ->where('vehicles.vehicle_type', $vehi_type)
            ->paginate(3);

        $post_likes = UserFavourite::where('post_id', $post_id)->count();

        return ['post_data' => $post_data, 'related_posts' => $post_by_vehi_type, 'post_likes' => $post_likes];
    }

    public $filtered_post = null;

    public function filteredPosts($request)
    {
        $request = $request->request->all();
        $make = $request['cmb_make'];
        $post_type = $request['cmb_post_type'];
        $model = $request['model'];
        $vehi_type = $request['cmb_vehi_type'];
        $start_type = $request['cmb_start_type'];
        $condition = $request['cmb_condition'];
        $price_range = $request['cmb_price'];
        $location = $request['cmb_city'];
        $year_min = $request['year_min'];
        $year_max = $request['year_max'];
        $gear_type = $request['cmb_gear'];
        $fuel_type = $request['cmb_fuel_type'];
        $part_category = $request['part_category'];

        if ($post_type == "VEHI") {

            $filtered_post = Post::where('posts.post_type', 'VEHI')
                ->where('posts.deleted_at', '=', null)
                ->join('users', 'posts.user_id', 'users.id')
                ->leftjoin('vehicles', 'posts.vehicle_id', 'vehicles.id')
                ->leftjoin('vehicle_makes', 'vehicles.make_id', 'vehicle_makes.id');

            $filtered_post = $filtered_post->when($make != 'any', function ($p) use ($make) {
                return $p->where('vehicles.make_id', '=', $make);
            });

            $filtered_post = $filtered_post->when($model != '', function ($p) use ($model) {
                return $p->where('vehicles.model', 'like', '%' . $model . '%');
            });

            $filtered_post = $filtered_post->when($start_type != 'any', function ($p) use ($start_type) {
                return $p->where('vehicles.start_type', 'like', '%' . $start_type . '%');
            });

            $filtered_post = $filtered_post->when($year_min == 0 && $year_max != 0, function ($p) use ($year_max) {
                return $p->where('vehicles.manufactured_year', '<=', $year_max);
            });

            $filtered_post = $filtered_post->when($year_min != 0 && $year_max == 0, function ($p) use ($year_min) {
                return $p->where('vehicles.manufactured_year', '>=', $year_min);
            });

            $filtered_post = $filtered_post->when($year_min != 0 && $year_max != 0, function ($p) use ($year_min, $year_max) {
                return $p->whereBetween('vehicles.manufactured_year', [$year_min, $year_max]);
            });

            $filtered_post = $filtered_post->when($fuel_type != 'any', function ($p) use ($fuel_type) {
                return $p->where('vehicles.fuel_type', 'like', '%' . $fuel_type . '%');
            });

            $filtered_post = $filtered_post->when($gear_type != 'any', function ($p) use ($gear_type) {
                return $p->where('vehicles.transmission', 'like', '%' . $gear_type . '%');
            });

            $filtered_post = $filtered_post->when($vehi_type != 'any', function ($p) use ($vehi_type) {
                return $p->where('vehicles.vehicle_type', 'like', '%' . $vehi_type . '%');
            });

            $filtered_post->select(
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
                'posts.created_at',
                'posts.status'
            );
        }


        if ($post_type == "SPARE") {
            $filtered_post = Post::where('posts.post_type', 'SPARE')
                ->where('posts.deleted_at', '=', null)
                ->join('users', 'posts.user_id', 'users.id')
                ->leftjoin('spare_parts', 'posts.spare_part_id', 'spare_parts.id')
                ->leftjoin('vehicle_makes', 'spare_parts.make_id', 'vehicle_makes.id');

            $filtered_post = $filtered_post->when($make != 'any', function ($p) use ($make) {
                return $p->where('spare_parts.make_id', '=', $make);
            });

            $filtered_post = $filtered_post->when($part_category != 'any', function ($p) use ($part_category) {
                return $p->where('spare_parts.part_category', 'like', '%' . $part_category . '%');
            });

            $filtered_post = $filtered_post->select(
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
        }

        $filtered_post = $filtered_post->when($condition != 'any', function ($p) use ($condition) {
            return $p->where('posts.condition', 'like', '%' . $condition . '%');
        });

        $filtered_post = $filtered_post->when($location != 'any', function ($p) use ($location) {
            return $p->where('posts.location', 'like', '%' . $location . '%');
        });

        $filtered_post = $filtered_post->when($price_range != 'Any', function ($p) use ($price_range) {
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


        $filtered_post_data = $filtered_post->paginate(100);
        $favoured_posts = $this->mostFavouredPosts();
        $trending_posts = $this->getTrendingPosts();
        
        return view('/home', ['posts' => $filtered_post_data, 'most_favoured_posts' => $favoured_posts, 'trending_posts' => $trending_posts]);
    }

    public function postUpdate($request, $id)
    {
        try {
            DB::beginTransaction();

            $post_type = $request->post_type;
            //get the post from id
            $post_update = Post::find($id);

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

            if (strstr($post_type, "VEHI")) {
                $vehicle_id = $post_update->vehicle_id;
                $vehicle = Vehicle::find($vehicle_id);
                $vehicle->model = $request->model;
                $vehicle->start_type = $request->start_type;
                $vehicle->manufactured_year = $request->manufactured_year;
                $vehicle->on_going_lease =  $on_going_lease;
                $vehicle->transmission = $request->transmission;
                $vehicle->fuel_type = $request->fuel_type;
                $vehicle->engine_capacity = $request->engine_capacity;
                $vehicle->millage = $request->millage;
                $vehicle->isAc = $isAc;
                $vehicle->isPowerSteer =   $isPowerSteer;
                $vehicle->isPowerMirroring = $isPowerMirroring;
                $vehicle->isPowerWindow = $isPowerWindow;
                $vehicle->save();
            }

            if (strstr($post_type, "SPARE")) {
                $spare_part_id = $post_update->spare_part_id;
                $spare_part_update = SparePart::find($spare_part_id);
                $spare_part_update->part_used_in = $request->part_used_in;
                $spare_part_update->part_category = $request->part_category;
                $spare_part_update->save();
            }

            $path = public_path('/storage/post_images/' . $id . '/');

            if ($request->hasFile('main_image')) {
                File::deleteDirectory($path);
            }
            if ($request->hasFile('main_image')) {

                $image_main       = $request->file('main_image');
                $file_ext_main    = $image_main->extension();

                $image_resize_main = \Image::make($image_main->getRealPath());
                $image_resize_main->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_main = uniqid($id);
                $image_resize_main->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_main . '.' . $file_ext_main);
                $post_update->main_image = '/storage/post_images/' . $id . '/' . $random_name_main . '.' . $file_ext_main;
            }

            if ($request->hasFile('image_one')) {

                $image_one     = $request->file('image_one');
                $file_ext_one    = $image_one->extension();

                $image_resize_one = \Image::make($image_one->getRealPath());
                $image_resize_main->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_one = uniqid($id);
                $image_resize_one->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_one . '.' . $file_ext_one);
                $post_update->image_1 = '/storage/post_images/' . $id . '/' . $random_name_one . '.' . $file_ext_one;
            }

            if ($request->hasFile('image_two')) {

                $image_two       = $request->file('image_two');
                $file_ext_two    = $image_two->extension();

                $image_resize_two = \Image::make($image_two->getRealPath());
                $image_resize_main->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_two = uniqid($id);
                $image_resize_two->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_two . '.' . $file_ext_two);
                $post_update->image_2 = '/storage/post_images/' . $id . '/' . $random_name_two . '.' . $file_ext_two;
            }

            if ($request->hasFile('image_three')) {

                $image_three       = $request->file('image_three');
                $file_ext_three    = $image_three->extension();

                $image_resize_three = \Image::make($image_three->getRealPath());
                $image_resize_main->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_three = uniqid($id);
                $image_resize_three->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_three . '.' . $file_ext_three);
                $post_update->image_3 = '/storage/post_images/' . $id . '/' . $random_name_three . '.' . $file_ext_three;
            }

            if ($request->hasFile('image_four')) {

                $image_four       = $request->file('image_four');
                $file_ext_four   = $image_four->extension();

                $image_resize_four = \Image::make($image_four->getRealPath());
                $image_resize_main->resize(300, 200);

                // I am saying to create the dir if it's not there.
                \File::exists($path) or File::makeDirectory($path);
                $random_name_four = uniqid($id);
                $image_resize_four->text('vehiauto.com', 150, 100, function ($font) {
                    $font->size(70);
                    $font->color('#1CED33');
                    $font->align('center');
                    $font->valign('center');
                    $font->angle(10);
                })->save($path . $random_name_four . '.' . $file_ext_four);
                $post_update->image_4 = '/storage/post_images/' . $id . '/' . $random_name_four . '.' . $file_ext_four;
            }
            $post_update->post_title = $request->post_title;
            $post_update->post_type = $post_type;
            $post_update->condition = $request->condition;
            $post_update->price = $request->price;
            $post_update->additional_info = $request->additional_info;
            $post_update->location = $request->location;
            $post_update->address = $request->address;
            $post_update->save();

            $user = User::find($post_update->user_id)->first();
            Notification::send($user, new CustomerPostUpdatedNotification($user));

            DB::commit();
            return array('status' => 1, 'msg' => 'Post has Updated successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return array('status' => 0, 'msg' => 'Post Updation is Unsuccessfull!');
        }
    }

    public function removePost($post_id)
    {
        try {
            $path = public_path('/storage/post_images/' . $post_id . '/');
            File::deleteDirectory($path);
            $post = Post::find($post_id);
            $post->delete();
            $user = User::find($post->user_id);
            Notification::send($user, new CustomerPostDeleteNotification($user));
            return array('status' => 1);
        } catch (\Exception $e) {
            return array('status' => 0);
        }
    }

    public function removeExpiredPost()
    {
        try {
            $prev_same_date = Carbon::now() . subYear();
            $get_expired_posts = Post::whereDate('create_at', $prev_same_date)->select('id')->get();

            foreach ($get_expired_posts as $get_expired_post) {
                $post_id = $get_expired_post->id;
                $path = public_path('/storage/post_images/' . $post_id . '/');
                File::deleteDirectory($path);
                $get_expired_post->delete();
            }
            return array('status' => 1);
        } catch (\Exception $ex) {
            return array('status' => 0);
        }
    }

    public function changePostAsSold($id)
    {
        $selected_post = Post::find($id);
        $selected_post->status = 1;
        $selected_post->save();
        $user = User::find($selected_post->user_id);
        Notification::send($user, new CustomerPostStatusChangedNotification($user));
        if ($selected_post == true) {
            return array('status' => 1, 'msg' => 'Successfully changed the status');
        } else {
            return array('status' => 0, 'msg' => 'Status change was unsuccessful');
        }
    }

    public function vehiclePostCount()
    {
        return Post::where('post_type', 'VEHI')->count();
    }

    public function sparePartsCount()
    {
        return Post::where('post_type', 'SPARE')->count();
    }

    public function wantedPostCount()
    {
        return Post::where('post_type', 'WAN')->count();
    }

    public function saledPostCount()
    {
        return Post::where('status', 1)->count();
    }

    public function pendingSaleCount()
    {
        return Post::where('status', 0)->count();
    }

    public function getMonthlySales()
    {
        $thisYear = Carbon::now()->format('Y');

        //vehicle sales
        $januaryVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '01')->count();
        $februaryVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '02')->count();
        $marchVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '03')->count();
        $aprilVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '04')->count();
        $mayVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '05')->count();
        $juneVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '06')->count();
        $julyVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '07')->count();
        $auguestVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '08')->count();
        $septemberVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '09')->count();
        $octomberVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '10')->count();
        $novemberVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '11')->count();
        $decemberVehiSales = Post::where('post_type', 'VEHI')->where('status', 1)->whereYear('created_at', $thisYear)->whereMonth('created_at', '12')->count();

        //pending sales
        $januaryPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '01')->count();
        $februaryPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '02')->count();
        $marchPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '03')->count();
        $aprilPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '04')->count();
        $mayPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '05')->count();
        $junePendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '06')->count();
        $julyPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '07')->count();
        $auguestPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '08')->count();
        $septemberPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '09')->count();
        $octomberPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '10')->count();
        $novemberPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '11')->count();
        $decemberPendingSales = Post::where('post_type', 'VEHI')->where('status', 0)->whereYear('created_at', $thisYear)->whereMonth('created_at', '12')->count();

        $vehicleSaleArray = [$januaryVehiSales, $februaryVehiSales, $marchVehiSales, $aprilVehiSales, $mayVehiSales, $juneVehiSales, $julyVehiSales, $auguestVehiSales, $septemberVehiSales, $octomberVehiSales, $novemberVehiSales, $decemberVehiSales];
        $pendingSaleArray = [$januaryPendingSales, $februaryPendingSales, $marchPendingSales, $aprilPendingSales, $mayPendingSales, $junePendingSales, $julyPendingSales, $auguestPendingSales, $septemberPendingSales, $octomberPendingSales, $novemberPendingSales, $decemberPendingSales];

        return ['vehicle_sales' => $vehicleSaleArray, 'pending_sales' => $pendingSaleArray];
    }

    public function getHeighestSoldVehicles()
    {
        $thisYear = Carbon::now()->format('Y');
        $thisMonth = Carbon::now()->format('m');

        return Post::where('status', 1)
            ->whereYear('posts.created_at', $thisYear)
            ->whereMonth('posts.created_at', $thisMonth)
            ->where('posts.post_type', 'VEHI')
            ->join('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->join('vehicle_makes', 'vehicles.make_id', 'vehicle_makes.id')
            ->select('vehicles.make_id', 'vehicle_makes.make_name', 'posts.created_at')
            ->groupBy('vehicles.make_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(10)
            ->get()
            ->toArray();
    }

    public function getYearlySales()
    {
        $posts = Post::where('status', 1)
            ->select(
                DB::raw("(COUNT(*)) as count"),
                DB::raw("YEAR(created_at) as year")
            )
            ->orderBy('created_at', 'DESC')
            ->groupBy('year')
            ->get()->toArray();

        $year_array = [0];
        $count_array = [0];

        foreach ($posts as $post) {
            $year_array[] = $post['year'];
            $count_array[] = $post['count'];
        }

        return ['years' => $year_array, 'counts' => $count_array];
    }

    public function vehicleTypeWiseSales()
    {
        $posts = Post::join('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->where('posts.status', 1)
            ->select(
                DB::raw("(COUNT(*)) as count"),
                DB::raw("vehicles.model as label")
            )
            ->groupBy('vehicles.model')
            ->get()
            ->toArray();

        $lables = [];
        $count_array = [];

        foreach ($posts as $post) {
            $lables[] = $post['label'];
            $count_array[] = $post['count'];
        }

        return ['labels' => $lables, 'counts' => $count_array];
    }

    public function getPercentages()
    {
        $saled_vehicle_count = Post::where('post_type', 'VEHI')->where('status', 1)->count();
        $pending_vehicle_count = Post::where('post_type', 'VEHI')->where('status', 0)->count();
        $all_vehicle_count = Post::where('post_type', 'VEHI')->count();

        $saled_vehicle_per = $saled_vehicle_count /  $all_vehicle_count * 100;
        $pending_vehicle_per = $pending_vehicle_count /  $all_vehicle_count * 100;

        return array('saled_vehi_per' => $saled_vehicle_per, 'pending_vehi_per' => $pending_vehicle_per);
    }

    public function getHeighestSellers()
    {
        $thisYear = Carbon::now()->format('Y');
        $thisMonth = Carbon::now()->format('m');

        return Post::where('status', 1)
            ->whereYear('posts.created_at', $thisYear)
            ->whereMonth('posts.created_at', $thisMonth)
            ->where('posts.post_type', 'VEHI')
            ->join('users', 'posts.user_id', 'users.id')
            ->join('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->join('vehicle_makes', 'vehicles.make_id', 'vehicle_makes.id')
            ->select('users.user_name as seller_name', 'vehicles.make_id', 'vehicle_makes.make_name', 'posts.created_at')
            ->groupBy('users.user_name')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(10)
            ->get()
            ->toArray();
    }

    public function searchPosts($request)
    {
        $posts = Post::where('post_title', 'LIKE', "%{$request->searched_key}%")->get();
        return $posts;
    }

    public function getTrendingPosts()
    {
        $thisYear = Carbon::now()->format('Y');
        $thisMonth = Carbon::now()->format('m');

        $trending_posts = Post::where('view_count', '>=', 999)
            ->join('users', 'posts.user_id', 'users.id')
            ->leftjoin('vehicles', 'posts.vehicle_id', 'vehicles.id')
            ->whereYear('posts.created_at', $thisYear)
            ->whereMonth('posts.created_at', $thisMonth)
            ->select(
                'posts.id',
                'posts.view_count',
                'posts.main_image',
                'posts.post_title',
                'posts.location',
                'posts.price',
                'vehicles.millage',
                'posts.created_at',
                'users.user_name',
            )
            ->groupBy('posts.view_count')
            ->orderBy('view_count', 'DESC')
            ->limit(5)
            ->get();

        return $trending_posts;
    }

    public function mostFavouredPosts()
    {
        $most_favoured_posts = UserFavourite::select('post_id')
            ->groupBy('post_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(1)
            ->with('post')
            ->get();
        return $most_favoured_posts;
    }
}
