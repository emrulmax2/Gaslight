<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{


    public function index(): View
    {
        return view('pages/register');
    }
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            //'g-recaptcha-response' => 'required',
            // other validation rules...
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:admin,engineer',
            'terms' => 'required',
        ]);

        // $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => env('RECAPTCHA_SECRET_KEY'),
            
        //     'response' => $request->input('g-recaptcha-response'),
        // ]);

        // $responseBody = json_decode($response->body());

        // if (!$responseBody->success) {
        //     return back()->withErrors(['captcha' => 'reCAPTCHA verification failed.']);
        // }

        // Proceed with registration...
        //implement a user account with the given credentials...

        // Create the user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // bcrypt($request->input('password')),
            'role' => $request->input('role'),
        ]);
        event(new Registered($user));

        if (!Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])) {
            throw new \Exception('Wrong email or password.');
        } else {
            User::where('id', auth()->user()->id)->update([
                'last_login_ip' => $request->getClientIp(),
                'last_login_at' => Carbon::now()
            ]);
        }
        // Optionally, you can assign the role using a role management package like Spatie's Laravel-Permission
        // $user->assignRole($request->input('role'));

       // return redirect('login')->with('success', 'A verification email sent to your email. Please check your email.');

       return response()->json(['success' => 'Registration successful!'], 200);
    }
}
