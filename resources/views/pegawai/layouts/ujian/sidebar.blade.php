<div class="sidebar">
	<div class="sidebar-inner">
		<!-- ### $Sidebar Header ### -->
		<div class="sidebar-logo">
			<div class="peers ai-c fxw-nw">
				<div class="peer peer-greed">
					<a class='sidebar-link td-n' href="/">
						<div class="peers ai-c fxw-nw">
							<div class="peer">
								<div class="logo">
									<img src="/images/logo.jpeg" alt="">
								</div>
							</div>
							<div class="peer peer-greed">
								<h5 class="lh-1 mB-0 logo-text">ITS</h5>
							</div>
						</div>
					</a>
				</div>
				<div class="peer">
					<div class="mobile-toggle sidebar-toggle">
						<a href="" class="td-n">
							<i class="ti-arrow-circle-left"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!-- ### $Sidebar Menu ### -->
		<ul class="sidebar-menu scrollable pos-r">
			<li class="nav-item mT-30">
			    <a class="sidebar">
			        <span class="title">Ujian {{$ujian->bidang_ujian->deskripsi}}</span>
			    </a>
			</li>
			<li class="nav-item">
			  <a class="sidebar">
			      <span class="icon-holder">
			          <i class="c-blue-500 ti-timer"></i>
			      </span>
			      <span class="title">{{$ujian->total_durasi}} Menit</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="sidebar">
			      <span class="icon-holder">
			          <i class="c-blue-500 ti-files"></i>
			      </span>
			      <span class="title">{{$ujian->jumlah_soal}} Soal</span>
			  </a>
			</li>


		</ul>
	</div>
</div>