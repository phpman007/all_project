@extends('template')
@section('content')

  <br>
  <h2 class="header-h">รายงานข้อมูล <small class="pull-right" style="font-size:15px">บันทึกข้อมูล xxxxxxxxxxxx | ข้อมูล xxxxxxxxxxxx</small></h2>

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
                <input type="text" class="form-control" readonly placeholder="Email" id="name" required="" data-validation-required-message="Please enter your name." value="xxxxxx xxxxxxxx" aria-invalid="false">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls floating-label-form-group-with-value">
                <label>จังหวัด</label>
                <input type="text" class="form-control" readonly placeholder="Email" id="name" required="" data-validation-required-message="Please enter your name." value="xxxxxxxx" aria-invalid="false">
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
        <br>
        <div class="row">
          <div class="col-md-12">
            <h5 class="header-h">รายการ</h5>
            <table class="table">
              <thead>
                <tr class="accordion-toggle"  >
                  <th>ลำดับ</th>
                  <th>Field1</th>
                  <th>Field2</th>
                  <th>Field3</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr class="accordion-toggle" >
                  <td>1</td>
                  <td>xxxxx</td>
                  <td>xxxxx</td>
                  <td>xxxxx</td>
                  <td><a class=""  data-toggle="collapse" data-target="#collapseTwo" href="javascript:void(0)">คลิ๊กเพื่อดูรายละเอียด</a></td>
                  <td>แก้ไข</td>
                  <td>ลบ</td>
                </tr>
                <tr>
                  <td colspan="6">
                    <div id="collapseTwo" class="collapse in">
                      <div class="row">
                        <div class="col-md-3">
                          Date1 : XXXXXXXX
                        </div>
                        <div class="col-md-3">
                          Field4 : XXXXXXXX
                        </div>
                        <div class="col-md-3">
                          Field5 : XXXXXXXX
                        </div>
                        <div class="col-md-3">
                          Field6 : XXXXXXXX
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          Text1 : XXXXXXXX
                        </div>
                        <div class="col-md-5">
                          Date2 : XXXXXXXX
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          Remark : XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          Attachement : xxxxxxxxx.pdf
                          <br>
                          <img style="max-width:300px;max-height:300px;" src="https://images.fireside.fm/podcasts/images/b/bc7f1faf-8aad-4135-bb12-83a8af679756/cover_medium.jpg" class="img-responsive" alt="">
                        </div>

                      </div>
                    </div>
                  </div></td>
                </tr>
                <tr class="accordion-toggle"  >
                  <td>2</td>
                  <td>xxxxx</td>
                  <td>xxxxx</td>
                  <td>xxxxx</td>
                  <td><a class=""  data-toggle="collapse" data-target="#collapseTwo-2" href="javascript:void(0)">คลิ๊กเพื่อดูรายละเอียด</a></td>
                  <td>แก้ไข</td>
                  <td>ลบ</td>
                </tr>
                <tr>
                  <td colspan="6">
                    <div id="collapseTwo-2" class="collapse in">
                      <div class="row">
                        <div class="col-md-3">
                          Date1 : XXXXXXXX
                        </div>
                        <div class="col-md-3">
                          Field4 : XXXXXXXX
                        </div>
                        <div class="col-md-3">
                          Field5 : XXXXXXXX
                        </div>
                        <div class="col-md-3">
                          Field6 : XXXXXXXX
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-5">
                          Text1 : XXXXXXXX
                        </div>
                        <div class="col-md-5">
                          Date2 : XXXXXXXX
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          Remark : XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX <br>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          Attachement : xxxxxxxxx.pdf
                          <br>
                          <img style="max-width:300px;max-height:300px;" src="https://images.fireside.fm/podcasts/images/b/bc7f1faf-8aad-4135-bb12-83a8af679756/cover_medium.jpg" class="img-responsive" alt="">
                        </div>

                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>



      <div id="success">&nbsp;</div>


    </form>
  </div>
</div>
@endsection