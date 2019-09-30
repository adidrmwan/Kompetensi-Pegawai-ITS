<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form method="POST" class="container" id="needs-validation" action="{{ route('admin-ujian-soal.store') }}" novalidate>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $title }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group row">
              <label for="deskripsi" class="col-md-2 col-form-label">Deskripsi Soal</label>
              <div class="col-md-10">
                <textarea class="form-control" id="deskripsi" name="deskripsi" required="" rows="3"></textarea>
              </div>
            </div>
            @if($tipe_ujian == 'A')

              @include('admin.ujian.soal.modal-create.tipe-soal-a')

            @elseif($tipe_ujian == 'B')

              @include('admin.ujian.soal.modal-create.tipe-soal-b')
              
            @elseif($tipe_ujian == 'C')

              @include('admin.ujian.soal.modal-create.tipe-soal-c')
              
            @endif
            <input type="text" name="ujian_id" hidden="" value="{{$ujian_id}}">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function () {
              'use strict';
              window.addEventListener('load', function () {
                  var form = document.getElementById('needs-validation');
                  form.addEventListener('submit', function (event) {
                      if (form.checkValidity() === false) {
                          event.preventDefault();
                          event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                  }, false);
              }, false);
          })();
      </script>
    </div>
  </div>
</div>

@section('js')
    <script src="{{ URL::asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace( 'deskripsi' );
    </script>
    <script>
        CKEDITOR.replace( 'pilihan_a' );
    </script>
    <script>
        CKEDITOR.replace( 'pilihan_b' );
    </script>
    <script>
        CKEDITOR.replace( 'pilihan_c' );
    </script>
    <script>
        CKEDITOR.replace( 'pilihan_d' );
    </script>
    <script>
        CKEDITOR.replace( 'pilihan_e' );
    </script>
@endsection