<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
  <!-- Content Header (Page header) -->
      <!-- Main content -->
      <div class="row isi">
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
              Input Mahasiswa
            </header>
            <div class="panel-body container">
              <form class="form-horizontal tasi-form" method="post" action="<?php echo base_url().'mahasiswa/add'; ?>" id="tambahakun">
              <div class="text-center"><h3>DATA MAHASISWA</h3></div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nomor Induk Mahasiswa</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="npm" id="mahasiswa_npm" placeholder="00.00.0000" required><span id="pesan"></span>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi dengan pemisah ' . '</span></div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Mahasiswa</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama" id="nama" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jenis Beasiswa</label>
                  <div class="col-sm-2">
                  <select class="form-control m-b-10" name="jenis_beasiswa">
                  <?php foreach ($beasiswa as $b): ?>
                      <option value="<?php echo $b->beasiswa_id; ?>"><?php echo $b->beasiswa_nama; ?></option>
                  <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-5">
                     <div class="radio">
                      <label>
                        <input type="radio" name="jk" id="optionsRadios1" value="1" checked="">
                        Laki-Laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" id="optionsRadios2" value="2">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
               
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">IPK</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="ipk" placeholder="4.00" required>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi dengan pemisah titik(' . ').</span></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jumlah SKS</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" name="sks" required >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Prestasi</label>
                  <div class="col-sm-2">
                    <textarea rows="5" cols="80" name="prestasi"></textarea>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi dengan prestasi saat menjadi mahasiswa. <strong>Dapat dikosongkan.</strong></span></div>

                </div>
               
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Penerima Beasiswa Lama/Baru</label>
                  <div class="col-sm-5">
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" id="optionsRadios1" value="Lama" checked="">
                        Lama / Meneruskan
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" id="optionsRadios2" value="Baru">
                        Baru
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Bank</label>
                  <div class="col-sm-2 control-label"> Bank Muamalat Indonesia
                    <input type="hidden" class="form-control" value=" Bank Muamalat Indonesia" name="bank" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Mahasiswa diRekening</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="nama_rekeneing" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">No Rekening</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="rekening" required>
                  </div>
                </div>
          
                <hr/>
                <div class="text-center"><h3>DATA ORANG TUA</h3></div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Orang Tua</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="ortu" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Alamat Rumah Orang tua</label>
                  <div class="col-sm-6">
                    <textarea rows="5" cols="80" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nomor Telepon Orang Tua/Wali</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="tlp" placeholder='085724111222' required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Pekerjaan Orang Tua</label>
                  <div class="col-sm-4">
                  <select class="form-control m-b-10" name="pekerjaan">
                      <?php foreach ($pekerjaan_orang_tua as $k): ?>
                      <option value="<?php echo $k->pekerjaan_id; ?>"><?php echo $k->pekerjaan_nama; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jumlah Tanggungan Orang Tua</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" maxlength="3" name="tanggungan" required>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Jumlah orang yang menjadi tanggungan orang tua/wali mahasiswa.</span></div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jumlah penghasilan Orang Tua</label>
                  <div class="col-sm-3">
                    <div class="input-group m-b-10">
                    <span class="input-group-addon">Rp</span>
                      <input type="text" class="form-control" id="inputku" placeholder="24.000.000" name="penghasilan" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
                    </div>
                  </div>
                  <div class="col-sm-offset-3 col-sm-7"><span class="help-block"> Nominal angka merupakan pendapatan rata-rata bulanan. Diisi tanpa ' Rp ' dan 2 digit belakang koma(XXX,00).</span></div>

                </div>
                
                <hr/>
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
              </form>

            </div>
          </section>
        </div>
      </div>

</aside><!-- /.right-side -->