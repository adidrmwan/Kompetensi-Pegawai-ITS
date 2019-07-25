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
            <div class="form-group row">
              <label for="pilihan_a" class="col-md-2 col-form-label">Pilihan A</label>
              <div class="col-md-10">
                <textarea class="form-control" id="pilihan_a" name="pilihan_a" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="pilihan_b" class="col-md-2 col-form-label">Pilihan B</label>
              <div class="col-md-10">
              <textarea class="form-control" id="pilihan_b" name="pilihan_b" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="pilihan_c" class="col-md-2 col-form-label">Pilihan C</label>
              <div class="col-md-10">
              <textarea class="form-control" id="pilihan_c" name="pilihan_c" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="pilihan_d" class="col-md-2 col-form-label">Pilihan D</label>
              <div class="col-md-10">
              <textarea class="form-control" id="pilihan_d" name="pilihan_d" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="kunci_jawaban" class="col-md-2 col-form-label">Kunci Jawaban</label>
              <div class="col-md-10">
                <select class="form-control" id="kunci_jawaban" name="kunci_jawaban" required="" >
                    <option value="">Pilih Jawaban</option>
                    <option value="pilihan_a">Pilihan A</option>
                    <option value="pilihan_b">Pilihan B</option>
                    <option value="pilihan_c">Pilihan C</option>
                    <option value="pilihan_d">Pilihan D</option>
                </select>
              </div>
            </div>
            @endif

            @if($tipe_ujian == 'B')
            <div class="form-group row">
              <label for="pilihan_a" class="col-md-2 col-form-label">Pilihan A<br><small>Poin: 1</small></label>

              <div class="col-md-10">
                <textarea class="form-control" id="pilihan_a" name="pilihan_a" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="pilihan_b" class="col-md-2 col-form-label">Pilihan B<br><small>Poin: 2</small></label>
              <div class="col-md-10">
              <textarea class="form-control" id="pilihan_b" name="pilihan_b" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="pilihan_c" class="col-md-2 col-form-label">Pilihan C<br><small>Poin: 3</small></label>
              <div class="col-md-10">
              <textarea class="form-control" id="pilihan_c" name="pilihan_c" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="pilihan_d" class="col-md-2 col-form-label">Pilihan D<br><small>Poin: 4</small></label>
              <div class="col-md-10">
              <textarea class="form-control" id="pilihan_d" name="pilihan_d" required=""></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="pilihan_e" class="col-md-2 col-form-label">Pilihan E<br><small>Poin: 5</small></label>
              <div class="col-md-10">
              <textarea class="form-control" id="pilihan_e" name="pilihan_e" required=""></textarea>
              </div>
            </div>
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