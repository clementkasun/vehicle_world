<?php

namespace App\Repositories\customer;

interface CustomerInterface{
    public function createCustomer($request);
    public function updateBasicData($request, $id);
    public function showCustomers();
    public function changePassword($request, $id);
    public function removeCustomer();
    public function isEmailNicExist($request);
    public function myProfile(); 
    public function logout();  
}

?>