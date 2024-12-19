<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accounts;
use App\Models\account_information;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function verifyAccount(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = accounts::where('email', $request->email)->where('password', $request->password)->first();
        if($user)
        {
            Session('email', $request->email);
            Session('password', $request->password);

            return response()->json(['message' => 'Login Successfully']);
        }
        else{
            return response()->json(['messageError' => 'Invalid email or password']);
        }
        
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
