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
      <form method="post" action="{{ route('admin-ujian.destroy', ['admin_ujian' => $data->id]) }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button class="btn btn-outline-success" data-toggle="tooltip" data-placement="right" title="Open this test?" 
                  onclick="return confirm('Are you sure want to open this test?')">
              <i class="fa fa-play"></i>
          </button>
      </form>
    </div>
    @endif


    @if($data->status == 'active')
    <div class="peer">
      <form method="post" action="{{ route('admin-ujian.destroy', ['admin_ujian' => $data->id]) }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button class="btn btn-outline-warning" data-toggle="tooltip" data-placement="right" title="Pending this test?" 
                  onclick="return confirm('Are you sure want to pending this test?')">
              <i class="fa fa-pause"></i>
          </button>
      </form>
    </div>
    <div class="peer">
      <form method="post" action="{{ route('admin-ujian.destroy', ['admin_ujian' => $data->id]) }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Close this test?" 
                  onclick="return confirm('Are you sure want to close this test?')">
              <i class="fa fa-stop"></i>
          </button>
      </form>
    </div>
    @endif


    @if($data->status == 'closed')
    @endif
  </div>
</td>