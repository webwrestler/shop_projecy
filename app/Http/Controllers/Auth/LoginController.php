<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


/**
 * Class LoginController
 * @package App\Http\Controllers\Auth
 */
class LoginController extends Controller
{
    use ValidatesRequests;
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
    protected $redirectTo = '/admin';
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated()
    {

        if(Auth::User()->isAdmin()){
            return redirect('/admin');
        } else{
            return redirect()->route('shop');
        }
    }

    /**
     * Check either username or email.
     * @return string
     */
    public function username()
    {
        $identity  = request()->get('identity');
        $fieldName = filter_var($identity, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldName => $identity]);
        return $fieldName;
    }
/**
     * @param Request $request
     * @throws ValidationException
     */
    protected function sendFailedLoginResponse(Request $request)
    {;
        $request->session()->put('login_error', trans('auth.failed'));
        throw ValidationException::withMessages(
            [
                'error' => [trans('auth.failed')],
            ]
        );
    }

    public function logout(Request $request)
    {
      Auth::logout();
      return redirect()->route('shop');
    }
}
