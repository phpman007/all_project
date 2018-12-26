<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Model;
use Hash, Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Vinkla\Alert\Facades\Alert;
class LoginController extends Controller
{
    use ThrottlesLogins;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('login');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
      $rules = [
        'email' => config('fields.email.validate'),
        'password' => config('fields.password.validate'),
      ];

      $request->validate($rules);

      $user = Model::where('email', $request->email)->first();

      if (empty($user)) {
        // if ($this->hasTooManyLoginAttempts($request)) {
        //   $this->fireLockoutEvent($request);
        //   return $this->sendLockoutResponse($request);
        // }
        //
        // if(attempt()) {
        //   $this->clearLoginAttempts($request);
        // }else {
        //   $this->incrementLoginAttempts($request);
        // }
        return back()->withInput()->withErrors(['email'=> 'Email หรือ Password ไม่ตรงกับที่กำหนด กรุณาตรวจสอบ Username และ Password อีกครั้ง']);
      }

      if (!Hash::check($request->password, $user->password)) {
        // if ($this->hasTooManyLoginAttempts($request)) {
        //   $this->fireLockoutEvent($request);
        //   return $this->sendLockoutResponse($request);
        // }
        //
        // if(attempt()) {
        //   $this->clearLoginAttempts($request);
        // }else {
        //   $this->incrementLoginAttempts($request);
        // }
        return back()->withInput()->withErrors(['email'=> 'Email หรือ Password ไม่ตรงกับที่กำหนด กรุณาตรวจสอบ Username และ Password อีกครั้ง']);
      }

      if ( $user->user_group == 1) {
        Auth::guard('admin')->login($user);
        Auth::login($user);
        Alert::info('ยินดีต้อนรับผู้ดูแลระบบ '. $user->name. ' เข้าสู่ระบบ');
      } else {
        Auth::login($user);
        Alert::info('ยินดีต้อนรับ '. $user->name. ' เข้าสู่ระบบ');
      }

      return redirect('/report-data')->with('status', ['status'=>true, 'txt'=>'']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        if (Auth::check()) {

          Auth::logout();

        }

        if (Auth::guard('admin')->check()) {

            Auth::guard('admin')->logout();

        }

        Alert::info('ออกจากระบบ เรียบร้อยแล้วขอบคุณที่ใช้บริการ');
        return redirect('/')->with('status', ['status'=>true, 'txt'=>'']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
