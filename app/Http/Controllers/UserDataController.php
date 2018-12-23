<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Alert\Facades\Alert;
use App\Models\GroupData;
use App\Models\DataUser;
use App\Models\Attachment;

use Auth, Carbon\Carbon, DB;

class UserDataController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $groupData = GroupData::publish()->get()->pluck('title', 'id');

    return view('save-data', compact('groupData'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $rule = [
      'field1' => config('fields.field1.validate'),
      'field2' => config('fields.field2.validate'),
      'field3' => config('fields.field3.validate'),
      'field4' => config('fields.field4.validate'),
      'field5' => config('fields.field5.validate'),
      'field5' => config('fields.field5.validate'),
      'field6' => config('fields.field6.validate'),
      'date1' => config('fields.date1.validate'),
      'remark' => config('fields.remark.validate'),
      'attachment' => config('fields.attachment.validate'),
    ];
    $fields = [
      'field1' => config('fields.field1.field_name'),
      'field2' => config('fields.field2.field_name'),
      'field3' => config('fields.field3.field_name'),
      'field4' => config('fields.field4.field_name'),
      'field5' => config('fields.field5.field_name'),
      'field5' => config('fields.field5.field_name'),
      'field6' => config('fields.field6.field_name'),
      'date1' => config('fields.date1.field_name'),
      'remark' => config('fields.remark.field_name'),
      'attachment' => config('fields.attachment.field_name'),
    ];

    if ($request->text1 == 1) {
      $rule['field7'] =config('fields.field7.validate');
      $rule['field8'] =config('fields.field8.validate');
      $rule['field9'] =config('fields.field9.validate');

      $fields['field7'] = config('fields.field7.field_name');
      $fields['field8'] =config('fields.field8.field_name');
      $fields['field9'] =config('fields.field9.field_name');

    }

    if ($request->text2 == 1) {
      $rule['date2'] =config('fields.date2.validate');

      $fields['date2'] = config('fields.date2.field_name');
    }
    $request->validate($rule,[] , $fields);


    DB::beginTransaction();
    try {

      $input = $request->except("_token", 'attachement');

      $input['user_id'] = Auth::user()->id;

      if (!empty($request->date1))
      $input['date1'] = Carbon::createFromFormat('d/m/Y', $request->date1)
      ->format('Y-m-d');

      if (!empty($request->date2))
      $input['date2'] = Carbon::createFromFormat('d/m/Y', $request->date2)
      ->format('Y-m-d');



      $data = new DataUser($input);

      $data->save();



      $files = $request->attachement;
      foreach ($files as $key => $file) {

        $data->addMedia($file)->toMediaCollection('attachment', 'local');

      }



      Alert::info('บันทึกรายการเรียบร้อย ...');

      DB::commit();
    } catch (\Exception $e) {
      Alert::error('ไม่สามารถทำรายการได้ กรุณาลองใหม่อีกครั้ง ...');

      DB::rollBack();

      return back()->withInput();
    }
    return back();
  }

  public function mediaDelete($id, $me_id) {
    DataUser::find($id)->deleteMedia($me_id);
    return back();
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show()
  {
    $items = \App\User::where('id',Auth::user()->id)->with(['dataUser'])->first();

    $items = $items->dataUser()->with(['GroupData'])->paginate();


    return view('report-data', compact('items'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $groupData = GroupData::publish()->get()->pluck('title', 'id');
    $item = DataUser::find($id);
    return view('save-data', compact('groupData', 'item'));
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
    $rule = [
      'field1' => config('fields.field1.validate'),
      'field2' => config('fields.field2.validate'),
      'field3' => config('fields.field3.validate'),
      'field4' => config('fields.field4.validate'),
      'field5' => config('fields.field5.validate'),
      'field5' => config('fields.field5.validate'),
      'field6' => config('fields.field6.validate'),
      'date1' => config('fields.date1.validate'),
      'remark' => config('fields.remark.validate'),
      'attachment' => config('fields.attachment.validate'),
    ];
    $fields = [
      'field1' => config('fields.field1.field_name'),
      'field2' => config('fields.field2.field_name'),
      'field3' => config('fields.field3.field_name'),
      'field4' => config('fields.field4.field_name'),
      'field5' => config('fields.field5.field_name'),
      'field5' => config('fields.field5.field_name'),
      'field6' => config('fields.field6.field_name'),
      'date1' => config('fields.date1.field_name'),
      'remark' => config('fields.remark.field_name'),
      'attachment' => config('fields.attachment.field_name'),
    ];

    if ($request->text1 == 1) {
      $rule['field7'] =config('fields.field7.validate');
      $rule['field8'] =config('fields.field8.validate');
      $rule['field9'] =config('fields.field9.validate');

      $fields['field7'] = config('fields.field7.field_name');
      $fields['field8'] =config('fields.field8.field_name');
      $fields['field9'] =config('fields.field9.field_name');

    }

    if ($request->text2 == 1) {
      $rule['date2'] =config('fields.date2.validate');

      $fields['date2'] = config('fields.date2.field_name');
    }
    $request->validate($rule,[] , $fields);

    $input = $request->except("_token", 'attachement');

    $input['user_id'] = Auth::user()->id;

    if (!empty($request->date1))
    $input['date1'] = Carbon::createFromFormat('d/m/Y', $request->date1)
    ->format('Y-m-d');

    if (!empty($request->date2))
    $input['date2'] = Carbon::createFromFormat('d/m/Y', $request->date2)
    ->format('Y-m-d');



    $data = DataUser::find($id);

    $data->update($input);

    $files = $request->attachement;
    foreach ($files as $key => $file) {

      $data->addMedia($file)->toMediaCollection('attachment', 'local');

    }

    Alert::info('บันทึกรายการเรียบร้อย ...');
    return back();
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    DataUser::destroy($id);
    Alert::info('ลบข้อมูลเรียบร้อยแล้ว ...');
    return back();
  }
}
