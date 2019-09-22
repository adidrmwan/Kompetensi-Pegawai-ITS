<td>
  <div class="form-check disabled">
    <label class="form-check-label">
      @if($data->kunci_jawaban == 'pilihan_a')
        <input class="form-check-input" type="radio" id="gridRadios3" value="option3" disabled checked="">{!! $data->pilihan_a !!}
      @else
        <input class="form-check-input" type="radio" id="gridRadios3" value="option3" disabled>{!! $data->pilihan_a !!}
      @endif
    </label>
  </div>
  <div class="form-check disabled">
    <label class="form-check-label">
      @if($data->kunci_jawaban == 'pilihan_b')
        <input class="form-check-input" type="radio" id="gridRadios3" value="option3" disabled checked="">{!! $data->pilihan_b !!}
      @else
        <input class="form-check-input" type="radio" id="gridRadios3" value="option3" disabled>{!! $data->pilihan_b !!}
      @endif
    </label>
  </div>
  <div class="form-check disabled">
    <label class="form-check-label">
      @if($data->kunci_jawaban == 'pilihan_c')
        <input class="form-check-input" type="radio" id="gridRadios3" value="option3" disabled checked="">{!! $data->pilihan_c !!}
      @else
        <input class="form-check-input" type="radio" id="gridRadios3" value="option3" disabled>{!! $data->pilihan_c !!}
      @endif
    </label>
  </div>
  <div class="form-check disabled">
    <label class="form-check-label">
      @if($data->kunci_jawaban == 'pilihan_d')
        <input class="form-check-input" type="radio" id="gridRadios3" value="option3" disabled checked="">{!! $data->pilihan_d !!}
      @else
        <input class="form-check-input" type="radio" id="gridRadios3" value="option3" disabled>{!! $data->pilihan_d !!}
      @endif
    </label>
  </div>
</td>