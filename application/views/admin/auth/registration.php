  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image">
            <img src="<?= base_url(); ?>assets/admin/img/login-img.jpg" class="w-100" alt="">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <img src="<?= base_url(); ?>assets/admin/img/logo.png" alt="" width="200">
                <h1 class="h4 text-gray-900 mb-4 mt-4">Create an Account!</h1>
              </div>
              <form class="user" method="POST" action="<?= base_url('admin/auth/registration'); ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                  <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('admin/auth/forgotpassword') ?>">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url(); ?>admin/auth">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>