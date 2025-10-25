<?php

namespace App\Http\Controllers\Auth;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Laravel\Socialite\Facades\Socialite;


class CustomerController extends Controller
{
    use RegistersUsers;
    use AuthenticatesUsers {
        AuthenticatesUsers::credentials insteadof SendsPasswordResetEmails;
    }
    use SendsPasswordResetEmails {
        SendsPasswordResetEmails::credentials as resetCredentials;
    }

    protected $redirectTo = '/customer-account';

    function showLoginForm()
    {
        return view('auth.customers.login');
    }

    function showRegisterForm()
    {
        return view('auth.customers.register');
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['nullable', 'string', 'unique:customers'],
            'address' => ['nullable', 'string'],
        ]);
    }

    protected function create(array $data)
    {
        return Customer::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'phone'    => $data['phone'] ?? null,
            'address'  => $data['address'] ?? null,
        ]);
    }
    function viewDashboard(){
        
        return view('frontend.customer-account');
    }

    function googleLogin(){
         return Socialite::driver('google')->redirect();
    }

   function googleRedirectUrl(){
    $user = Socialite::driver('google')->stateless()->user();

    $customer = Customer::updateOrCreate([
        'email' => $user->email,
    ],[
        'name' => $user->name,
        'email' => $user->email,
        'password' => Hash::make(uniqid()),
    ]);

    Auth::guard('customer')->login($customer);
    return view('frontend.customer-account');
   }

// Facebook login redirect
public function redirectToFacebook()
{
    return Socialite::driver('facebook')->redirect();
}

// Facebook callback
public function handleFacebookCallback()
{
    $facebookUser = Socialite::driver('facebook')->stateless()->user();

    $customer = Customer::updateOrCreate(
        ['email' => $facebookUser->getEmail()],
        [
            'name' => $facebookUser->getName(),
            'email' => $facebookUser->getEmail(),
            'password' => Hash::make(uniqid()), // random password
        ]
    );

    Auth::guard('customer')->login($customer);

    return redirect()->route('customer.account');
}

}
