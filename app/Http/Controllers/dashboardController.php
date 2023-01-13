<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class dashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view("adminNew.profile", ['user' => $user]);
    }
}
