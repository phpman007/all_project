@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
        <li class="breadcrumb-item"><a href="{{url('/suggestion')}}">ข้อเสนอแนะ</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        ดูรายการทั่งหมด
      </li>
    </ol>
  </nav>
  <br>
  <h2 class="header-h">
    ดูรายการทั่งหมด
  </h2>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <tr>
          <td>ผู้ส่ง</td>
            <td>สถานะ</td>
            <td>วันที่ส่ง</td>
          <td>อ่านรายละเอียด</td>
        </tr>
        @foreach ($items as $key => $value)
          <tr>
            <td><a href="mailto:{{$value->email}}">{{$value->email}}</a></td>
            <td>{{$value->status == 0 ? 'ยังไม่ได้อ่าน' : 'อ่านแล้ว'}}</td>
            <td>{{ Carbon\Carbon::parse($value->created_at)->addYears('543')->format('d/m/Y H:i:s') }}</td>
            <td><a href="{{url('suggestion/'.$value->id.'/detail')}}">อ่านรายละเอียด</a></td>
          </tr>
        @endforeach
      </table>
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
