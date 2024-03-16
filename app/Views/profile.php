<div class="content-body">
    <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                    <img src="<?= base_url('img/'.$php->foto)?>" alt="Profile" class="rounded-circle" width="150 px">
                                    <div class="media-body">
                                        <h3 class="mb-0"><?= $wow->nama?></h3>
                                        <p class="text-muted mb-0"><?= $wow->jabatan?></p>
                                    </div>
                                </div>
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <p class="small fst-italic"></p>
                                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-19 col-md-19"><?= $php->nama?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-19 col-md-19"><?= $php->jenis?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jabatan</div>
                    <div class="col-lg-19 col-md-19"><?= $php->jabatan?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Departemen penugasan</div>
                    <div class="col-lg-19 col-md-19"><?= $php->departemen_penugasan?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nomor Telepon</div>
                    <div class="col-lg-19 col-md-19"><?= $php->kontak?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-19 col-md-19"><?= $php->status?></div>
                  </div>
                </div>
</div>
</div>
</div>
                
                             </div>
                        </div>  
                    </div>