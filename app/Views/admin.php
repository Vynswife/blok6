<div class="content-body">
	<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List admin untuk dihubungi</h4>
                                <div class="table-responsive">
                                    <table class="table datatable">
        	<?php if(session()->get('level')==1){?>
              <a href="<?= base_url('home/t_admin')?>">
            <button type="button" class="btn mb-1 btn-rounded btn-outline-primary"><i class="fa fa-upload color-success"></i></button></a><?php }?>
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
                    <?php if(session()->get('level')==1){?>
                    <th scope="col">Aksi</th>
                    <?php }?>
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


            <?php if(session()->get('level')==1){?>
              <td>
            <a href="<?=base_url('home/h_admin/'.$kin->id)?>">
          <button class="btn btn-outline-primary"><i class="fa fa-trash font-18 align-middle mr-2"></i></button></a>

            <a href="<?=base_url('home/e_admin/'.$kin->id)?>">
          <button class="btn btn-primary"><i class="icon-note menu-icon"></i></button></a></td>
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