<?php

namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\ResetsPasswords;


class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
  
    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }
    public function getReset($id)
    {
        $user = User::find($id);
        return View('auth.passwords.password-reset')->withUser($user);
    }
    public function postReset(Request $request , $id)
    {
        $user = User::find($id);
        
if (Hash::check($request->input('old-password'),$user->password)) {
          
       
                $this->validate($request, [
                    'password' => 'required|same:password-confirm|alpha_dash|max:255',
                ]);
              $user = User::find($id);
              $user->password = Hash::make($request->input('password'));
              $user->save();
              Session::flash('success' , 'Your Password Change Successfuly');
              return redirect('/');
     
        }
        else{
            Session::flash('err','The Old Password Was Wrong !!');
            return redirect()->back();
        }
   }
}
