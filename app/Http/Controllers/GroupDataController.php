<?php

namespace App\Http\Controllers;

use App\Models\GroupData;
use Illuminate\Http\Request;
use Vinkla\Alert\Facades\Alert;

class GroupDataController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $items = GroupData::paginate();

    return view('group-data', compact('items'));
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

    $gd = new GroupData($request->all());

    $gd->save();

    Alert::info('บันทึกรายการเรียบร้อย ...');

    return redirect()->route('group-data.index');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\Models\GroupData  $groupData
  * @return \Illuminate\Http\Response
  */
  public function show(GroupData $groupData, $id)
  {

  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\Models\GroupData  $groupData
  * @return \Illuminate\Http\Response
  */
  public function edit(GroupData $groupData, $id)
  {

    $item = $groupData->find($id);

    $items = GroupData::paginate();

    return view('group-data', compact('items', 'item'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\Models\GroupData  $groupData
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, GroupData $groupData, $id)
  {
    $gd =  $groupData->find($id);
    $gd->update($request->all());
    $gd->save();

    Alert::info('แก้ไขข้อมูลเรียบร้อย ...');

    return redirect()->route('group-data.index');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  \App\Models\GroupData  $groupData
  * @return \Illuminate\Http\Response
  */
  public function destroy(GroupData $groupData, $id)
  {

    $gd =  $groupData->destroy($id);

    Alert::info('ลบข้อมูลเรียบร้อย ...');

    return redirect()->route('group-data.index');
  }
}
