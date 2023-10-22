<?php

namespace App\Http\Controllers;

use App\Models\Kader;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view("pages.auth.login");
    }

    public function prosesLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect("/")->with("success", "Login Berhsail");
        };

        return back()->withErrors([
            'email' => 'Login Gagal. Akun tidak ditemukan',
        ])->onlyInput('email');
    }

    public function register()
    {
        return view("pages.auth.register");
    }

    public function prosesRegister(Request $request)
    {
        $request->validate([
            "nama" => 'required|string',
            'email' => 'required|unique:users,email',
            'nomor_telepon' => 'required|unique:kaders,nomor_telepon',
            "foto_ktp" => "required|image",
            "foto_diri" => "required|image",
            "password" => "required|string"
        ]);

        DB::beginTransaction();

        try {

           $user = User::create([
                'name' => $request->nama,
                "email" => $request->email,
                "password" => Hash::make($request->password)
            ]);

            $fotoDiri = $request->foto_diri->store("kader", "public");
            $foto_ktp = $request->foto_ktp->store("kader", "public");

            $kader = Kader::create([
                "user_id" => $user->id,
                "nomor_telepon" => $request->nomor_telepon,
                "foto_diri" => $fotoDiri,
                "foto_ktp" => $foto_ktp
            ]);

            DB::commit();

            if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {

                return redirect("/")->with("success", "Registrasi Berhasil");
            }

            return abort(500);

        } catch (Exception $th) {
            DB::rollBack();
            dd($th);
            return redirect()->back()->with("error", "Gagal Register");
        }



    }
}
