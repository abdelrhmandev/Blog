$request->only('email'),$this->resetNotifier()

<?php
namespace App\Http\Controllers\admin\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Cache\RateLimiter;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
class ForgotPasswordController extends Controller
{
    protected $data = []; // the information we send to the view

    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    /*
    * أقصى عدد للإرسال في يوم واحد
    * */

    private $attempt_max = 3;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    
        $this->middleware('guest');
    }

    // -------------------------------------------------------
    // Laravel overwrites for loading backpack views
    // -------------------------------------------------------

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
 

        return view('admin.auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request){
        $this->validateEmail($request);

        // تحديد ما إذا كان هناك عدد كبير جدًا من رسائل البريد الإلكتروني المرسلة
        if ($this->hasTooManyResetEmailAttempts($request)) {
            event(new Lockout($request));
            return $this->sendLockoutResponse();
        }


        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            array_merge(
                $request->only('email'),
                ['token' => null]
            )
        );

        return $response == Password::RESET_LINK_SENT
            ? $this->sendResetLinkResponse($response)
            : $this->sendResetLinkFailedResponse($request, $response);
    }

    public function getMinutesDecay()
    {
        $timestamp_end = strtotime(date('Y-m-d', strtotime('+1 day')));
        return floor(($timestamp_end - time()) / 60);
    }

    * عدد الايميلات المرسلة المدة يوم واحد
    * @param Request $request
    */
   public function incrementResetEmailAttempts(Request $request)
   {
       $minutes_decay = $this->getMinutesDecay();
       app(RateLimiter::class)->hit(
           $this->throttleKey($request), $minutes_decay
       );
   }


    protected function sendLockoutResponse()
    {
        throw ValidationException::withMessages([
            'email' => [Lang::get('auth.reset_email')],
        ])->status(423);
    }
    protected function hasTooManyResetEmailAttempts(Request $request)
    {
        return app(RateLimiter::class)->tooManyAttempts(
            $this->throttleKey($request), $this->attempt_max
        );
    }
      private function throttleKey(Request $request): string
    {
        return $request->ip() . '_reset_email';
    }
    
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return $request->wantsJson()
                    ? new JsonResponse(['message' => trans($response)], 200)
                    : back()->with('status', trans($response));
    }
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        if ($request->wantsJson()) {
            throw ValidationException::withMessages([
                'email' => [trans($response)],
            ]);
        }

        return back()
                ->withInput($request->only('email'))
                ->withErrors(['email' => trans($response)]);
    }
    
// overwritte function resetNotifier() on trait SendsPasswordResetEmails
 
    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }
}

