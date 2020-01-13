<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Socialite\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {

        $userSocial = Socialite::driver('facebook')->user();

        //check if user exists and log user in

        $user = User::where('email', $userSocial->user['email'])->first();
        if ($user) {
            if (Auth::loginUsingId($user->id)) {
                // return redirect()->route('home');
                return $user->id;
            }
        }


        //else sign the user up
        $userSignup = User::create([
            'name' => $userSocial->user['name'],
            'email' => $userSocial->user['email'],
            'password' => $userSocial->user['id'],
            'date_of_birth' => '2000.01.01'
            // 'password' => Hash::make($userSocial ->user ['id'])
        ]);

        //finally log the user in
        if ($userSignup) {
            if (Auth::loginUsingId($userSignup->id)) {
                return redirect()->route('home');
            }
        }




        // $newUser = dd($userSocial);
        // return $newUser;

        // $driver = Socialite::driver('facebook')->fields([
        //     'name',
        //     'id',
        //     'first_name',
        //     'last_name',
        //     'email',
        //     'verified',
        //     'birthday'
        //     ]);
        // // retrieve the user
        // $userSocial = $driver->user();
        // $userSocial = Socialite::driver('facebook')->user();

        // return $userSocial->name;

        // $user = new User;

        // $user -> first_name = $userSocial->user['first_name'];
        // $user -> first_name = $userSocial->user['last_name'];
        // $user -> email = $userSocial->user['email'];
        // $user -> username = $userSocial->user['first_name'];
        // $user -> date_of_birth = $userSocial->user['birthday'];
        // $user -> password = $userSocial->user['id'];
        // $user->save();

        // Auth::login($userSocial->email);
        // return 'done';

    }
}
