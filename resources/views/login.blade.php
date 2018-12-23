@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        เข้าสู่ระบบ
      </li>
    </ol>
  </nav>
    <br>
    @if (!Auth::check())
    <h2 class="header-h">Sign in</h2>
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        {{-- รับทำเว็บไซต์ เขียนโปรแกรม ออกแบบเว็บไซต์ ทำการตลาดออนไลน์ --}}
        {{-- https://www.facebook.com/cheetah.programming/ --}}
        {{Form::open(['method'=>'POST'])}}
          <div class="control-group">
            <div class="form-group floating-label-form-group controls {{ old('email') != null ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('email') ? 'is-invalid' : '' }}">
              <label>Email</label>
              @if ($errors->has('email'))
                <div class="is-valide-message">
                  {{ $errors->first('email') }}
                </div>
              @endif
              {{ Form::text('email', null, ['class'=>"form-control", 'placeholder'=>"Email"]) }}
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls  {{ old('password') != null ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('password') ? 'is-invalid' : '' }}">
              <label>Password</label>
              @if ($errors->has('password'))
                <div class="is-valide-message">
                  {{ $errors->first('password') }}
                </div>
              @endif

              {{ Form::password('password', ['class'=>"form-control", 'placeholder'=>"Password"]) }}

              <p class="help-block text-danger"></p>
            </div>
          </div>


          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="">Login</button>
          </div>
          <div class="form-group">
            <a href="{{ url('register') }}" class="pull-left" id="">สมัครใช้บริการ</a>
            <a href="{{ url('forget-password') }}" class="pull-right" id="">ลืม Password</a>
          </div>
        {{Form::close()}}
      </div>
    </div>
  @endif

@endsection
