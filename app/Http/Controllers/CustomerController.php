<?php

namespace App\Http\Controllers;

use App\Repositories\customer\CustomerRepository;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    private $customerRepository;

    function __construct(CustomerRepository $customerRepository){
        $this->customerRepository = $customerRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.CustomerRegister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->customerRepository->createCustomer($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return $this->showCustomers();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function updateBasicData(Request $request, $id)
    {
        return $this->customerRepository->updateBasicData($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        return $this->customerRepository->removeCustomer();
    }

    public function email_nic_exist(Request $request)
    {
        return $this->customerRepository->isEmailNicExist($request);
    }

    public function logout()
    {
        return $this->customerRepository->logout();
    }

    public function myProfile()
    {
        return $this->customerRepository->myProfile();
    }

    public function changePassword(Request $request, $id)
    {
        return $this->customerRepository->changePassword($request, $id);
    }
}
