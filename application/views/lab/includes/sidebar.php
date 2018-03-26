<div class="container body">
	<div class="main_container">
		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;">
				<a href="<?= base_url('') ?>" class="site_title">
				<!-- <i class="fa fa-paw"></i> -->
				<span> <img src="<?= base_url('assets/foto/logo.png') ?>" width="100" height="55"></span></a>
				</div>
				<div class="clearfix"></div>
				<!-- menu profile quick info -->
				<div class="profile clearfix">
					<div class="profile_pic">
						<img src="<?= base_url('assets/production/') ?>images/img.jpg" alt="User" class="img-circle profile_img"> 
					</div>
					<div class="profile_info">
						<h2>Selamat Datang,</h2>
						<h2>Pegawai Lab</h2>
						<br>
						<h2><?= $nip ?></h2>
					</div>
				</div>
				<!-- /menu profil quick info -->
				<br />
				<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
				<div class="menu_section">
					<ul class="nav side-menu">
						<li>
						<a href="<?= base_url('lab') ?>"><i class="fa fa-home"></i> Home</a>
						</li>
						<li>
						<a href="<?= base_url('lab/kualitas_air') ?>"><i class="fa fa-user"></i> Data Kualitas Air</a>
						</li>
						<li>
						<a href="<?= base_url('lab/parameter-uji') ?>"><i class="fa fa-archive"></i> Proses Koagulasi</a>
						</li>
						<li>
						<a href="<?= base_url('lab/grafik') ?>"><i class="fa fa-line-chart"></i> Grafik</a>
						</li>
						<li>
						<a href="<?= base_url('lab/prediksi') ?>"><i class="fa fa-archive"></i> Data Prediksi</a>
						</li>
					</ul>
				</div>



				</div>
				<!--/sidebar menu -->
		</div>
</div>