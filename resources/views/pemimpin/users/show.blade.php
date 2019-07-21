@extends('pemimpin.layouts.default')

@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
                  <div class="bgc-light-blue-500 c-white p-20">
                    <div class="peers ai-c jc-sb gap-40">
                      <div class="peer peer-greed">
                        <h5>{{ $sertifikat->user->name }}</h5>
                        <p class="mB-0">{{ $sertifikat->user->email }}</p>
                      </div>
                      <div class="peer">
                        <h3 class="text-right">NIP: {{ $sertifikat->user->id }}</h3>
                      </div>
                    </div>
                  </div>
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Sertifikat</h6>
                <div class="mT-30">
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" value="{{$sertifikat->judul}}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Jenis Sertifikat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" value="{{$sertifikat->jenis_sertifikat->bidang->deskripsi}} - {{$sertifikat->jenis_sertifikat->deskripsi}} - {{$sertifikat->jenis_sertifikat->lingkup->deskripsi}} - {{$sertifikat->jenis_sertifikat->partisipasi->deskripsi}}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="deskripsi"name="deskripsi" rows="3" readonly="">{{$sertifikat->deskripsi}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggal_mulai" value="{{$sertifikat->tanggal_mulai}}" readonly="">
                            </div>
                            <label for="tanggal_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggal_selesai" value="{{$sertifikat->tanggal_selesai}}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penyelenggara" class="col-sm-2 col-form-label">Penyelenggara</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penyelenggara" value="{{$sertifikat->penyelenggara}}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat_diselenggarakan" class="col-sm-2 col-form-label">Tempat diselenggarakan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_diselenggarakan" value="{{$sertifikat->tempat_diselenggarakan}}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_sertifikat" class="col-sm-2 col-form-label">No. Sertifikat</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="no_sertifikat" value="{{$sertifikat->no_sertifikat}}" readonly="">
                            </div>
                            <label for="tanggal_sertifikat" class="col-sm-2 col-form-label">Tanggal Sertifikat</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggal_sertifikat" value="{{$sertifikat->tanggal_sertifikat}}" readonly="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="uploaded_file" class="col-sm-2">Bukti Sertifikat</label>
                            <div class="col-sm-4">
                               <button class="btn btn-info">
                                   Open File
                               </button>
                            </div>
                          </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                @if($sertifikat->status == 'pending')
                                  <div class="peers mR-15">
                                    <div class="peer">
                                      <a href="{{ route('pemimpin.approve', ['sertifikat' => $sertifikat->id]) }}">
                                        <button class="btn btn-outline-primary" data-toggle="tooltip" data-placement="right" title="Verify this certificate?" 
                                                onclick="return confirm('Are you sure want to verify this certificate?')">
                                            <i class="fa fa-check"></i> Approve
                                        </button>
                                      </a>
                                    </div>
                                    <div class="peer">
                                      <a href="{{ route('pemimpin.reject', ['sertifikat' => $sertifikat->id]) }}">
                                        <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Reject this certificate?" 
                                                onclick="return confirm('Are you sure want to reject this certificate?')">
                                            <i class="fa fa-close"></i> Reject
                                        </button>
                                      </a>
                                    </div>
                                  </div>
                                @else
                                  <div class="peers mR-15">
                                    <div class="peer">
                                        <button class="btn btn-outline-secondary" disabled="">
                                            <i class="fa fa-check"></i> Approve
                                        </button>
                                    </div>
                                    <div class="peer">
                                        <button class="btn btn-outline-secondary" disabled="">
                                            <i class="fa fa-close"></i> Reject
                                        </button>
                                    </div>
                                  </div>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
</div>

@endsection