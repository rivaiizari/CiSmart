<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
  <!-- Content Header (Page header) -->
      <!-- Main content -->
      <div class="row isi">
        <?php if ($this->session->flashdata('error')){ ?>
        <div class="row">
          <div class="col-md-offset-3 col-md-6">
            <div class="salah">
              <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo $this->session->flashdata('error'); ?>
              </div>
            </div>
          </div>
        </div>
        <?php }elseif ($this->session->flashdata('sukses')){ ?>
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
        <div class="col-md-12">
          <section class="panel">
            <header class="panel-heading">
              <?php echo $title;?>
            </header>
            <div class="panel-body container">
              <form class="form-horizontal tasi-form" method="post" action="<?php echo base_url().'profile'; ?>">

                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Nama Mahasiswa</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama" value="<?php echo $row['user_nama_lengkap'] ?>">
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Username</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="uname" value="<?php echo $row['user_username'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Password</label>
                  <div class="col-sm-2">
                    <input type="password" class="form-control" name="pass" placeholder="******">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-3 col-sm-3 control-label">Reenter Password</label>
                  <div class="col-sm-2">
                    <input type="password" class="form-control" name="pass1"  placeholder="******">
                  </div>
                </div>

               
                <button type="submit" class="btn btn-info" name="submit">Submit</button>
              </form>

            </div>
          </section>
        </div>
      </div>

</aside><!-- /.right-side -->