<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\PhoneNumber;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', new PhoneNumber],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $validatedData['avatar'] = 'img/avatar/' . substr($request->name, 0, 1) . '.png';
        $validatedData['code'] = bin2hex(random_bytes(20));

        $user = User::create($validatedData);

        $user->syncRoles('user');

        event(new Registered($user));

        Auth::login($user);
        if (session('car')) {
            return to_route('cars.index', session('car'));
        }
        if (session('activity')) {
            return to_route('activities.index', session('activity'));
        }
        if (session('transfer')) {
            return to_route('transfers.index', session('transfer'));
        }
    }
}
