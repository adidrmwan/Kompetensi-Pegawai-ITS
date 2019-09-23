@extends('layouts.default')

@section('content')
<h4 class="c-grey-900 mT-10 mB-30">{{ $title }}</h4>
<div class="row">
  <div class="col-md-12">
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
      <div class="mB-20">
        <a href="{{ route('jenis-sertifikat.create') }}" class="btn cur-p btn-info" style="padding: 10px;">
          <i class="ti-upload"></i>&nbsp;&nbsp;Add {{ $title }}
        </a>


      </div>
              <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Jenis Kegiatan</th>
                      <th>Skala</th>
                      <th>Level</th>
                      <th>Pendidikan</th>
                      <th>Jurusan</th>
                      <th>Partisipasi</th>
                      <th>Poin</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allData as $key => $data)
                  <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$data->bidang->deskripsi}}</td>
                    <td>{{$data->lingkup->deskripsi}}</td>
                    @if(!empty($data->level->id))
                      <td>{{$data->level->deskripsi}}</td>
                    @else
                      <td>-</td>
                    @endif
                    @if(!empty($data->pendidikan->id))
                      <td>{{$data->pendidikan->deskripsi}}</td>
                    @else
                      <td>-</td>
                    @endif
                    @if(!empty($data->jurusan->id))
                      <td>{{$data->jurusan->deskripsi}}</td>
                    @else
                      <td>-</td>
                    @endif
                    @if(!empty($data->partisipasi->id))
                      <td>{{$data->partisipasi->deskripsi}}</td>
                    @else
                      <td>-</td>
                    @endif
                    <td>{{$data->poin}}</td>
                    <td>
                      <div class="peers mR-15">
                        <div class="peer">
                          <a href="{{ route('jenis-sertifikat.edit', ['jenis_sertifikat' => $data->id]) }}">
                            <button class="btn btn-outline-info">
                                <i class="fa fa-pencil"></i>
                            </button>
                          </a>
                        </div>
                        <div class="peer">
                          <form method="post" action="{{ route('jenis-sertifikat.destroy', ['jenis_sertifikat' => $data->id]) }}">
                              {{ csrf_field() }}
                              {{ method_field('delete') }}
                              <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Delete this certificate?" 
                                      onclick="return confirm('Are you sure want to delete this rejected certificate?')">
                                  <i class="ti-trash"></i>
                              </button>
                          </form>
                        </div>
                      </div>
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