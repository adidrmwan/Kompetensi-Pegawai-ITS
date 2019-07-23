<li class="nav-item mT-30">
    <a class="sidebar-link" href="{{ route('home') }}">
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
      <i class="c-teal-500 ti-files"></i>
    </span>
    <span class="title">Sertifikat</span>
    <span class="arrow">
      <i class="ti-angle-right"></i>
    </span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown">
      <a href="{{ route('sertifikat.index') }}">
        <span>Daftar Sertifikat</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a href="{{ route('sertifikat.create') }}">
        <span>Upload Sertifikat</span>
      </a>
    </li>
  </ul>
</li>
<li class="nav-item">
  <a class="sidebar-link" href="{{ route('pegawai.pilih.ujian') }}">
      <span class="icon-holder">
          <i class="c-blue-500 ti-pencil"></i>
      </span>
      <span class="title">Ujian</span>
  </a>
</li>

