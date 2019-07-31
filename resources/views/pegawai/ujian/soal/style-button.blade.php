<div class="layer w-100">
  <div class="p-20 bdT bgc-white">
    <div class="pos-r">
      <div class="peers ">
        <div class="peer-greed">
        </div>
        <div>
            @if($soals->no_soal == 1)
            <button type="submit" class="btn btn-outline-secondary" disabled="">
              <i class="fa fa-chevron-left"></i> Prev
            </button>
            @else
            <button type="submit" name="prev" class="btn btn-outline-primary" value="prev">
              <i class="fa fa-chevron-left"></i> Prev
            </button>
            @endif

            @if($soals->no_soal == $ujian->soal_ujians->count())
            <button type="submit" name="finised" class="btn btn-primary" value="finised">
              Finished <i class="fa fa-chevron-right"></i>
            </button>
            @else
            <button type="submit" name="next" class="btn btn-outline-primary" value="next">
              Next <i class="fa fa-chevron-right"></i>
            </button>
            @endif
        </div>
      </div>
    </div>
  </div>
</div>