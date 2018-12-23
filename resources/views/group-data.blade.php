@extends('template')
@section('content')
  <nav aria-label="breadcrumb" style="font-size:12px">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าแรก</a></li>
        <li class="breadcrumb-item"><a href="{{url('save-data')}}">บันทึกรายการข้อมูล</a></li>
      <li class="breadcrumb-item active" aria-current="page">
        Add & Edit Group Data
      </li>
    </ol>
  </nav>
    <br>

    <h2 class="header-h">Add & Edit Group Data</h2>
    <div class="row">
      <div class="col-lg-12 col-md-12 mx-auto">
        {{-- รับทำเว็บไซต์ เขียนโปรแกรม ออกแบบเว็บไซต์ ทำการตลาดออนไลน์ --}}
        {{-- https://www.facebook.com/cheetah.programming/ --}}
        @if (!empty($item))
        {{Form::open(['url'=>route('group-data.update', $item->id),'method'=>'PUT'])}}
      @else
        {{Form::open(['url'=>route('group-data.store'),'method'=>'POST'])}}
      @endif
          <div class="control-group">
            <div class="form-group floating-label-form-group controls {{ old('email') != null ? 'floating-label-form-group-with-value' : '' }} {{ $errors->has('email') ? 'is-invalid' : '' }}">
              <label>Title</label>
              @if ($errors->has('Title'))
                <div class="is-valide-message">
                  {{ $errors->first('Title') }}
                </div>
              @endif
              {{ Form::text('title', $item->title, ['class'=>"form-control", 'placeholder'=>"Title"]) }}
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <div class="control-group">
            <div class="form-group floating-label-form-group controls  floating-label-form-group-with-value {{ $errors->has('password') ? 'is-invalid' : '' }}">
              <label>Publish</label>
              @if ($errors->has('publish'))
                <div class="is-valide-message">
                  {{ $errors->first('publish') }}
                </div>
              @endif

              {{ Form::select('publish', ['0' =>'Disable', '1'=>'Enable'],$item->publish, ['class'=>"form-control"]) }}

              <p class="help-block text-danger"></p>
            </div>
          </div>


          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="">Save</button>
          </div>
          <table class="table table-bordered" style="font-size:14px">
            <thead>
              <tr>
                <th>Title</th>
                <th width="100">Publish</th>
                <th width="80">Id</th>
                <th width="200">action</th>
              </tr>
            </thead>
            <tbody>

              {{Form::close()}}
            @if ($items->count() == 0)
              <tr>
                <td colspan="3">No data...</td>
              </tr>
            @endif
            @foreach ($items as $key => $value)
              <tr>
                <td>{{$value->title}} </td>
                <td><small style="font-style: italic;">{{$value->publish ==0 ? 'Disable' : 'Enable'}}</small></td>
                <td>{{$value->id}}</td>
                <td>
                  <a href="{{route('group-data.edit', $value->id)}}">update</a>
                  {{Form::open(['method'=>"delete", 'style'=>'display:inline-block', 'url'=>route('group-data.destroy', $value->id)])}}

                  {{Form::submit('delete', ['style'=>'padding: 0px 5px;','class'=>'btn btn-danger'])}}
                  {{Form::close()}}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

          {{$items->render()}}
      </div>
    </div>

@endsection
