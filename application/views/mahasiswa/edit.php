<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
  <!-- Content Header (Page header) -->
      <!-- Main content -->
      <div class="row isi">
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
              <?php echo $title;?>
            </header>
            <div class="panel-body container">
              <form class="form-horizontal tasi-form" method="post" action="<?php echo base_url().'mahasiswa/edit'; ?>">
              <input type="hidden" name="no_urut" value="<?php echo $row['mahasiswa_no_urut'] ?>">
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nomor Induk Mahasiswa</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="npm" id="npm" disable value="<?php echo $row['mahasiswa_npm'] ?>"><span id="pesan" ></span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Mahasiswa</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama" value="<?php echo $row['mahasiswa_nama'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jenis Beasiswa</label>
                  <div class="col-sm-2">
                  <select class="form-control m-b-10" name="jenis_beasiswa">
                  <?php foreach ($beasiswa as $b): ?>
                      <option value="<?php echo $b->beasiswa_id; ?>" <?php if($b->beasiswa_id == $row['mahasiswa_beasiswa']) echo "selected"; ?> ><?php echo $b->beasiswa_nama; ?></option>
                  <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-5">
                     <div class="radio">
                      <label>
                        <input type="radio" name="jk" id="optionsRadios1" value="1" <?php if($row['mahasiswa_jk']=='1') echo "checked"; ?> >
                        Laki-Laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jk" id="optionsRadios2" value="2" <?php if($row['mahasiswa_jk']=='2') echo "checked"; ?>>
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
                      <option value="<?php echo $p->epsbed_kode; ?>" <?php if($p->epsbed_kode == $row['mahasiswa_kode_prodi']) echo "selected"; ?>><?php echo $p->epsbed_kode.' - '.$p->epsbed_nama; ?></option>
                  <?php endforeach ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jenjang Kuliah</label>
                  <div class="col-sm-5">
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenjang_kuliah" id="optionsRadios1" value="3" <?php if($row['mahasiswa_jenjang']=='3') echo "checked"; ?>>
                        Diploma 3
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenjang_kuliah" id="optionsRadios2" value="4" <?php if($row['mahasiswa_jenjang']=='4') echo "checked"; ?>>
                        Strata 1
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">IPK</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" name="ipk" value="<?php echo $row['mahasiswa_ipk'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jumlah SKS</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" name="sks" value="<?php echo $row['mahasiswa_sks'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Prestasi</label>
                  <div class="col-sm-2">
                    <textarea rows="5" cols="80" name="prestasi" value="<?php echo $row['mahasiswa_prestasi'] ?>"><?php echo $row['mahasiswa_prestasi'] ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nilai Prestasi</label>
                  <div class="col-sm-3">
                    <input type="number" class="form-control" name="n_prestasi" value="<?php echo $row['mahasiswa_n_prestasi'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Penerima Beasiswa Lama/Baru</label>
                  <div class="col-sm-5">
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" id="optionsRadios1" value="Lama" <?php if($row['mahasiswa_status']=='Lama') echo "checked"; ?>>
                        Lama
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" id="optionsRadios2" value="Baru" <?php if($row['mahasiswa_status']=='Baru') echo "checked"; ?>>
                        Baru
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Keterangan</label>
                  <div class="col-sm-2">
                    <textarea rows="5" cols="80" name="keterangan" ><?php echo $row['mahasiswa_keterangan'] ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Bank</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" value="Muamalat" name="bank">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Mahasiswa diRekening</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="nama_rekeneing" value="<?php echo $row['mahasiswa_nama_mhs_direkening'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">No Rekening</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="rekening" value="<?php echo $row['mahasiswa_no_rekening'] ?>">
                  </div>
                </div>

                <hr/>
                <div class="text-center"><h3>DATA ORANG TUA</h3></div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Orang Tua</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control"  name="ortu" value="<?php echo $row['mahasiswa_nama_ortu'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Alamat</label>
                  <div class="col-sm-6">
                    <textarea rows="5" cols="80" name="alamat" ><?php echo $row['mahasiswa_alamat'] ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nomor Telepon Orang Tua/Wali</label>
                  <div class="col-sm-3">
                    <input type="text" class="form-control" name="tlp" value="<?php echo $row['mahasiswa_telepon'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Pekerjaan</label>
                  <div class="col-sm-4">
                  <select class="form-control m-b-10" name="pekerjaan">
                      <?php foreach ($pekerjaan_orang_tua as $k): ?>
                      <option value="<?php echo $k->pekerjaan_id; ?>" <?php if($k->pekerjaan_id == $row['mahasiswa_pekerjaan']) echo "selected"; ?> ><?php echo $k->pekerjaan_nama; ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jumlah Tanggungan</label>
                  <div class="col-sm-2">
                    <input type="number" class="form-control" maxlength="3" name="tanggungan" value="<?php echo $row['mahasiswa_jml_tanggungan'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Jumlah penghasilan Orang Tua</label>
                  <div class="col-sm-3">
                    <div class="input-group m-b-10">
                    <span class="input-group-addon">Rp</span>
                      <input type="text" class="form-control" id="inputku" value="<?php echo $row['mahasiswa_penghasilan'] ?>" name="penghasilan" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);">
                    </div>
                  </div>
                  <div class="col-sm-offset-3 col-sm-7"><span class="help-block"> Nominal angka merupakan pendapatan rata-rata bulanan. Diisi tanpa ' Rp ' dan 2 digit belakang koma(XXX,00).</span></div>
                </div>
           
                
               
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
              </form>

            </div>
          </section>
        </div>
      </div>

</aside><!-- /.right-side -->