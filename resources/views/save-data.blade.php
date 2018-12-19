@extends('template')
@section('content')

  <br>
  <h2 class="header-h">ข้อมูลที่ต้องการบันทึก <small class="pull-right" style="font-size:15px">บันทึกข้อมูล xxxxxxxxxxxx | ข้อมูล xxxxxxxxxxxx</small></h2>

  <div class="row">
    <div class="col-lg-12 col-md-12">
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
      {{Form::open(['method'=>'POST', 'files'=>true])}}
        <div class="row">
          <div class="col-md-5">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                <label>ชื่อ - นามสกุล</label>
                <input type="text" class="form-control" readonly placeholder="Email" id="name" required="" data-validation-required-message="Please enter your name." value="{{ Auth::user()->name }}" aria-invalid="false">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                <label>จังหวัด</label>
                <input type="text" class="form-control" readonly placeholder="Email" id="name" required="" data-validation-required-message="Please enter your name." value="{{ Auth::user()->province }}" aria-invalid="false">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                <label>Email</label>
                <input type="text" class="form-control" readonly placeholder="Email" id="name" required="" data-validation-required-message="Please enter your name." value=" xxxxxxxx@xxxxx.com" aria-invalid="false">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                <label>{{ config('fields.field1.field_name') }}
                  @if (Auth::guard('admin')->check())
                  <a href="{{ route('group-data.index') }}" style="padding: 0px 5px;" class="btn btn-sm btn-info">+ add</a>
                  @endif
                </label>
                {{Form::select('field1', $groupData, null, ['class'=>'form-control', 'placeholder'=> 'select option'])}}
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field2.field_name') }}</label>
                {{Form::text('field2', null, ['class'=>"form-control", 'placeholder'=>"Field2"])}}
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field3.field_name') }}</label>
                {{Form::text('field3', null, ['class'=>"form-control", 'placeholder'=>"Field3"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field4.field_name') }}</label>

                {{Form::text('field4', null, ['class'=>"form-control", 'placeholder'=>"Field4"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.date1.field_name') }}</label>

                {{Form::text('date1', null, ['id'=> 'datepicker1','class'=>"form-control datepicker", 'placeholder'=>"Date1"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">

          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field5.field_name') }}</label>
                {{Form::text('field5', null, ['class'=>"form-control", 'placeholder'=>"Field5"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field6.field_name') }}</label>

                {{Form::text('field6', null, ['class'=>"form-control", 'placeholder'=>"Field6"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group ">
                <label class="container-checkbox"> {{ config('fields.text1.field_name') }}
                  {{Form::checkbox('text1', 1, false)}}
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field7.field_name') }}</label>

                {{Form::text('field7', null, ['class'=>"form-control", 'placeholder'=>"Field7"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field8.field_name') }}</label>

                {{Form::text('field8', null, ['class'=>"form-control", 'placeholder'=>"Field8"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field9.field_name') }}</label>

                {{Form::text('field9', null, ['class'=>"form-control", 'placeholder'=>"Field9"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group ">
                <label class="container-checkbox"> {{ config('fields.text2.field_name') }}

                    {{Form::checkbox('text2', 1, false)}}

                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.date2.field_name') }}</label>
                {{Form::text('date2', null, ['id'=> 'datepicker2', 'class'=>"form-control", 'placeholder'=>"Date2"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">

          </div>
          <div class="col-md-3">

          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>{{ config('fields.remark.field_name') }}</label>
            {{Form::textarea('remark', null, ['class'=>"form-control", 'placeholder'=>"Remark", 'rows'=>"8", 'cols'=>"80"])}}

            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                <label>{{ config('fields.attachment.field_name') }}</label>
                {{Form::file('attachement', ['class'=>'form-control', 'multiple'=>'true', 'accept'=>'.png,.jpg,.jpeg,.gif'])}}

                <p class="help-block text-danger"></p>
                <small><b>หมายเหตุ</b> :ไฟล์ .jpg, .jpeg, .gif, .bmp, .png, .pdf เท่านั้น</small>
              </div>
            </div>
          </div>
          <div class="col-md-6">

          </div>
        </div>

        <div id="success">&nbsp;</div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" id="">ส่งข้อมูล</button>
        </div>

      </form>
    </div>
  </div>
@endsection
