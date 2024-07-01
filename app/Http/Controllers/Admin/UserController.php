<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereIn('role', [0, 1])->get();

        return view('admin.users.index', compact('users'));
    }



}
