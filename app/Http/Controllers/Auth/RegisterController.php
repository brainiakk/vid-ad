<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\EmailConfirmation;
use App\Models\User;
use App\Models\VerifyUser;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
            'phone_number' => ['required', 'string', 'max:50', 'unique:users'],
            'location' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'gender' => 'required|string|max:255'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create($data);

//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
    }
//    public function register(Request $request)
//    {
//        // $this->validator($request->all())->validate();
//
//        // event(new Registered($user = $this->create($request->all())));
//        $user = new User;
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->phone_number = $request->phone_number;
//        $user->password = Hash::make($request->password);
//        $user->save();
//
//        $user->roles()->attach(2);
//        $verifyUser = VerifyUser::create([
//            'user_id' => $user->id,
//            'token' => sha1(time()),
//        ]);
//        if ($user != null) {
//            //Mail::to($user->email)->send(new EmailConfirmation($user));
//            // MailController::sendSignupEmail($user->name, $user->email);
//        }
//        $this->guard()->logout();
//        return redirect('/login')->with('status', 'We sent you an activation code. Check your email and click on the link to verify.');
//    }
//
//    public function verifyUser($token)
//    {
//        $verifyUser = VerifyUser::where('token', $token)->first();
//        if (isset($verifyUser)) {
//            $user = $verifyUser->user;
//            if (!$user->verified) {
//                $verifyUser->user->verified = 1;
//                $verifyUser->user->is_active = 1;
//                $verifyUser->user->save();
//                $status = "Your e-mail is verified. You can now login.";
//            } else {
//                $status = "Your e-mail is already verified. You can now login.";
//            }
//        } else {
//            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
//        }
//        return redirect('/login')->with('status', $status);
//    }
}
