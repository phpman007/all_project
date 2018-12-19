<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Model;
use Hash, Auth;
class RegisterController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('register');
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('register');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $rules = [
      'name' => config('fields.name.validate'),
      'province' => config('fields.province.validate'),
      'email' => config('fields.email.validate').'|unique:users',
      'password' => config('fields.password.validate').'|confirmed',
      'password_confirmation' => config('fields.password_confirmation.validate'),
      'answer_forget_password' => config('fields.answer_forget_password.validate'),
      'question_forget_password' => config('fields.question_forget_password.validate')
    ];
    $request->validate($rules);

    if($request->agree != 1) {
      return back()->withErrors(['agree'=>'ท่านยังไม่ได้ยื่นยันการอ่านเงื่อนไขที่กำหนด'])->withInput();
    }
    $input = $request->except('_token', 'agree', 'password_confirmation');
    $input['user_group'] = 0;
    $input['password'] = Hash::make($input['password']);
    Model::insert($input);
    return redirect('/')->with('status', ['status'=>true, 'txt'=>'']);
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit()
  {
    $user = Auth::user();
    return view('register', compact('user'));

  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request)
  {
    $rules = [
      'name' => config('fields.name.validate'),
      'province' => config('fields.province.validate'),

      'answer_forget_password' => config('fields.answer_forget_password.validate'),
      'question_forget_password' => config('fields.question_forget_password.validate')
    ];
    if (!empty($request->password)) {
      $rules['password'] = config('fields.password.validate');
      $rules['password_confirmation'] = config('fields.password.validate');
    }
    $request->validate($rules);


    $input = $request->except('_token', 'password', 'password_confirmation');

    Auth::user()->update($input);

    if (!empty($request->password)) {
      Auth::user()->update(['password'=>Hash::make($request->password)]);
    }

    return redirect('/')->with('status', ['status'=>true, 'txt'=>'']);
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    //
  }
}
