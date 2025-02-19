<?php

namespace App\Http\Controllers;

use App\Fakers\Ecommerce;
use App\Fakers\Transactions;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Fakers\Countries;
class Dashboard extends Controller
{
    public function index(): View
    {
        return view('app/dashboard/index',[
            'ecommerce' => Ecommerce::fakePerformanceInsights(),
            'transactions' => Transactions::fakeTransactions(),
            'countries' => Countries::fakeCountries(),
            'first_login' => auth()->user()->first_login,
        ]);
    }
}
