<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class DashboardController extends Controller
{
    public function index()
    {
        $accounts=Account::all();
        return view('admin.dashboard')->with('accounts', $accounts);
    }
}
