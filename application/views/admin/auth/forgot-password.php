<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image">
                            <img src="<?= base_url(); ?>assets/admin/img/login-img.jpg" class="w-100" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>assets/admin/img/logo.png" alt="" width="200">
                                    <h1 class="h4 text-gray-900 mb-4 mt-4">Forgot Password</h1>
                                </div>

                                <?= $this->session->flashdata('message');
                                ?>

                                <form class="user" method="POST" action="<?= base_url('admin/auth/forgotpassword'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email">
                                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Reset Password
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('admin/auth') ?>">Login</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>admin/auth/registration">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>