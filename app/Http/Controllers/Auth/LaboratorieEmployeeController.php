<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LaboratorieEmployeeLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaboratorieEmployeeController extends Controller
{
    public function store(LaboratorieEmployeeLoginRequest $request){
  
            if (auth()->guard('laboratorie_employee')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {
            
         
                return redirect()->intended(RouteServiceProvider::LABORATORIEEmployee);
        }
        return redirect()->back()->withErrors(['name' => (trans('Dashboard/auth.failed'))]);

    }

    public function destroy(Request $request)
    {
        Auth::guard('ray_employee')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}