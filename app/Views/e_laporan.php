<div class="content-body">

            
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?=base_url('home/aksi_e_laporan')?>" method="post" enctype="multipart/form-data">
                                <h4 class="card-title">Tanggapan & Status laporan</h4>
                                <p class="text-muted m-b-15 f-s-12">Mengirim komentar/tanggapan mengenai laporan yang dikirim oleh masyarakat</p>
                                <div class="basic-form">
                                    <form>
                                            <div class="form-group">
                                            <label for="yourUsername" class="form-label">Tanggapan dari situasi dan tindak lanjutnya</label>
                                            <div class="pt-2">
                                                <div class="form-group">
                                            <textarea class="form-control h-150px" rows="6" name="komentar" placeholder="isilah sesuatu sopan mengenai penanganan isu masyarakat apakah diterima atau tidak"></textarea>
                                        </div>
                                            <label for="yourUsername" class="form-label">Status laporan</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="status">
                                                        <option value="<?= $php->status?>"><?= $php->status?></option>
                                                        <option value="Dalam proses penanganan">Proses Penanganan</option>
                                                        <option value="Sedang ditinjau">Ditinjau</option>
                                                        <option value="Closed">Ditutup / Selesai</option>
                                                    </select>
                                                </div>
                                        </div>
                                            </div>
                                        </div>

                                        </div>
                                            <div class="col-auto">
                                                <input type="hidden" name="id" value="<?= $php->id_laporan?>">
                                                <button type="submit" class="btn btn-dark mb-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

