<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\ResetPassword;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    public function ShowFromForgot() {
        return view("auth.passwords.email");
    }
    public function SendEmailPasss(Request $request) {
        $request->validate(["email" => "required|email"]);
        $user = User::where("email", $request->email)->first();

        if (empty($user)) {
            return redirect()->back()
            ->with('msg', $request->email . ' Email chưa đăng ký');
        }

        $token = Str::random(10);
        DB::table('password_reset_tokens')
        ->updateOrInsert(['email' => $request->email], [
            'email' => $request->email,
            'token' => $token,
            'created_at' => now(),
        ]);

        Mail::to($request->email)
        ->send(new ResetPassword( $token , $user));
        return redirect()->back()
         -> with('msg' , 'Check mail trong thư mục ');

    }
}
