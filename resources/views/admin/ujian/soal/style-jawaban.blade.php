@if($tipe_ujian == 'A')
  <!-- Kompetensi Teknis -->
  @include('admin.ujian.soal.style-jawaban.tipe-soal-a')

@elseif($tipe_ujian == 'B')
  <!-- Kompetensi Umum -->
  @include('admin.ujian.soal.style-jawaban.tipe-soal-b')

@elseif($tipe_ujian == 'C')
  <!-- Soft Kompetensi -->
  @include('admin.ujian.soal.style-jawaban.tipe-soal-c')
  
@endif