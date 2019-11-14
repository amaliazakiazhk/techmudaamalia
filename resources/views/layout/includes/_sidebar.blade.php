
<br>
<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						
						@if(Auth::check() && Auth::user()->role === 'admin')
						<li><a href="/program" class=""><i class="lnr lnr-user"></i> <span>Program</span></a></li>
						@endif
						<li><a href="/daftar_donatur" class=""><i class="lnr lnr-user"></i> <span>Daftar Donatur</span></a></li>
						
					</ul>
				</nav>
			</div>
		</div>