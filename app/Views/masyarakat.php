<div class="content-body">
	<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Guest Account</h4>
                                <div class="table-responsive">
                                    <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Alamat email</th>
                    <th scope="col">Tanggal lahir</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Foto KTP</th>
                    <?php if(session()->get('level')==1){?>
                    <th scope="col">Aksi</th>
                    <?php }?>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($jes as $kin){?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $kin->nama_user?></td>
				<td><?= $kin->alamat_email?></td>
				<td><?= $kin->tanggal_lahir?></td>
        <td><?= $kin->alamat?></td>
        <td><?= $kin->kontak?></td>
        <td><img src="<?= base_url('img/'.$kin->foto)?>"width="100 px"></td>
        <td><img src="<?= base_url('img/'.$kin->foto_ktp)?>"width="200 px"></td>

            <?php if(session()->get('level')==1){?>
              <td>
            <a href="<?=base_url('home/h_masyarakat/'.$kin->id)?>">
          <button class="btn btn-outline-primary"><i class="fa fa-trash font-18 align-middle mr-2"></i></button></a></td>
          <?php }?>



			</tr>
		<?php }?>
                </tbody>
              </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>