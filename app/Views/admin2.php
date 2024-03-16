<div class="content-body">
	<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List admin untuk dihubungi</h4>
                                <div class="table-responsive">
                                    <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Tanggal lahir</th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Alamat email</th>
                    <th scope="col">Foto</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($jes as $kin){?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $kin->nama?></td>
				<td><?= $kin->jabatan?></td>
				<td><?= $kin->tanggal_lahir?></td>
        <td><?= $kin->jk?></td>
        <td><?= $kin->nomor_telpon?></td>
        <td><?= $kin->alamat_email?></td>
         <td><img src="<?= base_url('img/'.$kin->foto)?>"width="80 px"></td>




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