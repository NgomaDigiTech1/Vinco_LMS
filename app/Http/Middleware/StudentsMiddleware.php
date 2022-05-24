<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use App\Enums\RoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role_id == RoleEnum::STUDENT) {
            return $next($request);
        }

        if (Auth::user()->role_id == RoleEnum::PROFESSOR) {
            return redirect()->route('');
        }

        if (Auth::user()->role_id == RoleEnum::CHEF_COURSES) {
            return redirect()->route('');
        }

        if (Auth::user()->role_id == RoleEnum::DEPARTMENT) {
            return redirect()->route('');
        }

        if (Auth::user()->role_id == RoleEnum::CAMPUS) {
            return redirect()->route('');
        }

        if (Auth::user()->role_id == RoleEnum::ADMIN) {
            return redirect()->route('admins.backend.home');
        }
    }
}
