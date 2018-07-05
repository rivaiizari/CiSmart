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
              <form class="form-horizontal tasi-form" method="post" action="<?php echo base_url().'public/add'; ?>" id="tambahakun">
              <div class="text-center"><h3>DATA MAHASISWA</h3></div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nomor Induk Mahasiswa</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="npm" id="mahasiswa_npm" placeholder="00.00.0000"><span id="pesan"></span>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi pemisah ' . '</span></div>

                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Kode Nasional Perguruan Tinggi</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="kdpti" value="53021">
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
                  <label class="col-sm-3 col-sm-3 control-label">Nama Mahasiswa</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama" id="nama">
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
                  <label class="col-sm-3 col-sm-3 control-label">Kode Prodi</label>
                  <div class="col-sm-5">
                    <select class="form-control m-b-10" name="kode_prodi">
                      <?php foreach ($no_epsbed as $p): ?>
                      <option value="<?php echo $p->epsbed_kode; ?>"><?php echo $p->epsbed_kode.' - '.$p->epsbed_nama; ?></option>
                  <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Tahun Masuk Kuliah</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" name="tahun_masuk" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jenjang Kuliah</label>
                  <div class="col-sm-5">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenjang_kuliah" id="optionsRadios1" value="3" checked="">
                        Diploma 3
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenjang_kuliah" id="optionsRadios2" value="4">
                        Strata 1
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Semester</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" maxlength="1" name="semester" id="semester"><span id="pesan2"></span>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi angka 1 sampai 8</span></div>

                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jumlah SKS</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" name="sks">
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi dengan jumlah sks yang ada dalam transkrip nilai.</span></div>

                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">IPK</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="ipk" placeholder="4.00">
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi dengan pemisah titik(' . ').</span></div>

                </div>
                
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Prestasi</label>
                  <div class="col-sm-2">
                    <textarea rows="5" cols="80" name="prestasi"></textarea>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi dengan prestasi saat menjadi mahasiswa. <strong>Dapat dikosongkan.</strong></span></div>

                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Mulai Bulan</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="mulai" value="2016-01-01">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Selesai Bulan</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="selesai" value="2016-12-01">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Tahun Anggaran</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" maxlength="4" name="tahun" value="2016">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-6">
                    <textarea rows="5" cols="80" name="keterangan"></textarea>
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Diisi dengan keterangan mahasiswa/ beasiswa.<strong>Dapat dikosongkan.</strong></span></div>

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
                  <label class="col-sm-3 col-sm-3 control-label">Nama Mahasiswa diRekening</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="nama_rekeneing">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Bank</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" value=" Bank Muamalat Indonesia" name="bank">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">No Rekening</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="rekening">
                  </div>
                </div>
          
                <hr/>
                <div class="text-center"><h3>DATA ORANG TUA</h3></div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Alamat Rumah Orang tua</label>
                  <div class="col-sm-6">
                    <textarea rows="5" cols="80" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nomor Telepon Orang Tua/Wali</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="tlp" placeholder='085724111222'>
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
                    <input type="number" class="form-control" maxlength="3" name="tanggungan">
                  </div>
                  <div class="col-sm-offset-3 col-sm-9"><span class="help-block">Jumlah orang yang menjadi tanggungan orang tua/wali mahasiswa.</span></div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jumlah penghasilan Orang Tua</label>
                  <div class="col-sm-3">
                    <div class="input-group m-b-10">
                    <span class="input-group-addon">Rp</span>
                      <input type="text" class="form-control" placeholder="24.000.000" name="penghasilan">
                    </div>
                  </div>
                  <div class="col-sm-offset-3 col-sm-7"><span class="help-block">Diisi dengan pemisah ' . ' tanpa ' Rp ' dan 2 digit belakang koma(XXX,00). Nominal angka merupakan pendapatan rata-rata tahunan.</span></div>

                </div>
                
                <hr/>
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
              </form>

            </div>
          </section>
        </div>
      </div>

</aside><!-- /.right-side -->