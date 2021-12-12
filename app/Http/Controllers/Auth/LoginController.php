<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Notifications\TwoFactorCode;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
//    protected $redirectTo = '/admin';
//    protected $redirectTo = RouteServiceProvider::HOME;

    public function redirectTo() {
        $role = Auth::user()->user_type;

        switch ($role) {
            case 'admin':
                return '/admin';
                break;
            case 'super_admin':
                return '/super-admin';
                break;

            case 'moderator':
                return '/moderator';
                break;
                
            default:
                return '/home';
                break;
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function authenticated($request, $user)
    {

        if (!$user->verified) {
            auth()->logout();
            return back()->with('warning', 'You need to confirm your account. We have sent you an activation code, please check your email.');
        }

        $user->generateTwoFactorCode();
        // $user->notify(new TwoFactorCode());

        if (!in_array('admin', $user->roles->pluck('name')->toArray())) {
            $this->redirectTo = '/verify';
        }

    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function credentials(Request $request)
    {
        return ['email' => $request->{$this->username()}, 'password' => $request->password, 'is_active' => '1'];
    }

}
