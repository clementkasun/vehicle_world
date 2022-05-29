<?php

namespace App\Http\Controllers;

use App\Repositories\post\PostRepository;

class DashboardController extends Controller
{
    private $postRepository;

    function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $vehicle_count = $this->postRepository->vehiclePostCount();
        $spare_part_count = $this->postRepository->sparePartsCount();
        $saledPostCount = $this->postRepository->saledPostCount();
        $pending_post_count = $this->postRepository->pendingSaleCount();
        $heighest_sold_vehicles = $this->postRepository->getHeighestSoldVehicles();

        $data = ['vehicle_count' => $vehicle_count, 'spare_part_count' => $spare_part_count, 'saledPostCount' => $saledPostCount, 'pending_post_count' => $pending_post_count, 'heighest_sold_vehicles' => $heighest_sold_vehicles];

        return view('analysis', ['analysis' => $data]);
    }

    public function getCurrentYearSales()
    {
        return $this->postRepository->getCurrentYearSales();
    }
}
