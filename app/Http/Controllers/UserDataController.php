<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Alert\Facades\Alert;
use App\Models\GroupData;
use App\Models\DataUser;

use Auth, Carbon\Carbon;

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
      $input = $request->except("_token", 'attachement');

      $input['user_id'] = Auth::user()->id;

      if (!empty($request->date1))
      $input['date1'] = Carbon::createFromFormat('d/m/Y', $request->date1)->format('Y-m-d');

      if (!empty($request->date2))
      $input['date2'] = Carbon::createFromFormat('d/m/Y', $request->date2)->format('Y-m-d');

      $file = $request->file('attachment');

      // if ($request->hasFile('attachment')) {
      //   if ($file->valide()) {
      //     $name_file = str_random(5).date('YmdHis'). ".". $file->getClientOriginalExtension();
      //     $path = 'uploadfile/' .Auth::user()->id . '/upload';
      //     $file->move(public_path($path), $name_file);
      //     $input['attachment'] = json_encode([
      //       'old_name' => $file->getClientOriginalName();
      //       'new_name' => $name_file,
      //       'path' => $path
      //
      //     ]);
      //   }
      // }

      $data = new DataUser($input);
      $data->save();

          Alert::info('บันทึกรายการเรียบร้อย ...');
          return back();
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
