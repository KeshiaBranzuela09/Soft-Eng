<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Teacher\DashboardController as TeacherDashboardController;
use App\Http\Controllers\Student\DashboardController as StudentDashboardController;

class AuthenticationController extends Controller
{
    //
    public function loginView() 
    {
        return view('authentication.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'usn' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('usn', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();

            $user->update([
                'last_login' => now(),
            ]);        

            switch ($user->role) {
                case 0: // Student
                    return redirect()->route('student.dashboard.index');
                case 1: // Teacher
                    return redirect()->route('teacher.dashboard.index');
                case 2: // Admin
                    return redirect()->route('admin.dashboard.index');
                default:
                    Auth::logout();
                    return redirect()->route('login.view')->withErrors([
                        'usn' => 'Unauthorized role.',
                    ]);
            }
        }

        return back()->withErrors([
            'usn' => 'Invalid USN or Password.',
        ]);
    }

    
}
