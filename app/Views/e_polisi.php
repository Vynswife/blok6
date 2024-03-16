<div class="content-body">

            
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?=base_url('home/aksi_e_polisi')?>" method="post" enctype="multipart/form-data">
                                <h4 class="card-title">Status polisi</h4>
                                <p class="text-muted m-b-15 f-s-12">untuk memberitahukan kesiapan dari pihak polisi untuk mengatasi keluhan masyarakat</p>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <div class="form-group">
                                            <label for="yourUsername" class="form-label">Status</label>
                                                <div class="form-group">
                                                    <select class="form-control" name="status">
                                                        <option value="<?= $php->status?>"><?= $php->status?></option>
                                                        <option value="tidak dalam misi">Free (tidak dalam misi)</option>
                                                        <option value="In investigation">In investigation</option>
                                                        <option value="keperluan tertentu">Lainnya (keperluan tertentu)</option>
                                                    </select>
                                                </div>
                                        </div>
                                            </div>
                                        </div>

                                        </div>
                                            <div class="col-auto">
                                                <input type="hidden" name="id" value="<?= $php->id_polisi?>">
                                                <button type="submit" class="btn btn-dark mb-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

