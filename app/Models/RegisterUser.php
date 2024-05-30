<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\SessionTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;

class RegisterUser extends Authenticatable
{
    use HasFactory;

    use SessionTrait;

    protected $fillable = [
        'full_name',
        'email',
        'address',
        'phone_no',
        'username',
        'password'
    ];

    public function createUserAccount(array $registerUser)
    {
        try {
            return $this->create([
                'full_name'  => $registerUser['full_name'],
                'email'             => $registerUser['email'],
                'address'           => $registerUser['address'],
                'phone_no'        => $registerUser['phone_no'],
                'username'            => $registerUser['username'],
                'password'         => $registerUser['password'],
            ]);
        } catch (\Throwable $e) {
            Log::error('[RegisterUser][createUserAccount] Error adding admin subscription: ' . $e->getMessage());
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
