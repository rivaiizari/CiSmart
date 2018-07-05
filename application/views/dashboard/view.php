 <!-- Right side column. Contains the navbar and content of the page -->
 <aside class="right-side">

    <!-- Main content -->
    <div class=" isi">
        <div class="row" style="margin-bottom:5px;">

            <div class="col-md-4">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-green"><i class="fa fa-paperclip"></i></span>
                    <div class="sm-st-info">
                        <span><?php echo $all; ?></span>
                        Total Pendaftar
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-red"><i class="fa fa-users"></i></span>
                    <div class="sm-st-info">
                        <span><?php echo $ppa; ?> ( <?php echo substr($Pppa,0,5).' % )' ?></span>
                        Total Pendaftar PPA
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-violet"><i class="fa fa-users"></i></span>
                    <div class="sm-st-info">
                        <span><?php echo $bbp; ?> ( <?php echo substr($Pbbp,0,5).' % )' ?></span>
                        Total Pendaftar BBP-PPA
                    </div>
                </div>
            </div>

        </div>
        <div class="row" style="margin-bottom:5px;">
            <div class="col-md-3">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-violet">MI</span>
                    <div class="sm-st-info">
                        <span><?php echo $mi; ?></span>
                        Pendaftar D3 Manajemen Infromatika
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-violet">SI</span>
                    <div class="sm-st-info">
                    <span><?php echo $si; ?></span>
                        Pendaftar S1 Sistem Informasi
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-red">TI</span>
                    <div class="sm-st-info">
                        <span><?php echo $ti3; ?></span>
                        Pendaftar D3 Teknik Infromatika
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sm-st clearfix">
                    <span class="sm-st-icon st-blue">TI</span>
                    <div class="sm-st-info">
                        <span><?php echo $ti1; ?></span>
                        Pendaftar S1 Teknik Infromatika
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <section class="panel">
                  <header class="panel-heading">
                      Pendaftar Beasiswa PPA
                  </header>
                  <div class="panel-body table-responsive">
                    <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Jurusan</th>
                              <th>Jumlah</th>
                              <th>Presentase</th>
                          </tr>
                      </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>D3 Manajemen Informatika</td>
                          <td><span class="label label-primary"><?php echo $ppami; ?></span></td>
                          <td><span class="badge badge-primary"><?php echo substr($P_ppami,0,5).' %' ?></span></td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>D3 Teknik Informatika</td>
                          <td><span class="label label-danger"><?php echo $ppati3; ?></span></td>
                          <td><span class="badge badge-danger"><?php echo substr($P_ppati3,0,5).' %' ?></span></td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>S1 Sistem Informasi</td>
                          <td><span class="label label-primary"><?php echo $ppasi; ?></span></td>
                          <td><span class="badge badge-primary"><?php echo substr($P_ppasi,0,5).' %' ?></span></td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>S1 Teknik Informatika</td>
                          <td><span class="label label-info"><?php echo $ppati1; ?></span></td>
                          <td><span class="badge badge-info"><?php echo substr($P_ppati1,0,5).' %' ?></span></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td>Jumlah : </td>
                          <td><span class="label label-success"><?php echo $ppa; ?></span></td>
                          <td><span class="badge badge-success">100%</span></td>
                      </tr>
                  </tbody>
              </table>
            </div> <!-- responsiv -->
          </section>
          </div> <!-- panel -->
          <div class="col-md-6">
                <section class="panel">
                  <header class="panel-heading">
                      Pendaftar Beasiswa BBP-PPA
                  </header>
                  <div class="panel-body table-responsive">
                    <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Jurusan</th>
                              <th>Jumlah</th>
                              <th>Presentase</th>
                          </tr>
                      </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>D3 Manajemen Informatika</td>
                          <td><span class="label label-primary"><?php echo $bbpmi; ?></span></td>
                          <td><span class="badge badge-primary"><?php echo substr($P_bbpmi,0,5).' %' ?></span></td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>D3 Teknik Informatika</td>
                          <td><span class="label label-danger"><?php echo $bbpti3; ?></span></td>
                          <td><span class="badge badge-danger"><?php echo substr($P_bbpti3,0,5).' %' ?></span></td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>S1 Sistem Informasi</td>
                          <td><span class="label label-primary"><?php echo $bbpsi; ?></span></td>
                          <td><span class="badge badge-primary"><?php echo substr($P_bbpsi,0,5).' %' ?></span></td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>S1 Teknik Informatika</td>
                          <td><span class="label label-info"><?php echo $bbpti1; ?></span></td>
                          <td><span class="badge badge-info"><?php echo substr($P_ppati1,0,5).' %' ?></span></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td>Jumlah : </td>
                          <td><span class="label label-success"><?php echo $bbp; ?></span></td>
                          <td><span class="badge badge-success">100%</span></td>
                      </tr>
                  </tbody>
              </table>
            </div> <!-- responsiv -->
          </section>
          </div> <!-- panel -->

            
        </div> <!-- row -->
  </div><!-- /.isi -->
</aside>