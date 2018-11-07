<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Account;
use Carbon;
use App\User;
use App\Package;
use App\Subscription;
use App\Http\Resources\Dashboard;

class AccountController extends Controller
{
    public function home($account_id)
    {
        return Dashboard::collection(Account::withoutGlobalScopes()->where('id', $account_id)->get());
    }
}
