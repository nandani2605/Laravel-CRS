<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Log;

class CarList extends Model
{
    use HasFactory;
    protected $fillable = [
        'make_model', 'year', 'type', 'engine', 'transmission', 'mileage',
        'seating_capacity', 'color', 'features', 'hourly_rate', 'daily_rate',
        'weekly_rate', 'monthly_rate', 'security_deposit', 'insurance',
        'fuel_policy', 'late_return_fee', 'payment_methods', 'age_requirement',
        'booking_confirmation', 'cancellation_policy', 'damage_policy',
        'mileage_limit', 'how_to_book'
    ];
    public function createCarList(array $validatedData)
    {
        try {
            return $this->create([
                'make_model'       => $validatedData['make_model'],
                'year'             => $validatedData['year'],
                'type'             => $validatedData['type'],
                'engine'           => $validatedData['engine'],
                'transmission'     => $validatedData['transmission'],
                'mileage'          => $validatedData['mileage'],
                'seating_capacity' => $validatedData['seating_capacity'],
                'color'            => $validatedData['color'],
                'features'         => $validatedData['features'],
                'hourly_rate'      => $validatedData['hourly_rate'],
                'daily_rate'       => $validatedData['daily_rate'],
                'weekly_rate'      => $validatedData['weekly_rate'],
                'monthly_rate'     => $validatedData['monthly_rate'],
                'security_deposit' => $validatedData['security_deposit'],
                'insurance'        => $validatedData['insurance'],
                'fuel_policy'      => $validatedData['fuel_policy'],
                'late_return_fee'  => $validatedData['late_return_fee'],
                'payment_methods'  => $validatedData['payment_methods'],
                'age_requirement'  => $validatedData['age_requirement'],
                'booking_confirmation' => $validatedData['booking_confirmation'],
                'cancellation_policy'  => $validatedData['cancellation_policy'],
                'damage_policy'        => $validatedData['damage_policy'],
                'mileage_limit'        => $validatedData['mileage_limit'],
                'how_to_book'          => $validatedData['how_to_book']
            ]);
        } catch (\Throwable $e) {
            Log::error('[CarList][createCarList] Error adding admin subscription: ' . $e->getMessage());
        }
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}
