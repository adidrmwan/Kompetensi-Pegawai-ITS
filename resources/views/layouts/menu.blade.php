<li class="nav-item mT-30">
    <a class="sidebar-link" href="/">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
      <i class="c-teal-500 ti-view-list-alt"></i>
    </span>
    <span class="title">Setting</span>
    <span class="arrow">
      <i class="ti-angle-right"></i>
    </span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown">
      <a href="javascript:void(0);">
        <span>Sertifikat</span>
        <span class="arrow">
          <i class="ti-angle-right"></i>
        </span>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a href="{{route('jenis-sertifikat.index')}}">Jenis Sertifikat</a>
        </li>
        <li>
          <a href="{{route('lingkup.index')}}">Lingkup</a>
        </li>
        <li>
          <a href="{{route('bidang.index')}}">Bidang</a>
        </li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a href="{{route('admin-ujian.index')}}">
        <span>Ujian Pegawai</span>
      </a>
    </li>
    <!-- <li class="nav-item dropdown">
      <a href="javascript:void(0);">
        <span>Soal Test</span>
      </a>
    </li> -->
  </ul>
</li>

