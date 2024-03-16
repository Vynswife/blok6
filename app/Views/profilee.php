<div class="content-body">
    <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img src="<?= base_url('img/'.$php->foto)?>" alt="Profile" class="rounded-circle" width="100 px">
                                    <div class="media-body">
                                        <h3 class="mb-0"><?= $php->nama_user?></h3>
                                        <p class="text-muted mb-0"><?= $php->alamat_email?></p>
                                    </div>
                                </div>
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <p class="small fst-italic"></p>
                                <div class="row">
                    <div class="col-lg-5 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-19 col-md-19"><?= $php->nama_user?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Alamat Email</div>
                    <div class="col-lg-19 col-md-19"><?= $php->alamat_email?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Alamat tempat tinggal</div>
                    <div class="col-lg-19 col-md-19"><?= $php->alamat?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Nomor Telepon</div>
                    <div class="col-lg-19 col-md-19"><?= $php->kontak?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-5 col-md-4 label">Foto KTP</div>
                    <div class="col-lg-19 col-md-19"><img src="<?= base_url('img/'.$php->foto_ktp)?>"width="200 px"></div>
                  </div>
                </div>
</div>
</div>
</div>
                  
                                </div>
                            </div>
                        </div>  
                    </div>
                             </div>
                        </div>  
                    </div>