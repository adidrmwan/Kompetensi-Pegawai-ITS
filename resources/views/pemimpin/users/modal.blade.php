<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sertifikat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{ csrf_field() }}
        <div class="modal-body">
        <img src="{{asset('/sertifikat/'.$sertifikat->uploaded_file)}}" alt="" title="" />
    </div>
  </div>
</div>
