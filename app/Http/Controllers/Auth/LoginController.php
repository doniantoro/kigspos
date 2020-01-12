<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected function redirectTo() {
        
    }
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);
        if (auth()->attempt(['username' => $request->username, 'password' => $request->password, 'user_level_id' => 1])) {
            return redirect()->intended('/dashboard');
        } else if(auth()->attempt(['username' => $request->username, 'password' => $request->password, 'user_level_id' => 2])) {
            return redirect()->intended('/kigspos');
        }

        return redirect()->back()->with(['error' => 'Password Invalid']);
    }
}
