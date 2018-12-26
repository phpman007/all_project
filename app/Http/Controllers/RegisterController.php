<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Model;
use App\Models\Suggestion;
use Hash, Auth;
use Vinkla\Alert\Facades\Alert;
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
  public function forget(Request $request) {
    $request->validate(['email'=>'required|email', 'question_forget_password' => 'required', 'answer_forget_password' => 'required']);

    $user = Model::where('email', $request->email)->first();

    if  (empty($user)) {
      Alert::info('ไม่พบข้อมูลผู้ใช้งานระบบ กรุณาตรวจสอบใหม่อีกครั้ง');
      return back();
    }

    if ($user->question_forget_password != $request->question_forget_password && $user->answer_forget_password != $request->answer_forget_password) {
      Alert::info('คำถาม คำตอบไม่ถูกต้อง กรุณาตรวจสอบใหม่อีกครั้ง');
      return back();
    }
    $random = str_random(10);

    $user->password = \Hash::make($random);

    $user->save();

    $user->str_password = $random;

    \Mail::send('email.forget-password', ['data' => $user],
    function ($message) use ($user)
    {
      $message
      ->from('nukdev001@gmail.com')
      ->to($user->email)->subject('Change Password');
    });
    return redirect('/');
  }

  public function suggestion () {
    return view('suggestion');
  }
  public function suggestionPost(Request $request) {
    \File::put(public_path('suggestion.txt'), $request->name);
    return redirect('suggestion');
  }
  public function suggestionSave () {
    return view('suggestion-save');
  }
  public function postSuggestion(Request $request) {
      // $request->validate(['email'=>'email|required', 'captcha' => 'required|captcha']);

      $inputs = $request->only(['email', 'detail']);

        $s = new Suggestion($inputs);
        $s->save();

      Alert::info('บันทึกข้อมูลเรียบร้อยแล้ว');

      return back();
  }

  public function suggestionReport() {
    return view('suggestion-report', ['items' => Suggestion::paginate() ]);
  }

  public function suggestionReportView($id) {
    $item = Suggestion::find($id);

    $item->status = 1;

    $item->save();

    return view('suggestion-report-view', ['item' => $item ]);

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
