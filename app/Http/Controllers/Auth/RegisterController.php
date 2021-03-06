<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\Guest\StoreUserRequest;
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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(StoreUserRequest $data)
    {
    $u= User::where('email',$data['user_email'])->first();
    if(!empty($u))
        {
//         Session::flash('warning', 'A user with tha email already exists. Login to continue.');
        return back()->withErrors(['user_email' => ['The email is already registered. Please login to continue.']]);
        }
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['user_email'],
            'password' => bcrypt($data['user_password']),
            'role_id' => 1,
            'first_name' => $data["first_name"],
            'last_name' => $data["last_name"],
            'physical_address' => $data["physical_address"],
            'phone_number' => $data["phone_number"],
        ]);
        return back()->withErrors(['registration' => ['You successfully registered. Please login to continue.']]);
    }

}
