<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect admins after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.pages.login');
    }
    /**
 * @param Request $request
 * @return \Illuminate\Http\RedirectResponse
 * @throws \Illuminate\Validation\ValidationException
 */
    public function login(Request $request)
    {
        $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
    ]);
        if (Auth::guard('admin')->attempt(
            [
        'email' => $request->email,
        'password' => $request->password
        ],
            $request->get('remember')
        )) {
            return redirect()->intended(route('admin.dashboard'));
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    /**
 * @param Request $request
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }
    
    // public function index()
    // {
    //     if (!Auth::check()) {
    //         return view('admin.pages.login');
    //     }
    //     return Redirect::to("dashboard");
    // }
 
    // public function registration()
    // {
    //     return view('admin.pages.register');
    // }
     
    // public function postLogin(Request $request)
    // {
    //     request()->validate([
    //     'email' => 'required',
    //     'password' => 'required',
    //     ]);
 
    //     $credentials = $request->only('email', 'password');
       

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         return redirect()->intended('dashboard');
    //     }
    //     return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    // }
 
    // public function postRegistration(Request $request)
    // {
    //     request()->validate([
    //     'name' => 'required',
    //     'email' => 'required|email|unique:users',
    //     'password' => 'required|min:6',
    //     ]);
         
    //     $data = $request->all();
 
    //     $check = $this->create($data);
       
    //     return Redirect::to("dashboard")->withSuccess('Great! You have Successfully loggedin');
    // }
     
    // public function dashboard()
    // {
    //     if (Auth::check()) {
    //         return view('admin.pages.home');
    //     }
    //     return Redirect::to("login")->withSuccess('Opps! You do not have access');
    // }
 
    // public function create(array $data)
    // {
    //     return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }
     
    // public function logout()
    // {
    //     Session::flush();
    //     Auth::logout();
    //     return Redirect('login');
    // }
}