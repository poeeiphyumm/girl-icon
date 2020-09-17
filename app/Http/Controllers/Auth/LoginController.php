<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

<<<<<<< HEAD

    // public function FunctionName($value='')
    // {
    //     # code...
    // }

=======
     
>>>>>>> b42146a0187ce37e06f8fd0ff2b6c9f7465cc3f9
    protected function authenticated(Request $request, $user)
    {
        //role user
        $roles=$user->getRoleNames();

        //check user role
        switch ($roles[0]) {
            case 'Admin':
                 return redirect('dashboard');
                break;

            case 'Customer':
                  return redirect('/');
                break;
            
            default: return redirect('/');
                break;
        }
    }

}