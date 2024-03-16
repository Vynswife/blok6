

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
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Login</h4></a>
        
                               <form class="mt-5 mb-5 login-input" novalidate action="<?=base_url('home/aksi_loginguest')?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Number identification" name="nom"required>
                                    </div>
                                    <div class="form-group">
                                        <input type="Password" class="form-control" placeholder="Password"name="pass">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Log In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="http://localhost:8080/home/register" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="<?= base_url('plugins/common/common.min.js')?>"></script>
    <script src="<?= base_url('js/custom.min.js')?>"></script>
    <script src="<?= base_url('js/settings.js')?>"></script>
    <script src="<?= base_url('js/gleek.js')?>"></script>
    <script src="<?= base_url('js/styleSwitcher.js')?>"></script>
</body>
</html>





