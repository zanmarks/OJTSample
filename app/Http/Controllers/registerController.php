<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accounts;
use App\Models\account_information;

class registerController extends Controller
{
    public function register_account(Request $request)
    {
        $request->validate([
            'Firstname' => 'required|string',
            'Lastname' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('profile_pic')) {
            $profilePicPath = $request->file('profile_pic')->store('profile_pics', 'public'); 
        } else {
            $profilePicPath = null;
        }

        $User_account = accounts::create([
            'email' => $request->email,
            'password' => $request->password
        ]);

        account_information::create([
            'first_name' => $request->Firstname,
            'last_name' => $request->Lastname,
            'phone_number' => $request->phone,
            'profile_picture' => $profilePicPath, 
            'account_id' => $User_account->id,
        ]);

        return response()->json(['message' => 'registered successfully.']);
    }
}
