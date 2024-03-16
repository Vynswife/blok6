<div class="content-body">

            
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?=base_url('home/aksi_t_admin')?>" method="post" enctype="multipart/form-data">
                                <h4 class="card-title">Penambahan Akun Admin</h4>
                                <p class="text-muted m-b-15 f-s-12">Tolong isi ini dengan seksama</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Nama Anda</label>
                                            <input type="text" class="form-control input-default" placeholder="masukan nama anda" name="nama">
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Nomor identifikasi</label>
                                            <input type="text" class="form-control input-flat" placeholder="masukan nomor identifikasi yang akan dibuat" name="nom">
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Password</label>
                                            <input type="password" class="form-control input-flat" placeholder="masukan password yang akan dibuat" name="pass">
                                        </div>

                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="yourUsername" class="form-label">Jenis kelamin</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="jenis">
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Tanggal lahir</label>
                                            <input type="date" class="form-control input-default" placeholder="masukan nomor kontak anda" name="tanggal">
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Jabatan</label>
                                            <input type="text" class="form-control input-default" placeholder="masukan jabatan" name="jabatan">
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Kontak Anda</label>
                                            <input type="text" class="form-control input-default" placeholder="masukan nomor kontak anda" name="kontak">
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Alamat email</label>
                                            <input type="text" class="form-control input-default" placeholder="masukan alamat email" name="alamat_email">
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Foto Identitas</label>
                                            <div class="pt-2">
                                                <input type="file" name="foto" class="form-control" value="<?= $php->foto?>">
                                            </div>
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

