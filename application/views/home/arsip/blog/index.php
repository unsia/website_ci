<div class="content-block">
  <div class="section-area section-sp1">
    <div class="container">
      <div class="row">
        <!-- Left part start -->
        <div class="col-md-7 col-lg-8 col-xl-8">
          <?php foreach ($blog as $b) : ?>
            <div class="recent-news blog-lg m-b40">
              <div class="action-box">
                <img src="#" class="lazy" data-src="<?= base_url('assets/images/arsip/blog/') . $b['image']; ?>" alt="" />
              </div>
              <div class="info-bx">
                <ul class="media-post">
                  <li>
                    <a href="#"><i class="fa fa-calendar"></i><?= date('d F Y', $b['date_created']); ?></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-user"></i>By <?= $b['user']; ?></a>
                  </li>
                </ul>
                <h5 class="post-title">
                  <a href="<?= base_url('home/arsip/blog/detail_blog/') . $b['id']  ?>"><?= $b['judul']; ?></a>
                </h5>
                <?= $b['short_content']; ?>
                <div class="post-extra">
                  <a href="<?= base_url('home/arsip/blog/detail_blog/') . $b['id']  ?>" class="btn-link">READ MORE</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <!-- Left part END -->