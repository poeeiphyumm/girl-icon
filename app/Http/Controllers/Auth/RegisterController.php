<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');

    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
<<<<<<< HEAD
            'phone' => ['required','max:12'],
            'address' => ['required'],
=======
            'phone' => ['required', 'string', 'max:12'],
            'address' => ['required']
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
<<<<<<< HEAD
        $user=User::create([
=======
<<<<<<< HEAD
        $user=User::create([
=======
        $user= User::create([
>>>>>>> c823a218b85d6629a8a81c4c5aa98b77f5310fb1
>>>>>>> 697a619dc35e92c422ead583f187d4bcb701916a
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
        ]);
        $user->assignRole('Customer');

        return $user;
    }
    protected function redirectTo()
    {
        $roles = auth()->user()->getRoleNames();

        // Check user role
        switch ($roles[0]) {
            case 'Admin':
                    return 'dashboard';
                break;
            case 'Customer':
                    return 'booking';
                break; 
            default:
                    return '/';  
                break;
        }
    }
}