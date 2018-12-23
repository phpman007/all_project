@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        @if (!isset($user))
          สมัครใช้บริการ
        @else
          แก้ไขข้อมูลส่วนตัว
        @endif
      </li>
    </ol>
  </nav>
  <br>
  <h2 class="header-h">
    @if (!isset($user))
      สมัครใช้บริการ
    @else
      แก้ไขข้อมูลส่วนตัว
    @endif
    </h2>
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <form name="sentMessage" method="POST" id="contactForm" novalidate="">
        {!! csrf_field() !!}
        <div class="control-group">
          <div class="form-group  floating-label-form-group controls {{ old('name') != null || isset($user)  ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('name') ? 'is-invalid' : '' }}">
            <label>ชื่อ - นามสกุล</label>
            @if ($errors->has('name'))
              <div class="is-valide-message">
                {{ $errors->first('name') }}
              </div>
            @endif
            {!! Form::text('name', $user->name, [
              'class' => "form-control",
              'placeholder' => "ชื่อ - นามสกุล"
              ]) !!}

              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls {{ old('province') != null || isset($user)  ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('province') ? 'is-invalid' : '' }}">
              <label>จังหวัดที่ท่านอาศัยอยู่</label>
              @if ($errors->has('province'))
                <div class="is-valide-message">
                  {{ $errors->first('province') }}
                </div>
              @endif
              {!! Form::text('province', $user->province, [
                'class' => "form-control",
                'placeholder' => "จังหวัดที่ท่านอาศัยอยู่"
                ]) !!}

                <p class="help-block text-danger"></p>
              </div>
            </div>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls {{ old('email') != null || isset($user) ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('email') ? 'is-invalid' : '' }}">
                <label>Email</label>
                @if ($errors->has('email'))
                  <div class="is-valide-message">
                    {{ $errors->first('email') }}
                  </div>
                @endif
                @if($user == null)
                  {!! Form::text('email', $user->email, [
                    'class' => "form-control",
                    'placeholder' => "Email"
                    ]) !!}
                  @else
                    {{ $user->email }}
                  @endif
                  <p class="help-block text-danger "></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls {{ old('password') != null || isset($user)  ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('password') ? 'is-invalid' : '' }}">
                  <label>Password</label>
                  @if ($errors->has('password'))
                    <div class="is-valide-message">
                      {{ $errors->first('password') }}
                    </div>
                  @endif
                  {{ Form::password('password', [
                    'class' => "form-control",
                    'placeholder' => "Password"
                    ] ) }}

                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <div class="control-group">
                  <div class="form-group floating-label-form-group controls {{ old('password_confirmation') != null || isset($user)  ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
                    <label>Confirm Password</label>
                    @if ($errors->has('password_confirmation'))
                      <div class="is-valide-message">
                        {{ $errors->first('password_confirmation') }}
                      </div>
                    @endif
                    {{ Form::password('password_confirmation', [
                      'class' => "form-control",
                      'placeholder' => "Confirm Password"
                      ] ) }}
                      <p class="help-block text-danger"></p>
                    </div>
                  </div>


                  <br><br>
                  <h5 class="header-h">คำถาม คำตอบกู้ Password</h5>

                  <div class="control-group">
                    <div class="form-group floating-label-form-group controls {{ old('question_forget_password') != null || isset($user)  ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('question_forget_password') ? 'is-invalid' : '' }}">
                      <label>คำถาม</label>
                      @if ($errors->has('question_forget_password'))
                        <div class="is-valide-message">
                          {{ $errors->first('question_forget_password') }}
                        </div>
                      @endif
                      {!! Form::text('question_forget_password', $user->question_forget_password, [
                        'class' => "form-control",
                        'placeholder' => "คำถาม"
                        ]) !!}
                        <p class="help-block text-danger"></p>
                      </div>
                    </div>

                    <div class="control-group">
                      <div class="form-group floating-label-form-group controls {{ old('answer_forget_password') != null || isset($user)  ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('answer_forget_password') ? 'is-invalid' : '' }}">
                        <label>คำตอบ</label>
                        @if ($errors->has('answer_forget_password'))
                          <div class="is-valide-message">
                            {{ $errors->first('answer_forget_password') }}
                          </div>
                        @endif
                        {!! Form::text('answer_forget_password', $user->answer_forget_password, [
                          'class' => "form-control",
                          'placeholder' => "คำตอบ"
                          ]) !!}

                          <p class="help-block text-danger"></p>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="control-group">
                            <div class="form-group ">
                              @if ($errors->has('agree'))
                                <div class="is-valide-message" style="bottom: 0px;font-size: 12px;">
                                  {{ $errors->first('agree') }}
                                </div>
                              @endif
                              @if (!isset($user))
                                <label class="container-checkbox"> I have read and agree to the
                                  <a href="#"data-toggle="collapse" data-target="#collapse">Terms of Service</a>
                                  <input name="agree" type="checkbox" value='1'>
                                  <span class="checkmark"></span>
                                </label>

                                <div id="collapse" class="collapse" style="margin-top:15px">
                                  <div class="card card-body">
                                    {!! config('fields.policy') !!}
                                  </div>
                                </div>
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div id="success"></div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="">

                          @if (!isset($user))
                            ลงทะเบียน
                          @else
                            บันทึก
                          @endif
                        </button>
                      </div>
                      <br>

                      @if (!isset($user))
                      <div class="form-group">
                        <a href="{{ url('register') }}" class="pull-left" id="">เข้าสู่ระบบ</a>
                        <a href="{{ url('forget-password') }}" class="pull-right" id="">ลืม Password</a>
                      </div>
                    @endif
                    </form>
                  </div>
                </div>
              @stop
