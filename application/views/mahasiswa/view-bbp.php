 <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">

                <!-- Main content -->
                <div class="isi">
                    
                
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
                                                    <th>NPM</th>
                                                    <th>Nama</th>
                                                    <th>Penghasilan</th>
                                                    <th>Nilai Prestasi</th>
                                                    <th>IPK</th>
                                                    <th>Jumlah SKS</th>
                                                    <th>Status</th>
                                                    <th style="width: 60px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i=1;foreach ($record as $r): ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $r->mahasiswa_npm; ?></td>
                                                    <td><?php echo $r->mahasiswa_nama; ?></td>
                                                    <td><?php echo $r->mahasiswa_penghasilan; ?></td>
                                                    <td><?php echo $r->mahasiswa_n_prestasi; ?></td>
                                                    <td><?php echo $r->mahasiswa_ipk; ?></td>
                                                    <td><?php echo $r->mahasiswa_sks; ?></td>
                                                    <td><?php echo $r->mahasiswa_status; ?></td>
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