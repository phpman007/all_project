@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
        <li class="breadcrumb-item"><a href="{{url('/suggestion')}}">ข้อเสนอแนะ</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        แก้ไขข้อเสนอแนะ
      </li>
    </ol>
  </nav>
  <br>
  <h2 class="header-h">
    แก้ไขข้อเสนอแนะ
  </h2>
  <div class="row">
    <form class="" method="post">
      {{csrf_field()}}
      <div class="col-lg-12 col-md-10 mx-auto">
        <textarea name="name" id="summernote" rows="8" cols="80">{!! File::get(public_path('suggestion.txt')) !!}</textarea>
      </div>
      <div class="col-lg-12 col-md-10 mx-auto">
        <button class="btn btn-info" type="submit" name="button">บันทึกข้อมูล</button>
      </div>

    </form>

  </div>

  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

<script type="text/javascript">
  $('#summernote').summernote({height:400})
</script>
@stop
