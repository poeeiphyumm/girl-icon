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
     protected function authenticated(Request $request, $user)
=======
    protected function authenticated(Request $request, $user)
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
        }
    }
=======
<<<<<<< HEAD
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
            }
        }
    }
<<<<<<< HEAD
=======
>>>>>>> 32b55295049e428919f0aaad170aa6c87f7c330e
>>>>>>> ff5dd49a8f07707e2aa043c7dc9411b741c96114
}
>>>>>>> 81011ab672b9183774899c38b26042145cf5e2a6
