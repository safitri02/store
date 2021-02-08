<?php
namespace App\Http\Controllers;
use App\User;
use Hash;
use SweetAlert;
use Validator;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // echo "Masuk";
        return view('login.login');
    }

    public function proses_login(Request $req)
    {
        // return $req;
        $data = [
            'email' => $req->input('email'),
            'password' => $req->input('password')
        ];

        Auth::attempt($data);
        
        if(Auth()->user()->level=="penjual"){
            // echo "Masuk penjual";
            return redirect('/penjual');
        }elseif(Auth()->user()->level=="pembeli"){
            // echo "Masuk pembeli";
            return redirect('/produk');
        } else{
            echo "Email atau password salah";
        }
    }

    public function register()
    {
        return view('login.register');
    }

    public function proses_register(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'level' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        // return $req;
        User::create([
        'name' => $req->name,
        'email' => $req->email,
        'level' => $req->level,
        'password' => bcrypt($req->password)
        ]);

        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
   
}
