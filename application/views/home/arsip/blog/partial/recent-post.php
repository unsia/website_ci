<!-- Side bar start -->
        <div class="col-md-5 col-lg-4 col-xl-4 sticky-top">
          <aside class="side-bar sticky-top">
            <div class="widget recent-posts-entry">
              <h6 class="widget-title">Recent Posts</h6>
              <div class="widget-post-bx">
                <?php foreach ($blog as $b) : ?>
                <div class="widget-post clearfix">
                  <div class="ttr-post-media">
                    <img src="#" class="lazy" data-src="<?= base_url('assets/images/arsip/blog/') . $b['image']; ?>" width="200" height="143" alt="" />
                  </div>
                  <div class="ttr-post-info">
                    <div class="ttr-post-header">
                      <h6 class="post-title">
                        <a href="<?= base_url('home/arsip/blog/detail_blog/') . $b['id']  ?>"><?= $b['judul']; ?></a>
                      </h6>
                    </div>
                    <ul class="media-post">
                      <li>
                        <a href="#"><i class="fa fa-calendar"></i><?= date('d F Y', $b['date_created']); ?></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </aside>
        </div>
        <!-- Side bar END -->
      </div>
    </div>
  </div>
</div>
</div>
<!-- Content END-->