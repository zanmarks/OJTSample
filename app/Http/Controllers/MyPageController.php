<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accounts;
use App\Models\account_information;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MyPageController extends Controller
{
    public function Home_page()
    {
        $email = session('email');
        $password = session('password'); 

        if (!$email || !$password) {
            return redirect()->route('login')->with('error', 'Session expired. Please log in again.');
        }

        $user_info = DB::table('accounts as a')
            ->join('account_information as ai', 'a.id', '=', 'ai.account_id')
            ->select('a.*', 'ai.*')
            ->where('a.email', $email)
            ->first();

        if (!$user_info) {
            return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
        }

        return view('homePage', compact('user_info'));
    }
}
