<div class="content-body">
	<div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">List polisi untuk dihubungi</h4>
                                <div class="table-responsive">
                                    <table class="table datatable">
        	<?php if(session()->get('level')==1){?>
              <a href="<?= base_url('home/t_polisi')?>">
            <button type="button" class="btn mb-1 btn-rounded btn-outline-primary"><i class="fa fa-upload color-success"></i></button></a><?php }?>
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
				<td><?= $kin->departemen_penugasan?></td>
        <td><?= $kin->jenis?></td>
        <td><?= $kin->kontak?></td>
        <td><?= $kin->status?></td>
        <td><img src="<?= base_url('img/'.$kin->foto)?>"width="80 px"></td>


        <?php if(session()->get('level')==1){?>       
        <td> <a href="<?=base_url('home/profile/'.$kin->id_polisi)?>">
            <button class="btn btn-info"><i class="icon-people"></i></button></a></td>
            <?php }?>

		<?php if(session()->get('level')==2){?>		  
        <td> <a href="<?=base_url('home/profile1/'.$kin->id_polisi)?>">
            <button class="btn btn-info"><i class="icon-people"></i></button></a></td>
            <?php }?>

            <?php if(session()->get('level')==3){?>
        <td> <a href="<?=base_url('home/profile2/'.$kin->id_polisi)?>">
            <button class="btn btn-info"><i class="icon-people"></i></button></a></td>
<?php }?>
            <?php if(session()->get('level')==1){?>
            	<td>
  					<a href="<?=base_url('home/h_polisi/'.$kin->id_polisi)?>">
  				<button class="btn btn-outline-primary"><i class="fa fa-trash font-18 align-middle mr-2"></i></button></a>

  					<a href="<?=base_url('home/e_polisi/'.$kin->id_polisi)?>">
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