<!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->


                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Data Beasiswa
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Nama</th>
                                                    <th>Sumber</th>
                                                    <th style="width: 60px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1;foreach ($beasiswa as $b): ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $b->beasiswa_nama; ?></td>
                                                    <td><?php echo $b->beasiswa_sumber; ?></td>
                                                    <td><a href="<?php echo base_url().'beasiswa/edit/'.$b->beasiswa_id; ?>" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;|&nbsp;
                                                    <a href="<?php echo base_url().'beasiswa/delete/'.$b->beasiswa_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i++;endforeach ?>
                                            </tbody>
                                        </table>
                                        <a href="<?php echo base_url().'beasiswa/add'; ?>"><button type="submit" class="btn btn-info">Tambah</button></a>
                                    </div>
                                </div>
                                  </form>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Data Jenjang
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Nama</th>
                                                    <th style="width: 60px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1;foreach ($jenjang as $j): ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $j->jenjang_nama; ?></td>
                                                    <td><a href="<?php echo base_url().'jenjang/edit/'.$j->jenjang_id; ?>" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;|&nbsp;
                                                    <a href="<?php echo base_url().'jenjang/delete/'.$j->jenjang_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i++;endforeach ?>
                                            </tbody>
                                        </table>
                                        <a href="<?php echo base_url().'jenjang/add'; ?>"><button type="submit" class="btn btn-info">Tambah</button></a>
                                    </div>
                                </div>
                                  </form>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Data EPSBED
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example2">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Kode EPSBED</th>
                                                    <th>Nama</th>
                                                    <th style="width: 60px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1;foreach ($epsbed as $e): ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $e->epsbed_kode; ?></td>
                                                    <td><?php echo $e->epsbed_nama; ?></td>
                                                    <td><a href="<?php echo base_url().'epsbed/edit/'.$e->epsbed_kode; ?>" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;|&nbsp;
                                                    <a href="<?php echo base_url().'epsbed/delete/'.$e->epsbed_kode; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i++;endforeach ?>
                                            </tbody>
                                        </table>
                                        <a href="<?php echo base_url().'epsbed/add'; ?>"><button type="submit" class="btn btn-info">Tambah</button></a>
                                    </div>
                                </div>
                                  </form>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  Data Pekerjaan Orang Tua
                              </header>
                              <div class="panel-body">
                                  <form role="form">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example3">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Nama</th>
                                                    <th style="width: 60px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1;foreach ($pekerjaan as $p): ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $p->pekerjaan_nama; ?></td>
                                                    <td><a href="<?php echo base_url().'pekerjaan/edit/'.$p->pekerjaan_id; ?>" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;|&nbsp;
                                                    <a href="<?php echo base_url().'pekerjaan/delete/'.$p->pekerjaan_id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i++;endforeach ?>
                                            </tbody>
                                        </table>
                                        <a href="<?php echo base_url().'pekerjaan/add'; ?>"><button type="submit" class="btn btn-info">Tambah</button></a>
                                    </div>
                                </div>
                                  </form>
                              </div>
                          </section>
                      </div>
                </section><!-- /.content -->

            </aside><!-- /.right-side -->