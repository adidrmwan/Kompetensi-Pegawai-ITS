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
      <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>No</th>
                <th>Deskripsi Soal</th>
                <th>Pilihan Jawaban</th>
                <!-- <th>Status</th> -->
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $data)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$data->deskripsi}}</td>
              @include('admin.ujian.soal.style-jawaban')
              <!-- @include('admin.ujian.soal.style-status') -->
              <td>
                <div class="peers mR-15">
                  <div class="peer">
                    <!-- <button class="btn btn-outline-info" data-deskripsi="{{$data->deskripsi}}" data-pilihana="{{$data->pilihan_a}}" data-pilihanab="{{$data->pilihan_b}}" data-pilihanc="{{$data->pilihan_c}}" data-pilihand="{{$data->pilihan_d}}" data-kuncijawaban="{{$data->kunci_jawaban}}" data-id="{{$data->id}}" data-toggle="modal" data-target="#edit-soal">
                      <i class="fa fa-pencil"></i>
                    </button> -->
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