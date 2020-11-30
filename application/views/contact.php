        <!-- inner page banner -->
        <div class="page-banner contact-page section-sp2">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-5 col-md-5 m-b30">
        				<div class="bg-primary text-white contact-info-bx">
        					<h2 class="m-b10 title-head">
        						Info <span>Pendaftaran</span>
        					</h2>
        					<p>
        						Kuliah perdana akan dilaksanakan pada tanggal 26 Oktober
        						2020.
        					</p>
        					<div class="widget widget_getintuch">
        						<ul>
        							<li>
        								<i class="ti-location-pin"></i>Jl. Harsono RM No.1
        								Ragunan, Ps. Minggu, Jakarta Selatan
        							</li>
        							<li><i class="ti-mobile"></i>(021) 27806189</li>
        							<li><i class="ti-email"></i>pmb@unsia.ac.id</li>
        						</ul>
        					</div>
        					<h5 class="m-t0 m-b20">Follow Us</h5>
        					<ul class="list-inline contact-social-bx">
        						<li>
        							<a target="_blank" href="https://www.facebook.com/Universitas-Siber-Asia-115760190260178"
        								class="btn outline radius-xl"><i class="fa fa-facebook"></i></a>
        						</li>
        						<li>
        							<a target="_blank"
        								href="https://api.whatsapp.com/send?phone=6281213732772&text=Hallo%20Admin%20UNSIA"
        								class="btn outline radius-xl"><i class="fa fa-whatsapp"></i></a>
        						</li>
        						<li>
        							<a target="_blank" href="https://www.instagram.com/asiacyberuniversity/"
        								class="btn outline radius-xl"><i class="fa fa-instagram"></i></a>
        						</li>
        					</ul>
        				</div>
        			</div>
        			<div class="col-lg-7 col-md-7">
        				<form class="contact-bx" method="post" action="<?= base_url('home/semuabisakuliah'); ?>">
                <?= $this->session->flashdata('message'); ?>
        					<div class="heading-bx left">
        						<h2 class="title-head">Get In <span>Touch</span></h2>
        					</div>
        					<div class="row placeani">
        						<div class="col-lg-6">
        							<div class="form-group">
        								<div class="input-group">
        									<label>Your Name</label>
        									<input type="name" class="form-control valid-character" id="inputName" name="name"
        										value="<?= set_value('name'); ?>" required>
        								</div>
        							</div>
        						</div>
        						<div class="col-lg-6">
        							<div class="form-group">
        								<div class="input-group">
        									<label>Your Email Address</label>
        									<input type="email" class="form-control" id="inputEmail" name="email" required>
        								</div>
        							</div>
        						</div>
        						<div class="col-lg-6">
        							<div class="form-group">
        								<div class="input-group">
        									<label>Your Phone</label>
        									<input type="text" class="form-control int-value" id="inputPhone" name="phone"
        										value="<?= set_value('phone'); ?>" required>
        								</div>
        							</div>
        						</div>
        						<div class="col-lg-6">
        							<div class="form-group">
        								<div class="input-group">
        									<label>Subject</label>
        									<input type="text" class="form-control" id="inputSubject" name="subject"
        										value="<?= set_value('subject'); ?>" required>
        								</div>
        							</div>
        						</div>
        						<div class="col-lg-12">
        							<div class="form-group">
        								<div class="input-group">
        									<label>Type Message</label>
        									<textarea class="form-control" id="exampleFormControlTextarea1" name="message"
        										value="<?= set_value('message'); ?>" rows="3" required></textarea>
        								</div>
        							</div>
        						</div>
        						<div class="col-lg-12">
        							<button type="submit" class="btn button-md">
        								Send Message
        							</button>
        						</div>
        					</div>
        				</form>
        			</div>
        		</div>
        	</div>
        </div>
        <!-- inner page banner END -->
        </div>
        <!-- Content END-->