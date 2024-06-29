<!--APP-SIDEBAR-->
<div class="sticky">
   <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
   <div class="app-sidebar">
      <div class="side-header">
         <a class="header-brand1" style="font-weight: bold; color: darkturquoise" href="/user"><img src="/storage/assets/images/emo-fav.png" style="width: 30px;" class="header-brand-img all-logo"> EmoBalance</a>
      </div>

      <div class="main-sidemenu">			
			<ul class="side-menu">
				<li class="nav-link leading-none d-flex">
					<span class="avatar avatar-lg brround cover-image" data-bs-image-src="/storage/assets/images/users/17.jpg"></span>
					<span class="side-menu__label" style="padding-left: 5px; font-weight: bold; overflow: hidden;">{{ Str::upper(Session::get('nama')) }}</span>
				</li>				

				<li class="sub-category">
					<h3>Menu Utama</h3>
				</li>

				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="/admin"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Beranda</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="/listpsikolog"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Daftar Psikolog</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="/"><i class="side-menu__icon fe fe-send"></i><span class="side-menu__label">Pesan</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="/"><i class="side-menu__icon fe fe-info"></i><span class="side-menu__label">Jadwal Konsul</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="/"><i class="side-menu__icon fe fe-bell"></i><span class="side-menu__label">Informasi</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="/"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Dokumen Kesehatan</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item has-link" data-bs-toggle="slide" href="/"><i class="side-menu__icon fe fe-heart"></i><span class="side-menu__label">Pemantauan</span></a>
				</li>
																	
			</ul>
						
		</div>
      
   </div>
</div>