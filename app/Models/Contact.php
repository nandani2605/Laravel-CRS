<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Log;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'number',
        'email',
        'subject',
        'body'
    ];

    public function createContactDetail(array $validatedData)
    {
        try {
            return $this->create([
                'name'    => $validatedData['name'],
                'number'  => $validatedData['number'],
                'email'   => $validatedData['email'],
                'subject' => $validatedData['subject'],
                'body'    => $validatedData['body'],
            ]);
        } catch (\Throwable $e) {
            Log::error('[Contact][createContactDetail] Error adding admin subscription: ' . $e->getMessage());
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
