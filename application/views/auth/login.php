<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>

                                <!-- Notifikasi Akun Berhasil Dibuat -->
                                <?= $this->session->flashdata('message'); ?>

                                <!-- Form Halaman Daftar -->
                                <form class="user" method="post" action="<?= base_url('auth/'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nim" placeholder="Masukan NIM" name="nim" value="<?= set_value('nim'); ?>">
                                        <?= form_error('nim', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class=" form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Masukan Password" name="password">
                                        <?= form_error('password', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>

                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/registration'); ?>">Buat Akun!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>