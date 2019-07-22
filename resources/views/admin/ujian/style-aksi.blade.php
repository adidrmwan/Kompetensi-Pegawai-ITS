<td>
  <div class="peers mR-15">
    <div class="peer">
      <a href="{{ route('admin-ujian.edit', ['admin_ujian' => $data->id]) }}">
        <button class="btn btn-outline-info" data-toggle="tooltip" data-placement="right">
            <i class="fa fa-pencil"></i>
        </button>
      </a>
    </div>
    @if($data->status == 'pending')
    <div class="peer">
      <a href="{{ route('admin.ujian.pending', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-secondary" disabled="">
            <i class="fa fa-pause"></i>
        </button>
      </a>
    </div>
    <div class="peer">
      <a href="{{ route('admin.ujian.closed', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-secondary" disabled="">
            <i class="fa fa-stop"></i>
        </button>
      </a>
    </div>
    <div class="peer">
      <a href="{{ route('admin.ujian.active', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-success" data-toggle="tooltip" data-placement="right" title="Open this certificate?" 
                onclick="return confirm('Are you sure want to open this test?')">
            <i class="fa fa-play"></i>
        </button>
      </a>
    </div>
    @endif


    @if($data->status == 'active')
    <div class="peer">
      <a href="{{ route('admin.ujian.pending', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-warning" data-toggle="tooltip" data-placement="right" title="Pending this test?" 
                onclick="return confirm('Are you sure want to pending this test?')">
            <i class="fa fa-pause"></i>
        </button>
      </a>
    </div>
    <div class="peer">
      <a href="{{ route('admin.ujian.closed', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Close this test?" 
                onclick="return confirm('Are you sure want to close this test?')">
            <i class="fa fa-stop"></i>
        </button>
      </a>
    </div>
    <div class="peer">
      <a href="{{ route('admin.ujian.active', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-secondary" disabled="">
            <i class="fa fa-play"></i>
        </button>
      </a>
    </div>
    @endif


    @if($data->status == 'closed')
    <div class="peer">
      <a href="{{ route('admin.ujian.pending', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-secondary" disabled="">
            <i class="fa fa-pause"></i>
        </button>
      </a>
    </div>
    <div class="peer">
      <a href="{{ route('admin.ujian.closed', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-secondary" disabled="">
            <i class="fa fa-stop"></i>
        </button>
      </a>
    </div>
    <div class="peer">
      <a href="{{ route('admin.ujian.active', ['ujian' => $data->id]) }}">
        <button class="btn btn-outline-secondary" disabled="">
            <i class="fa fa-play"></i>
        </button>
      </a>
    </div>
    @endif
  </div>
</td>