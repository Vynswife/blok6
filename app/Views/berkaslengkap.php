<div class="content-body">

            
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?=base_url('home/aksi_e_berkas')?>" method="post" enctype="multipart/form-data">
                                <h4 class="card-title">Formulir pengisian Laporan Keluhan</h4>
                                <p class="text-muted m-b-15 f-s-12">tolong isi ini berdasarkan fakta dan bukti yang real</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Foto Anda</label>
                                            <div class="pt-2">
                                                <input type="file" name="foto1" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="yourUsername" class="form-label">Foto KTP Anda</label>
                                            <div class="pt-2">
                                                <input type="file" name="foto2" class="form-control">
                                            </div>
                                        </div>

                                        </div>
                                            <div class="col-auto">
                                                <input type="hidden" name="id" value="<?= $wow->id?>">
                                                <button type="submit" class="btn btn-dark mb-2">Submit</button>
                                                <button type="reset" class="btn btn-dark mb-2">reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

