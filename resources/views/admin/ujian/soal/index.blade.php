@extends('layouts.default')

@section('content')
<h4 class="c-grey-900 mT-10 mB-30">{{ $title }}</h4>
<div class="row">
  <div class="col-md-12">
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
      <div class="mB-20">

        <!-- Large modal -->
        <button type="button" class="btn cur-p btn-info" style="padding: 10px;" data-toggle="modal" data-target=".bd-example-modal-lg">
          <i class="ti-upload"></i>&nbsp;&nbsp;Add {{ $title }}
        </button>

        @include('admin.ujian.soal.modal-create')

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
      </div>
      <table id="dataTable" class="table table-hover table-bordered table-responsive" cellspacing="0" width="100%">
        <thead>
          <tr>
              <th width="3%">No</th>
              <th width="25%">Deskripsi Soal</th>
              <th width="55%">Pilihan</th>
              <th width="12%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($allData as $key => $data)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->deskripsi}}</td>
            @include('admin.ujian.soal.style-jawaban')
            <td>
              <div c\lass="peers mR-15">
                <div class="peer">
                  <a href="{{ route('admin-ujian-soal.edit', ['admin_ujian' => $data->id]) }}">
                    <button class="btn btn-outline-info" data-toggle="tooltip" data-placement="right">
                        <i class="fa fa-pencil"></i>
                    </button>
                  </a>
                </div>
                <div class="peer">
                  <form method="post" action="{{ route('admin-ujian-soal.destroy', ['admin_ujian' => $data->id]) }}">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}
                      <input type="text" name="ujian_id" value="{{$data->ujian_id}}" hidden="">
                      <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Delete this test?" 
                              onclick="return confirm('Are you sure want to delete this test?')">
                          <i class="ti-trash"></i>
                      </button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

        @include('admin.ujian.soal.modal-edit')
    </div>
  </div>
</div>
@endsection

@section('js')
@endsection