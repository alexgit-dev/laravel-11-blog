<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
//        dump([
//            'facade' => Auth::check(),
//            'helper' => \auth()->check(),
//        ]);


//        User::query()->create([
//            'name' => 'Admin',
//            'email' => 'admin@mail.com',
//            'password' => '123456',
//        ]);

        return view('admin.index');
    }
}
