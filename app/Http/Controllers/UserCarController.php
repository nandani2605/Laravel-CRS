<?php

namespace App\Http\Controllers;

use App\Models\CarList;
use Illuminate\Http\Request;

class UserCarController extends Controller
{
    protected $cardetail;

    public function __construct(CarList $cardetail) {
        $this->cardetail = $cardetail;
    }

    public function viewCar(Request $request , $uuid)
    {
        // Fetch the specific car based on ID
        $cardetails = $this->cardetail->where('uuid' , $uuid)->first();
        // dd($cardetails);
        return view('car1', compact('cardetails'));
    }

    public function viewServices()
    {
        $cardetails = $this->cardetail->all();
        return view('services', compact('cardetails'));
    }
}
