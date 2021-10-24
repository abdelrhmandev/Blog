<?php
namespace App\Http\Controllers\admin\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Password;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Passwords\PasswordBroker;
use Auth;
use Helper;

class ResetPasswordController extends Controller
{
 
    public function __construct()
    {
        $guard = Helper::admin_guard_name();   
        $this->middleware("guest:$guard");
    }
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
    public function redirectTo()
    {
        return Helper::admin_url();
    }

    /**
     * Get the path the user should be redirected to after password reset.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return string
     */
 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
  

    // -------------------------------------------------------
    // Laravel overwrites for loading backpack views
    // -------------------------------------------------------

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param \Illuminate\Http\Request $request
     * @param string|null              $token
     *
     * @return \Illuminate\Http\Response
     */
    public function showResetForm(Request $request, $token = null)
    {
        // $this->data['title'] = trans('backpack::base.reset_password'); // set the page title

 

        
        $this->data['title'] = 'bla bla';
        return view('admin.auth.passwords.reset', $this->data)->with(
            ['token' => $token, 'email' => $request->email]
        );
    }


    public function reset(Request $request){
 

        $request->validate($this->rules(), $this->validationErrorMessages());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );
    
    
        return $response == Password::PASSWORD_RESET
        ? $this->sendResetResponse($request, $response)
        : $this->sendResetFailedResponse($request, $response);

        //return redirect()->route('admin.dashboard')->with('status', 'Your password has been changed!');
      

    }
 
    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }

    /**
     * Get the guard to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard(){
        return Helper::guard_auth();
    }
}
