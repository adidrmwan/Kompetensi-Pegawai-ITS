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
			        <span class="title"><b>Ujian {{$ujian->bidang_ujian->deskripsi}}</b></span>
			    </a>
			</li>
			<li class="nav-item">
			  <a class="sidebar">
			  	<i class="c-blue-500 ti-timer"></i>&nbsp;&nbsp; {{$ujian->total_durasi}} Menit <br>
			  	<i class="c-blue-500 ti-files"></i>&nbsp;&nbsp; {{$ujian->jumlah_soal}} Soal <br>
			  </a>
			</li>
			<li class="nav-item"> 
				<a class="sidebar">
				  	<i class="c-red-500 ti-alarm-clock"></i>&nbsp;&nbsp; {{date('l, d F Y', strtotime($header->tanggal_selesai))}}
					<p id="demo"></p>
				</a>
			</li>
		</ul>
	</div>
</div>

<script>
// Set the date we're counting down to
var countDownDate = new Date('{{$header->tanggal_selesai}}').getTime();
console.log(countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  }
}, 1000);
</script>