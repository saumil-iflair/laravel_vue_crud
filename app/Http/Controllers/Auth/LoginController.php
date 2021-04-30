<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;


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
        // if(role == 'admin' ){
        //     return view('home');
        //   }

        $this->middleware('guest')->except('logout');
        // dd("test");
    }

    public function checkAdminLogin(Request $request)
    {
        // dd($request->all());

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'],'role'=>'admin')))
        {

            return redirect()->route('home');

        }else{
            return redirect()->route('login')
            ->with('error','Only Admin can login from here');
        }
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'],'role'=>'user')))
        {

            return redirect()->route('home');

        }
        // else{
        //     return redirect()->route('login')
        //     ->with('error','Only User can login from here');
        // }

    }

}
