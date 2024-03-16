<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
<div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                
                                    <a class="text-center" href="index.html"> <h4>Register your first account!</h4></a>
        
                                <form class="mt-5 mb-5 login-input" action="<?=base_url('home/aksi_t_register')?>" method="post">
                                	<div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Anda" name="nama"required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Number identification" name="nom"required>
                                    </div>
                                    <div class="form-group">
                                        <input type="Password" class="form-control" placeholder="Password"name="pass">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Alamat Email"name="alamat_email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Alamat"name="alamat">
                                    </div>
                                    <div class="form-group">
                                    	<label for="yourUsername" class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control" placeholder="Alamat Email"name="tanggal_lahir">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nomor Telepon"name="kontak">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign in</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="http://localhost:8080/home/loginmasyarakat" class="text-primary">Sign Up </a> now</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('plugins/common/common.min.js')?>"></script>
    <script src="<?= base_url('js/custom.min.js')?>"></script>
    <script src="<?= base_url('js/settings.js')?>"></script>
    <script src="<?= base_url('js/gleek.js')?>"></script>
    <script src="<?= base_url('js/styleSwitcher.js')?>"></script>
</body>
</html>