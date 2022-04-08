<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;
use App\Mail\SendMailAdmin;
use Illuminate\Support\Facades\Mail;
use Socialite;
use Auth;
use Exception;
use App\User;
use App\Role;


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

    public function redirectToProvider($provider)
    {
       return Socialite::driver($provider)->redirect();
    }
    public function handleProviderCallback($provider)
    {
       try {
           $user = Socialite::driver($provider)->user();
       } catch (Exception $e) {
           return redirect('/login');
       }
       $authUser = $this->checkUser($user, $provider);
       Auth::login($authUser, true);
       return redirect($this->redirectTo);
    }
    public function checkUser($providerUser, $provider)
    {
      $account = User::where('provider', $provider)
                ->where('provider_id', $providerUser->getId())
                ->first();
      if ($account) {
          return $account->user;
      } else {
           $user = User::where('email', $providerUser->getEmail())
          ->first();
          if (! $user) {
              $user = User::create([
                'email' => $providerUser->getEmail(),
                'name'  => $providerUser->getName(),
                'provider_id'   => $providerUser->getId(),
                'provider' => $provider,
              ]);
          }

          MailController::SendMailRegister($user->email);
          MailController::SendMailAdmin();


            // $admin = 'usamaprogrammar61@gamil.com';
            // \Mail::to($admin)->send(new SendMailAdmin($admin));
          return $user;
      }
    }



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

    protected function authenticated(Request $request ,$user){
        if($user->role->name =='admin'){
            $this->redirectTo ='/admin/dashboard';
        }
    }
}
