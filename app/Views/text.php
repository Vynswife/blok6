<div class="content-body">
  <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
              <h5 class="card-title">Terima kasih <?=session()->get('nama')?></h5>
              <h6 class="card-title">Mohon <?=session()->get('nama')?> untuk menunggu 1-3 hari untuk admin merespond laporan yang anda kirim </h6>
              <h7 class="card-title">Klik disini untuk kembali ke Homepage</h7>
              <a href="<?=base_url('home/berandas')?>">
          <button class="btn btn-outline-primary">kembali</button></a>
                </div>
              </div>

            </div><!-- End Customers Card -->
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->