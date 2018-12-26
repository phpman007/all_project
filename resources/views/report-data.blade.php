@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        รายการ
      </li>
    </ol>
  </nav>
  <br>
  <h2 class="header-h">รายงานข้อมูล <small class="pull-right" style="font-size:15px"><a href="{{url('save-data')}}">บันทึกข้อมูล xxxxxxxxxxxx</a> | <a href="{{url('report-data')}}">ข้อมูล xxxxxxxxxxxx</a></small></h2>

  <div class="row">
    <div class="col-lg-12 col-md-12">
      <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
      <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
      <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
      <form name="sentMessage" id="contactForm" novalidate="">
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
        <br>
        <div class="row">
          <div class="col-md-12">
            <h5 class="header-h">รายการ <small><a href="{{url('save-data')}}">บันทึกรายการ</a></small> </h5>
            <table class="table" style="font-size:15px">
              <thead>
                <tr class="accordion-toggle"  >
                  <th>{{ config('fields.field1.field_name') }}</th>
                  <th>{{ config('fields.field2.field_name') }}</th>
                  <th>{{ config('fields.field3.field_name') }}</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($items as $key => $item)
                <tr class="accordion-toggle">
                  <td>{{$item->GroupData->title}}</td>
                  <td>{{$item->field2}}</td>
                  <td>{{$item->field3}}</td>
                  <td><a class=""  data-toggle="collapse" data-target="#collapse{{$key}}" href="javascript:void(0)">คลิ๊กเพื่อดูรายละเอียด</a></td>
                  <td><a href="{{url('save-data/'.$item->id.'/edit')}}">แก้ไข</a></td>
                  <td><a onclick="if(!confirm('ยืนยันการทำรายการ')) return false" href="{{url('save-data/'.$item->id.'/destroy')}}">ลบ</a></td>
                </tr>
                <tr  style="font-size:14px">
                  <td colspan="6">
                    <div id="collapse{{$key}}" class="collapse">
                      <div class="row">
                        <div class="col-md-3">
                          {{ config('fields.date1.field_name') }} : {{$item->date1}}
                        </div>
                        <div class="col-md-3">
                          {{ config('fields.field4.field_name') }} : {{$item->field4}}
                        </div>
                        <div class="col-md-3">
                          {{ config('fields.field5.field_name') }} : {{$item->field5}}
                        </div>
                        <div class="col-md-3">
                          {{ config('fields.field6.field_name') }} : {{$item->field6}}
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          {{ config('fields.text1.field_name') }} : {{$item->text1}}
                        </div>
                        <div class="col-md-5">
                          {{ config('fields.field2.field_name') }} : {{$item->date2}}
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          {{ config('fields.remark.field_name') }} : {{$item->remark}}
                        </div>

                      </div>
                      <div class="row">
                        @foreach ($item->getMedia('attachment') as $value)
                          <div class="col-md-4">
                            Attachement : <a target="_blank" href="{{asset('/public'.$value->getUrl())}}">{{($value->file_name)}}</a>
                            <br>
                            <a href="{{asset('/public'.$value->getUrl())}}" data-lightbox="image-{{$value->id}}" data-title="{{($value->file_name)}}{{$item->id}}" ><img style="max-width:100%;max-height:300px;" src="{{asset('/public'.$value->getUrl())}}" class="img-responsive" alt=""> </a>
                          </div>
                        @endforeach


                      </div>
                    </div>
                  </div></td>
                </tr>

                @endforeach

            </tbody>

          </table>
        </div>
      </div>



      <div id="success">&nbsp;</div>


    </form>
  </div>
</div>
@endsection
