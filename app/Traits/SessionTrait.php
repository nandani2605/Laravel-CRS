<?php

namespace App\Traits;

use App\Models\Gym;
use App\Models\RegisterUser;
use Illuminate\Support\Facades\Session;

trait SessionTrait
{

    public function storeGymSession(RegisterUser $user)
    {
        session(['uuid' => $user->uuid]);
    }

    public function getGymSession()
    {
        $uuid = Session::get('uuid');

        return
            [
                'uuid' => $uuid
            ];
    }

}
