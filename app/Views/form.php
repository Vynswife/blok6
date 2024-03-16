<div class="content-body">

            
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?=base_url('home/aksi_t_form')?>" method="post" enctype="multipart/form-data">
                                <h4 class="card-title">Formulir pengisian Laporan Keluhan</h4>
                                <p class="text-muted m-b-15 f-s-12">tolong isi ini berdasarkan fakta dan bukti yang real</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Nama Anda</label>
                                            <input type="text" class="form-control input-default" placeholder="masukan nama anda" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Nomor identifikasi Anda</label>
                                            <input type="text" class="form-control input-flat" placeholder="masukan nomor identifikasi anda" name="nom">
                                        </div>

                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="yourUsername" class="form-label">Jenis keluhan yang dipunyai</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="jenis">
                                                        <option value="Pencurian">Pencurian</option>
                                                        <option value="Kehilangan">Kehilangan</option>
                                                        <option value="Fasilitas umum">Fasilitas umum</option>
                                                    </select>
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="yourUsername" class="form-label">Tingkat urgensi</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="tingkat">
                                                        <option value="Darurat">Darurat</option>
                                                        <option value="Tidak Darurat">Tidak Darurat</option>
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Kontak Anda</label>
                                            <input type="text" class="form-control input-default" placeholder="masukan nomor kontak anda" name="kontak">
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Lokasi kejadian</label>
                                            <input type="text" class="form-control input-default" placeholder="masukan lokasi" name="lokasi">
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Foto Bukti</label>
                                            <div class="pt-2">
                                                <input type="file" name="foto" class="form-control" value="<?= $php->foto?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Penjelasan lebih lanjut</label>
                                            <div class="pt-2">
                                                <div class="form-group">
                                            <textarea class="form-control h-150px" rows="6" name="komentar" placeholder="isilah penjelasan dari masalah yang akan dilaporkan sejelas mungkin"></textarea>
                                        </div>
                                            </div>
                                        </div>

                                        </div>
                                            <div class="col-auto">
                                                <button type="submit" class="btn btn-dark mb-2">Submit</button>
                                                <button type="reset" class="btn btn-dark mb-2">reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

