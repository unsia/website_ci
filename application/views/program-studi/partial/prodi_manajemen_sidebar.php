<!-- Left sidebar menu start -->
<div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <a href="<?= base_url(); ?>"><img alt="" src="<?= base_url(); ?>assets/images/logo.png" width="122" height="27"></a>
            <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
					<i class="material-icons ttr-fixed-icon">gps_fixed</i>
					<i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
				</div> -->
            <div class="ttr-sidebar-toggle-button">
                <i class="ti-arrow-left"></i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- sidebar menu start -->
        <nav class="ttr-sidebar-navi">
            <ul>
                <li>
                    <a href="<?= base_url('program-studi/manajemen') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('program-studi/manajemen/profil') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-pencil"></i></span>
                        <span class="ttr-label">Profil</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('program-studi/manajemen/dosen') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-user"></i></span>
                        <span class="ttr-label">Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('program-studi/manajemen/keunggulan') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-cup"></i></span>
                        <span class="ttr-label">Keunggulan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('program-studi/manajemen/capaian_pembelajaran') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-gift"></i></span>
                        <span class="ttr-label">Capaian Pembelajaran</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('program-studi/manajemen/kurikulum') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-book"></i></span>
                        <span class="ttr-label">Kurikulum</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('program-studi/manajemen/profil_lulusan') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-notepad"></i></span>
                        <span class="ttr-label">Profil Lulusan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('program-studi/manajemen/prospek_karir') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-medall"></i></span>
                        <span class="ttr-label">Prospek Karir</span>
                    </a>
                </li>
                <li>
                    <a href="https://akademik.unsia.ac.id/spmbfront/" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-pencil-alt"></i></span>
                        <span class="ttr-label">Daftar Sekarang</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>
<!-- Left sidebar menu end -->
<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title"><?= $title; ?> </h4>
            <ul class="db-breadcrumb-list">
                <li><a href="#"><i class="fa fa-home"></i><?= $prodi; ?></a></li>
                <li><?= $title; ?> </li>
            </ul>
        </div>