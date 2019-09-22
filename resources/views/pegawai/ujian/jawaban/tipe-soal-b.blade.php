@if($no == 1)
  <div class="custom-control custom-radio">
      <input type="radio" id="jawaban[{{$soal->id}}][1]" name="jawaban" class="custom-control-input" value="pilihan_a" 
      {{ $soals->jawaban == 'pilihan_a' ? 'checked=""' : '' }}>
      <label class="custom-control-label" for="jawaban[{{$soal->id}}][1]">{!! $soals->pilihan_a!!}</label>
  </div>
@endif
@if($no == 2)
  <div class="custom-control custom-radio">
      <input type="radio" id="jawaban[{{$soal->id}}][2]" name="jawaban" class="custom-control-input" value="pilihan_b"
      {{ $soals->jawaban == 'pilihan_b' ? 'checked=""' : '' }}>
      <label class="custom-control-label" for="jawaban[{{$soal->id}}][2]">{!! $soals->pilihan_b!!}</label>
  </div>
@endif
@if($no == 3)
  <div class="custom-control custom-radio">
      <input type="radio" id="jawaban[{{$soal->id}}][3]" name="jawaban" class="custom-control-input" value="pilihan_c"
      {{ $soals->jawaban == 'pilihan_c' ? 'checked=""' : '' }}>
      <label class="custom-control-label" for="jawaban[{{$soal->id}}][3]">{!! $soals->pilihan_c!!}</label>
  </div>
@endif
@if($no == 4)
  <div class="custom-control custom-radio">
      <input type="radio" id="jawaban[{{$soal->id}}][4]" name="jawaban" class="custom-control-input" value="pilihan_d"
      {{ $soals->jawaban == 'pilihan_d' ? 'checked=""' : '' }}>
      <label class="custom-control-label" for="jawaban[{{$soal->id}}][4]">{!! $soals->pilihan_d!!}</label>
  </div>
@endif
@if($no == 5)
  <div class="custom-control custom-radio">
      <input type="radio" id="jawaban[{{$soal->id}}][5]" name="jawaban" class="custom-control-input" value="pilihan_e"
      {{ $soals->jawaban == 'pilihan_e' ? 'checked=""' : '' }}>
      <label class="custom-control-label" for="jawaban[{{$soal->id}}][5]">{!! $soals->pilihan_e!!}</label>
  </div>
@endif