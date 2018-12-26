@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
        <li class="breadcrumb-item"><a href="{{url('/suggestion')}}">ข้อเสนอแนะ</a></li>
    </ol>
  </nav>
  <br>
  <h2 class="header-h">
    ข้อเสนอแนะ

    @if(Auth::guard('admin')->check())
        <small><a href="{{url('suggestion/report')}}">ดูรายการ</a></small>
    @endif
  </h2>
  <div class="row">
    <form class="" method="post">
      {{csrf_field()}}
      @if(!Auth::check())

        <div class="col-lg-12 col-md-10 mx-auto form-group {{$errors->has('email') ? "has-error" : ""}}">

          <label>Email</label>
        {{Form::text('email', null , ['placeholder'=>"Email ในการติดต่อกลับ", 'class'=>"form-control"])}}
        @if ($errors->has('email'))
          <div class="is-valide-message">
            {{ $errors->first('email') }}
          </div>
        @endif
      </div>
      <br>
      @else
        <input type="hidden" name="email" value="{{Auth::user()->email}}">
      @endif
      <div class="col-lg-12 col-md-10 mx-auto form-group">
        <label>รายละเอียด</label>
        {{Form::textarea('detail', null, ['id'=>'summernote'])}}
      </div>
      <div class="col-lg-5 col-md-5 mx-auto form-group  {{$errors->has('captcha') ? "has-error" : ""}}">
      {!! captcha_img() !!}
      <input type="text" name="captcha" class="form-control">
      @if ($errors->has('captcha'))
        <div class="is-valide-message">
          {{ $errors->first('captcha') }}
        </div>
      @endif
      </div>
      <br>
      <div class="col-lg-12 col-md-10 mx-auto form-group">
        <button class="btn btn-info" type="submit" name="button">บันทึกข้อมูล</button>
      </div>

    </form>

  </div>




@stop
