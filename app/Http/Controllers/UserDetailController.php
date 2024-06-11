<?php

namespace App\Http\Controllers;

use App\Models\RegisterUser;
use App\Traits\SessionTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserDetailController extends Controller
{
    use SessionTrait;
    protected $user;

    public function __construct(
        RegisterUser $user,
    ) {
        $this->user = $user;
    }

    public function viewSignUp()
    {
        $status = null;
        $message = null;
        return view('sign-up', compact('status', 'message'));
    }

    public function viewSignIn()
    {
        $status = null;
        $message = null;
        return view('sign-in', compact('status', 'message'));
    }

    public function registerUser(Request $request)
    {

        try {
            $validatedData=$request->validate([
                'full_name' => 'required',
                'email' => 'required|email|unique:users',
                'address' => 'required',
                'phone_no' => 'required',
                'username' => 'required',
                'password' => 'required',
            ]);

            $user = $this->user->createUserAccount($validatedData);
            if ($user) {
                return redirect()->route('viewSignIn')->with('success', 'Registered Succesfully.');
            }
            return redirect()->route('viewSignUp')->with('status', 'error')->with('message', 'error in register gym.');
        } catch (Exception $e) {

            Log::error('[UserDetailController][registerUser] Error register gym: ' . $e->getMessage());
            return redirect()->route('viewSignUp')->with('status', 'error')->with('message', 'error in register gym.');
        }
    }

    public function userLogin(Request $request)
    {
        try {
            $credentials = $request->all();
            $user = $this->user->where([
                'email' => $credentials['email'],
                'password' => $credentials['password']
            ])->first();

            if (!$user) {
                session()->flush();
                return redirect()->back()->with('status', 'error')->with('message', 'Invalid credential');
            }
            $this->storeGymSession($user);
            return redirect('/')->with('status', 'success')->with('message', 'login successfully');
        } catch (Exception $e) {
            Log::error('[UserDetailController][userLogin] Error Login Gym ' . 'Request=' . $request . ', Exception=' . $e->getMessage());
            return redirect()->back()->with('status', 'error')->with('message', 'Invalid credentials or account is not active');
        }
    }
}
