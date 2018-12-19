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
      $datas = [];
      foreach ($files as $key => $file) {
        if ($file->isValid()) {
          $datas['old_name'] = $file->getClientOriginalName();
          $datas['new_name'] = str_random(5). "-" .date('YmdHis').".". $file->getClientOriginalExtension();
          $datas['path'] = "attachement/".$data->id.'/';
          $datas['size'] = $file->getClientSize();
          $datas['data_user_id'] = $data->id;
          $datas['user_id'] = Auth::user()->id;
          $file->move(public_path($datas['path']), $datas['new_name']);
          Attachment::insert($datas);

        }
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
    //
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
