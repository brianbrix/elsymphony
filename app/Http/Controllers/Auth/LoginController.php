<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use View;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Validator;
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
    public function redirectTo(){
        $role = Auth::user()->role->id;
        if($role==1){
            return 'admin/dashboard';
                }
               else if($role==2){
                  return '/';
                    }
                else
                {
                return 'account';
                }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return View::make('guest.login');
    }

    public function doRegister(Request $request)
        {
         $input = $request->all();
        $validator = Validator::make(
           $input,
            array(
                'email' => 'email|unique:users',
                'password' => 'required'
            )
        );


            if($input['password']!=$input['confirm_password'])
            {
           $msg = 'The passwords do not match!';

             $validator->getMessageBag()->add('password', $msg);
             return redirect()->back()->withErrors($validator)->withInput();
            }
            else{
            $input['password'] = Hash::make($input['password']);
            $user = User::where('email', $request->get('email'))->first();
            $user2 = User::where('phone_number', $request->get('phone_number'))->first();
              if((! empty($user) && ! empty($user->password)) || (! empty($user2) && ! empty($user2->password) )) {
                                          # tell user not to duplicate same email
              $msg = 'A user with that email or phone number already exists !';

              $validator->getMessageBag()->add('email', $msg);
                           return redirect()->back()->withErrors($validator)->withInput();
                  }
                  else
                  {
                if(! empty($user)){
               if(empty($user->password))
               {
                $user = User::where('email', $request->get('email'))->first()->update($input);
               }
               }
               else{
               $input["role_id"]=2;


             $userr = User::create($input);


//             $this->registered($request, $userr);
            return redirect('login')->with('message', 'Successful registration');
            }}
            }
        }
}
