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
                    <a href="<?= base_url('akademik/program-studi/akuntansi') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('akademik/program-studi/akuntansi/dosen') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-user"></i></span>
                        <span class="ttr-label">Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('akademik/program-studi/akuntansi/keunggulan') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-cup"></i></span>
                        <span class="ttr-label">Keunggulan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('akademik/program-studi/akuntansi/kurikulum') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-book"></i></span>
                        <span class="ttr-label">Kurikulum</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('akademik/program-studi/akuntansi/prospek-karir') ?>" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-medall"></i></span>
                        <span class="ttr-label">Prospek Karir</span>
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