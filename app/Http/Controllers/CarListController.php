<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\CarList;

class CarListController extends Controller
{
    protected $carList;

    public function __construct(CarList $carList)
    {
        $this->carList = $carList;
    }

    public function viewCarList()
    {
        $carLists = $this->carList->all();
        return view('admin.carList', compact('carLists'));
    }


    public function addCarList(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'car_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'make_model' => 'required|string|max:255',
                'year' => 'required|integer|min:1886|max:' . date('Y'),
                'type' => 'required|string|max:255',
                'engine' => 'required|string|max:255',
                'transmission' => 'required|string|max:255',
                'mileage' => 'required|string|max:255',
                'seating_capacity' => 'required|integer|min:1|max:50',
                'color' => 'required|string|max:255',
                'features' => 'nullable|string',
                'hourly_rate' => 'required|numeric|min:0',
                'daily_rate' => 'required|numeric|min:0',
                'weekly_rate' => 'required|numeric|min:0',
                'monthly_rate' => 'required|numeric|min:0',
                'security_deposit' => 'required|numeric|min:0',
                'insurance' => 'required|string|max:255',
                'fuel_policy' => 'required|string|max:255',
                'late_return_fee' => 'required|numeric|min:0',
                'payment_methods' => 'nullable|string',
                'age_requirement' => 'nullable|string',
                'booking_confirmation' => 'nullable|string',
                'cancellation_policy' => 'nullable|string',
                'damage_policy' => 'nullable|string',
                'mileage_limit' => 'nullable|string',
                'how_to_book' => 'nullable|string',
            ]);

            $imagePath = null;
            // Store the car image
            if ($request->hasFile('car_img')) {
                $carImage = $request->file('car_img');
                $filename = time() . '_' . $carImage->getClientOriginalName();
                $imagePath = 'car_images/' . $filename;

                try {
                    $carImage->move(public_path('car_images/'), $filename);
                } catch (Exception $e) {
                    Log::error('[CarListController][addCarList] Error moving uploaded file: ' . $e->getMessage());
                    return redirect()->route('addCarList')->with('status', 'error')->with('message', 'Error in uploading car image.');
                }
            }

            // Add the image path to the validated data
            $validatedData['car_img'] = $imagePath;

            // Create the car list entry
            $carList = $this->carList->createCarList($validatedData, $imagePath);
            if ($carList) {
                return redirect()->route('viewCarList')->with('success', 'Registered Successfully.');
            } else {
                return redirect()->route('addCarList')->with('error', 'Not Registered Successfully.');
            }
        } catch (Exception $e) {
            Log::error('[CarListController][addCarList] Error registering car: ' . $e->getMessage());
            return redirect()->route('addCarList')->with('status', 'error')->with('message', 'Error in registering car.');
        }
    }
}
