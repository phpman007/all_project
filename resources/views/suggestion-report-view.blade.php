@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
        <li class="breadcrumb-item"><a href="{{url('/suggestion')}}">ข้อเสนอแนะ</a></li>
          <li class="breadcrumb-item"><a href="{{url('/suggestion/report')}}">ข้อเสนอแนะ</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        อ่านรายละเอียด
      </li>
    </ol>
  </nav>
  <br>
  <h2 class="header-h">
  ผู้ส่ง : <a href="mailto:{{$item->email}}">{{$item->email}}</a>
  </h2>
  <div class="row">
    <div class="col-md-12">
      รายละเอียด : {!! $item->detail !!}
    </div>

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
