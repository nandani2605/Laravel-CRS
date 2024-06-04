<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\CarList;

class CarListController extends Controller
{
    protected $carList;

    public function __construct(
        CarList $carList,
    ) {
        $this->carList = $carList;
    }
    public function create()
    {
        return view('admin.carList');
    }

    /**
     * Store a newly created car in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car-img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'make-model' => 'required|string|max:255',
            'year' => 'required|integer|min:1886|max:' . date('Y'),
            'type' => 'required|string|max:255',
            'engine' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'mileage' => 'required|string|max:255',
            'seating-capacity' => 'required|integer|min:1|max:50',
            'color' => 'required|string|max:255',
            'features' => 'nullable|string',
            'hourly-rate' => 'required|numeric|min:0',
            'daily-rate' => 'required|numeric|min:0',
            'weekly-rate' => 'required|numeric|min:0',
            'monthly-rate' => 'required|numeric|min:0',
            'security-deposit' => 'required|numeric|min:0',
            'insurance' => 'required|string|max:255',
            'fuel-policy' => 'required|string|max:255',
            'late-return-fee' => 'required|numeric|min:0',
            'payment-methods' => 'nullable|string',
            'age-requirement' => 'nullable|string',
            'booking-confirmation' => 'nullable|string',
            'cancellation-policy' => 'nullable|string',
            'damage-policy' => 'nullable|string',
            'mileage-limit' => 'nullable|string',
            'how-to-book' => 'nullable|string',
        ]);

        // Store the car image
        if ($request->hasFile('car-img')) {
            $imageName = time() . '.' . $request->file('car-img')->extension();
            $request->file('car-img')->move(public_path('images'), $imageName);
            $validatedData['car_img'] = $imageName; // Adjusted field name to match the database column
        }

        // Create a new car
        try {
            $carList = new CarList();
            $carList->createCarList($validatedData);
            return redirect()->back()->with('success', 'Registered Succesfully.');
        }catch (Exception $e) {
                //  dd($e);
                Log::error('[CarListController][carList.store] Error register gym: ' . $e->getMessage());
                return redirect()->route('carList.store')->with('status', 'error')->with('message', 'error in register gym.');
            }
    }
}
