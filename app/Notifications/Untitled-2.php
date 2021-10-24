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
 
    use SendsPasswordResetEmails;
  
    public function __construct(){
 
        $this->middleware('guest');
    }
 
    public function showLinkRequestForm(){
 

        return view('admin.auth.passwords.email');
    }

    public function sendResetLinkEmail(Request $request){
        $this->validateEmail($request);
 
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
    
 
    public function broker()
    {
        return Password::broker();
    }
}
