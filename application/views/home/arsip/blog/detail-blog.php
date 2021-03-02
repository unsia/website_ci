<div class="content-block">
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row">
                <!-- Left part start -->
                <div class="col-lg-8 col-xl-8">
                    <!-- blog start -->
                    <div class="recent-news blog-lg">
                        <div class="action-box blog-lg">
                            <img src="#" class="lazy" data-src="<?= base_url('assets/images/arsip/blog/') . $blog['image']; ?>" alt="">
                        </div>
                        <div class="info-bx">
                            <ul class="media-post">
                                <li><a href="#"><i class="fa fa-calendar"></i><?= date('d F Y', $blog['date_created']); ?></a></li>
                                <li><a href="#"><i class="fa fa-comments-o"></i>by <?= $blog['user']; ?></a></li>
                            </ul>
                            <h5 class="post-title"><a href="#"><?= $blog['judul']; ?></a></h5>
                            <?= $blog['content']; ?>
                            <div class="ttr-divider bg-gray"><i class="icon-dot c-square"></i></div>

                        </div>
                    </div>
                    <!-- blog END -->
                </div>
                <!-- Left part END -->