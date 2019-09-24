
@if($ujian->headers)
  <div class=" peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
    <div class="peer mR-10">
      <i class="fa fa-fw fa-clock-o c-green-500"></i>
    </div>
    <div class="peer peer-greed ov-h">
      <h5 class="fsz-def tt-c c-grey-900">Ujian {{$ujian->bidang_ujian->deskripsi}} / {{$ujian->tipe_ujian->nama}}</h5>
      <div class="c-grey-600">
        <span class="c-grey-700">{{$ujian->total_durasi}} Menit - </span>
        <i>{{$ujian->jumlah_soal}} Soal - </i> 
        <span class="badge badge-pill bgc-green-50 c-green-700">Nilai: @if(!empty($ujian->headers->id)){{$ujian->headers->nilai_akhir}}@endif</span>
      </div>
    </div>
    <div class="peers mR-15">
      <div class="peer">
          @if($ujian->headers->status == 'on_test')
            <a href="{{ route('pegawai.ujian.show', ['ujian' => $ujian->id]) }}" class="btn cur-p btn-info" style="padding: 10px; margin-top: 8px;">
              <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
            </a>
          @elseif($ujian->headers->status == 'finished')
            <button class="btn cur-p btn-secondary" style="padding: 10px; margin-top: 8px;" disabled="">
              <i></i>&nbsp;&nbsp;Ujian selesai ditempuh 
            </button>
          @endif
      </div>
    </div>
  </div>
@else
  @if(!empty($ujian->headers->id))
  <div class=" peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
    <div class="peer mR-10">
      <i class="fa fa-fw fa-clock-o c-green-500"></i>
    </div>
    <div class="peer peer-greed ov-h">
      <h5 class="fsz-def tt-c c-grey-900">Ujian {{$ujian->bidang_ujian->deskripsi}} / {{$ujian->tipe_ujian->nama}}</h5>
      <div class="c-grey-600">
        <span class="c-grey-700">{{$ujian->total_durasi}} Menit - </span>
        <i>{{$ujian->jumlah_soal}} Soal</i> 
      </div>
    </div>
    <div class="peers mR-15">
      <div class="peer">
        <a href="{{ route('pegawai.ujian.show', ['ujian' => $ujian->id]) }}" class="btn cur-p btn-info" style="padding: 10px; margin-top: 8px;">
          <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
        </a>
      </div>
    </div>
  </div>
  @endif
@endif