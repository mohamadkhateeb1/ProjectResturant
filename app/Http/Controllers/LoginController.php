<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index', ['error' => session('error')]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
    }
    public function store(Request $request)
    {
    if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->intended('index');
    }
    return redirect('/loginForm')->withErrors(['error' => 'الايميل أو كلمة المرور غير صحيحة']);
    }



    public function destroy(string $id)
    {
        //
    }
}
