<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

final class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     */
    protected string $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'lastName' => ['required', 'string', 'max:255'],
            'role' => ['required', Rule::exists('roles', 'id')],
            'phones' => ['required', 'min:10'],
        ]);
    }

    protected function create(array $data): Model|Builder
    {
        $user = User::query()
            ->create([
                'name' => $data['name'],
                'email' => $data['email'],
                'lastName' => $data['lastName'],
                'phones' => $data['phones'],
                'password' => Hash::make($data['password']),
            ]);

        $user->assignRole($data['role']);

        return $user;
    }
}
