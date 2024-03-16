<div class="content-body">
    <div class="container-fluid">
                <div class="row">

<div class="col-xl-12 col-lg-12 col-sm-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Detail laporan keluhan dari <?= $php->nama_pelapor?></h4>
                                <div id="activity">
                                        
                                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <p class="small fst-italic"></p>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-19 col-md-19"><?= $php->nama_pelapor?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nomor Identifikasi</div>
                    <div class="col-lg-19 col-md-19"><?= $php->nomor_identifikasi?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Keluhan</div>
                    <div class="col-lg-19 col-md-19"><?= $php->jenis_keluhan?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tingkat Urgensi</div>
                    <div class="col-lg-19 col-md-19"><?= $php->tingkat?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nomor HP Pelapor</div>
                    <div class="col-lg-19 col-md-19"><?= $php->kontak?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Lokasi dilaporkan</div>
                    <div class="col-lg-19 col-md-19"><?= $php->lokasi?></div>
                  </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Foto Bukti atau Foto Penjelas situasi</div>
                    <img src="<?= base_url('img/'.$php->foto_bukti)?>"  width="300 px">
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Penjelasan atau cerita dari situasi dialami</div>
                    <div class="col-lg-19 col-md-19"><?= $php->penjelasan?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggapan atau konfirmasi dari pihak admin</div>
                    <div class="col-lg-19 col-md-19"><?= $php->tanggapan?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Status</div>
                    <div class="col-lg-19 col-md-19"><?= $php->status?></div>
                  </div>
                </div>

                                    </div>
                                    <div>
                                    <?php if(session()->get('level')==1){?>
                    <a href="<?=base_url('home/e_laporan/'.$php->id_laporan)?>">
          <button class="btn btn-primary">respond laporan <i class="fa fa-paper-plane font-18 align-middle mr-2"></i></i></button></a></td>
          <?php }?></div>
                            </div>
                        </div>
                    </div>