@extends('layouts.default')

@section('content')
<h4 class="c-grey-900 mT-10 mB-30">{{ $title }}</h4>
<div class="row">
  <div class="col-md-12">
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
      <div class="mB-20">
        <a href="{{ route('bidang.create') }}" class="btn cur-p btn-info" style="padding: 10px;">
          <i class="ti-upload"></i>&nbsp;&nbsp;Add {{ $title }}
        </a>

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
      </div>
      <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $data)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$data->deskripsi}}</td>
              <td>
                  <form method="post" action="{{ route('level.destroy', ['data' => $data->id]) }}">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}
                      <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Delete this certificate?" 
                              onclick="return confirm('Are you sure want to delete this rejected certificate?')">
                          <i class="ti-trash"></i>
                      </button>
                  </form>
                  <!-- <button class="btn btn-outline-secondary" disabled="">
                      <i class="ti-trash"></i>
                  </button> -->
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>
@endsection