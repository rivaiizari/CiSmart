 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">

                <!-- Main content -->
                <div class="isi">
                    <div class="row">
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                      <?php echo $title;?>
                              </header>
                              <div class="panel-body">
                              <form  method="post" action="<?php echo base_url().'laporan/export'; ?>" >
                                  <div class="form-group">
                                    <label class="col-sm-3 col-sm-3 control-label">Jenis Beasiswa</label>
                                    <div class="col-sm-6">
                                      <select class="form-control m-b-10" name="jenis_beasiswa">

                                        <option value="0">Semua Mahasiswa</option>
                                        <?php foreach ($beasiswa as $b): ?>
                                          <option value="<?php echo $b->beasiswa_id; ?>"><?php echo $b->beasiswa_nama; ?></option>
                                        <?php endforeach ?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                  </div>
                                </form>

                              </div>
                          </section>
                      </div>
                </div>
            </aside>