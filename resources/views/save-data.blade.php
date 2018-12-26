@extends('template')
@section('content')

  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
      <li class="breadcrumb-item"><a href="{{url('report-data')}}">รายการ</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        @if(empty($item))
          ข้อมูลที่ต้องการบันทึก
        @else
          ข้อมูลที่ต้องการแก้ไข
        @endif
      </li>
    </ol>
  </nav>
  <br>
  <h2 class="header-h">
    @if(empty($item))
      ข้อมูลที่ต้องการบันทึก
    @else
      ข้อมูลที่ต้องการแก้ไข
    @endif
    <small class="pull-right" style="font-size:15px"><a href="{{url('save-data')}}">บันทึกข้อมูล xxxxxxxxxxxx</a> | <a href="{{url('report-data')}}">ข้อมูล xxxxxxxxxxxx</a></small></h2>
    @foreach ($errors->all() as $key => $value)
      <div class="alert alert-danger alert-dismissible fade in show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button><!-- /close -->

        {{$value}}
    </div>
    @endforeach
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
                <input type="text" class="form-control" readonly placeholder="Email" id="name" required="" data-validation-required-message="Please enter your name." value="{{ Auth::user()->email }}" aria-invalid="false">
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
                {{Form::select('field1', $groupData, $item->field1, ['class'=>'form-control', 'placeholder'=> 'select option'])}}
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field2.field_name') }}</label>
                {{Form::text('field2', $item->field2, ['class'=>"form-control", 'placeholder'=>"Field2"])}}
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
                {{Form::text('field3',  $item->field3, ['class'=>"form-control", 'placeholder'=>"Field3"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field4.field_name') }}</label>

                {{Form::text('field4', $item->field4, ['class'=>"form-control", 'placeholder'=>"Field4"])}}

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
                {{Form::text('date1', Carbon\Carbon::parse($item->date1)->format('d/m/Y'), ['id'=> 'datepicker1','class'=>"form-control datepicker", 'placeholder'=>"Date1"])}}

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
                {{Form::text('field5', $item->field5, ['class'=>"form-control", 'placeholder'=>"Field5"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field6.field_name') }}</label>

                {{Form::text('field6', $item->field6, ['class'=>"form-control", 'placeholder'=>"Field6"])}}

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
                  {{Form::checkbox('text1', 1,  $item->text1 == 1)}}
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field7.field_name') }}</label>

                {{Form::text('field7',  $item->field7, ['class'=>"form-control", 'placeholder'=>"Field7"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field8.field_name') }}</label>

                {{Form::text('field8', $item->field8, ['class'=>"form-control", 'placeholder'=>"Field8"])}}

                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.field9.field_name') }}</label>

                {{Form::text('field9', $item->field9, ['class'=>"form-control", 'placeholder'=>"Field9"])}}

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

                  {{Form::checkbox('text2', 1, $item->text2 == 1)}}

                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>{{ config('fields.date2.field_name') }}</label>
                {{Form::text('date2', Carbon\Carbon::parse($item->date2)->format('d/m/Y'), ['id'=> 'datepicker2', 'class'=>"form-control", 'placeholder'=>"Date2"])}}

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
            {{Form::textarea('remark', $item->remark, ['class'=>"form-control", 'placeholder'=>"Remark", 'rows'=>"8", 'cols'=>"80"])}}

            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                <label>{{ config('fields.attachment.field_name') }}</label>
                {{Form::file('attachement[]', ['class'=>'form-control', 'multiple'=>'true', 'accept'=>'.png,.jpg,.jpeg,.gif'])}}

                <p class="help-block text-danger"></p>
                <small><b>หมายเหตุ</b> :ไฟล์ .jpg, .jpeg, .gif, .bmp, .png, .pdf เท่านั้น</small>
              </div>
            </div>
            <br>
            @if(isset($item))
            <ul style="font-size:13px">
              @foreach($item->getMedia('attachment') as $attch)
                <li>Attachement : <a target="_blank" href="{{asset('public'.$attch->getUrl())}}">{{$attch->file_name}}</a>
                  | <a onclick="if(!confirm('ยืนยันการทำรายการ')) return false" href="{{url('save-data/'.$item->id.'/delete_media/'. $attch->id)}}">ลบ</a></li>
              @endforeach
            </ul>
            @endif
          </div>
          <div class="col-md-6">

          </div>
        </div>

        <div id="success">&nbsp;</div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary" id="">บันทึกข้อมูล</button>
          <button type="reset" class="btn btn-default" id="">ยกเลิก</button>
          <a href="{{URL::previous()}}" class="btn btn-default pull-right" id="">ย้อนกลับ</a>
        </div>

      </form>
    </div>
  </div>
@endsection
