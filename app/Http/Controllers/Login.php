<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register( Request $request)
    {
        DB::table('tb1_user')->insert([
            'nama_user' => $request->nama,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('/login');
        
    }

    public function enter( Request $request)
    {
        $user = DB::table('tb1_user')->where('email', $request->email)->first();
        if ($user->password == $request->password) {
            
            Session::put('id_user', $user->id);
            echo 'Data disimpan dengan sesion id = '.$request->session()->get('id'); 
            return redirect('/');

        } else {
            
            echo "Anda gagal login";
        
        }
    }

    public function logout()
    {
        Session::forget('id_user');
        
        return redirect('/login');
    }
}
