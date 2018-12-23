@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
      <li class="breadcrumb-item"><a href="{{url('/')}}">เข้าสู่ระบบ</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        ลืม Password
      </li>
    </ol>
  </nav>
    <br>
    @foreach ($errors->all() as $key => $value)
      <div class="alert alert-danger alert-dismissible fade in show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button><!-- /close -->

        {{$value}}
    </div>
    @endforeach
    <h2 class="header-h">ลืม Password</h2>
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form name="sentMessage" id="contactForm" novalidate="" method="POST">
          {{ csrf_field() }}
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email</label>
              <input name="email" type="text" class="form-control" placeholder="Email" id="name" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>คำถาม</label>
              <input name="question_forget_password" type="text" class="form-control" placeholder="คำถาม" id="email" required="" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>คำตอบ</label>
              <input name="answer_forget_password" type="text" class="form-control" placeholder="คำตอบ" id="email" required="" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <small><b>หมายเหตุ</b> : ระบบจะส่งข้อมูลกลับให้ท่านทาง Email ภายใน 24 ชม.</small>

          <div id="success">&nbsp;</div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="">ส่งข้อมูล</button>
          <button type="reset" name="button" class="btn btn-default">ยกเลิก</button>
          </div>

        </form>
      </div>
    </div>
@endsection
