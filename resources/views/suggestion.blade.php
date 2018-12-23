@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        ข้อเสนอแนะ
      </li>
    </ol>
  </nav>
  <br>
  <h2 class="header-h">
    ข้อเสนอแนะ
    @if(Auth::guard('admin')->check())
      <small><a href="suggestion/edit">แก้ไขข้อมูล</a></small>
    @endif
  </h2>
  <div class="row">
    <div class="col-lg-12 col-md-10 mx-auto">
{!! File::get(public_path('suggestion.txt')) !!}
    </div>
  </div>
@stop
