<div class="content-body">
	<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List polisi untuk dihubungi</h4>
                                <div class="table-responsive">
                                    <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Departemen penugasan</th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Nomor kontak</th>
                    <th scope="col">Status</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Profile</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($jes as $kin){?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $kin->nama?></td>
				<td><?= $kin->jabatan?></td>
				<td><?= $kin->departemen_penugasan?></td>
        <td><?= $kin->jenis?></td>
        <td><?= $kin->kontak?></td>
        <td><?= $kin->status?></td>
        <td><img src="<?= base_url('img/'.$kin->foto)?>"width="80 px"></td>

	  
        <td> <a href="<?=base_url('home/profile1/'.$kin->id_polisi)?>">
            <button class="btn btn-info"><i class="icon-people"></i></button></a></td>


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