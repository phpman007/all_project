@extends('template')
@section('content')

    <br>
    <h2 class="header-h">ลืม Password</h2>
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
        <form name="sentMessage" id="contactForm" novalidate="">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email" id="name" required="" data-validation-required-message="Please enter your name." aria-invalid="false">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>คำถาม</label>
              <input type="text" class="form-control" placeholder="คำถาม" id="email" required="" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>คำตอบ</label>
              <input type="text" class="form-control" placeholder="คำตอบ" id="email" required="" data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <small><b>หมายเหตุ</b> : ระบบจะส่งข้อมูลกลับให้ท่านทาง Email ภายใน 24 ชม.</small>

          <div id="success">&nbsp;</div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="">ส่งข้อมูล</button>
          </div>

        </form>
      </div>
    </div>
@endsection
