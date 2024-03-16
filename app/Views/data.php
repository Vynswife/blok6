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
                    <th scope="col">Nama pelapor</th>
                    <th scope="col">Nomor identifikasi</th>
                    <th scope="col">Jenis keluhan</th>
                    <th scope="col">Tingkat urgensi masalah</th>
                    <th scope="col">Kontak pelapor</th>
                    <th scope="col">Lokasi apa yang dilaporkan</th>
                    <th scope="col">Foto Bukti</th>
                    <th scope="col">Status</th>
                    <th scope="col">Details</th>
                    <?php if(session()->get('level')==1){?>
                    <th scope="col">Aksi</th>
                    <?php }?>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach($jes as $kin){?>
			<tr>
				<td><?= $no++?></td>
				<td><?= $kin->nama_pelapor?></td>
				<td><?= $kin->nomor_identifikasi?></td>
				<td><?= $kin->jenis_keluhan?></td>
                <td><?= $kin->tingkat?></td>
                <td><?= $kin->kontak?></td>
                <td><?= $kin->lokasi?></td>
                <td><img src="<?= base_url('img/'.$kin->foto_bukti)?>"width="80 px"></td>
                <td><?= $kin->status?></td>

                <td><a href="<?=base_url('home/detail/'.$kin->id_laporan)?>">
          <button class="btn btn-outline-primary">Details</i></button></a></td>

            <?php if(session()->get('level')==1){?>
              <td>
            <a href="<?=base_url('home/h_laporan/'.$kin->id_laporan)?>">
          <button class="btn btn-outline-primary"><i class="fa fa-trash font-18 align-middle mr-2"></i></button></a>

            <a href="<?=base_url('home/e_laporan/'.$kin->id_laporan)?>">
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