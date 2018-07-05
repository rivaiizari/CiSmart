 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">

                <!-- Main content -->
                <div class="isi">
                    <?php if ($this->session->flashdata('sukses')){ ?>
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                            <div class="salah">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php echo $this->session->flashdata('sukses'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                      <?php echo $title;?>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Angkatan</th>
                                                    <th>NPM</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Beasiswa</th>
                                                    <th style="width: 60px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1;foreach ($record as $r): ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $r->mahasiswa_tahun; ?></td>
                                                    <td><?php echo $r->mahasiswa_npm; ?></td>
                                                    <td><?php echo $r->mahasiswa_nama; ?></td>
                                                    <td><?php echo $r->beasiswa_nama; ?></td>
                                                    <td><a href="<?php echo base_url().'mahasiswa/edit/'.$r->mahasiswa_no_urut; ?>" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;|&nbsp;
                                                    <a href="<?php echo base_url().'mahasiswa/delete/'.$r->mahasiswa_no_urut; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                <?php $i++;endforeach ?>
                                            </tbody>
                                        </table>
                                        <a href="<?php echo base_url().'mahasiswa/add'; ?>"><button type="submit" class="btn btn-info">Tambah</button></a>
                                    </div>
                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>
                </div>
            </aside>