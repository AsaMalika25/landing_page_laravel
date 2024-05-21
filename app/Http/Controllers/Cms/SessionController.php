<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class SessionController extends Controller
{
    public function index()
    {
        // dd('test');
        return view("Login.login");
    }
    public function loginpage(Request $request)
    {


        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect('dashboard-cms')->with('success','login success');
        } else {
            return redirect()->back()->withErrors('The entered username and password do not match');
        }
    }
    public function login(Request $request)
    {


        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required'
        ]);
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($data)) {
            return response()->json(['msg' => 'success']);
        } else {
            return response()->json(['msg' => 'failed']);
        }
    }


    public function Logout()
    {
        // dd('test');
        // Auth::logout();
        Session::flush();
        return redirect('sesi')->with('success', 'success logout');
    }

    public function register()
    {
        return view('Login.register');
    }
    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ], [
            'nama.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'The email entered is invalid',
            'email.unique' => 'Email already in use, please enter another email',
            'password.required' => 'Password is required',
            'password.min' => 'Minimum 8 character password'
        ]);

        $CekUser = user::where('email', $request->email)->first();

        if ($CekUser) {
            return redirect()->back()->with('Email already registered');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            // 'passwords' => $request->password,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ];

        // dd($data);

        User::create($data);

        // $infologin = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];


        return redirect('login')->with('success', $request->name . 'success register');
    }

    public  function sendemail(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->email;

        $data = user::where('email', $email)->first();

        // dd($data);

        if ($data) {

            $token = $this->generateRandomString(10);
            $savetoken = DB::table('password_resets')->insert([
                'id_user' => $data->id,
                'email' => $email,
                'token' => $token,
                'status' => '1'
            ]);

            if (!$savetoken) {
                return redirect()->back();
            }

            $datauser = [
                'name' => $data->name,
                'email' => $data->email,
                'token' =>  $token
            ];

            // dd($datauser);

            Mail::send('emails.reset-password', $datauser, function ($message) use ($datauser, $email) {
                $message->to($email)->subject('reset password');
                // $message->from(env('MAIL_USERNAME'), 'abdi');
                $message->from('asab6956@gmail.com', 'abdi');
            });

            return redirect()->back()->with('Berhasil mengirim email');
        } else {
            return redirect()->back()->with('email tidak ditemukan');
        }
    }

    public function forgetpassword()
    {
        return view('Auth.email');
    }

    public function resetpassword($email, $token)
    {
        $CekDataReset = DB::Table('password_resets')->where('email', $email)
            ->where('token', $token)->first();

        if ($CekDataReset) {

            return view('Auth.reset');
        } else {
            return redirect()->to('lupa-password');
        }
    }
    public function updatepassword(Request $request, $email, $token)
    {
        $request->validate([
            'password' => 'required|min:8|confirmed'
        ]);

        $CekDataReset = DB::Table('password_resets')->where('email', $email)
            ->where('token', $token)->first();

        if ($CekDataReset) {

            $updatepassword = user::where('id', $CekDataReset->id_user)
                ->update([
                    'password' => Hash::make($request->password),

                ]);
            if ($updatepassword) {
                $CekDataReset = DB::Table('password_resets')->where('email', $email)
                    ->where('token', $token)->update([
                        'status' => '2'
                    ]);
                return redirect('login');
            } else {
                return redirect()->to('reset-password/{email}/{token}');
            }
        }
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
