<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Logs the user out of the application

        $request->session()->invalidate(); // Invalidates the current session
        $request->session()->regenerateToken(); // Regenerates the CSRF token

        return redirect('/logout'); // Redirect to the homepage or any other route after logout
    }
}
