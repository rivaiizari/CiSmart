<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Login Form Template</title>
  <meta name="author" content="Dian.arif@students.amikom.ac.id">

  <!-- CSS -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/form-elements.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style-login.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

            <!-- Favicon and touch icons -->
            <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/icon-amikom.png">

          </head>

          <body>

            <!-- Top content -->
            <div class="top-content">

              <div class="inner-bg">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                      <h1><strong>STMIK AMIKOM YOGYAKARTA</strong> </h1>
                    </div>
                  </div>
                  <?php if (validation_errors()) { ?>
                  <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                      <div class="salah">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <?php echo validation_errors('<strong>','</strong>'); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                      <div class="form-top">
                        <div class="form-top-left">
                          <h3>Form login</h3>
                          <p>Enter your username, password and fill the captcha to log on or <a href="<?php echo base_url().'tambah'; ?>">Daftar</a>:</p>
                        </div>
                        <div class="form-top-right">
                          <i class="fa fa-lock"></i>
                        </div>
                      </div>
                      <div class="form-bottom">
                        <?php
                        echo form_open('auth');
                        ?>

                        <div class="form-group">
                          <label class="sr-only" for="form-username">Username</label>
                          <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username" required>
                        </div>
                        <div class="form-group">
                          <label class="sr-only" for="form-password">Password</label>
                          <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" required>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-8">
                            <input type="text" name="kode_aman" placeholder="Masukan Kode Keamanan" required="" class="form-control">
                          </div>
                          <div class="col-md-4"><?php echo $image;?></div>
                        </div>
                        <button type="submit" class="btn" name="submit">Sign in!</button>
                      </form>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            
          </div>


          <!-- Javascript -->
          <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
          <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
          <script src="<?php echo base_url();?>assets/js/jquery.backstretch.min.js"></script>
          <script>

            jQuery(document).ready(function() {

    /*
        Fullscreen background
        */
        $.backstretch([
          "<?php echo base_url();?>assets/img/backgrounds/3.jpg"
          , "<?php echo base_url();?>assets/img/backgrounds/1.jpg"
          ], {duration: 12000, fade: 750});

    /*
        Form validation
        */
        $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
          $(this).removeClass('input-error');
        });

        $('.login-form').on('submit', function(e) {

          $(this).find('input[type="text"], input[type="password"], textarea').each(function(){
            if( $(this).val() == "" ) {
              e.preventDefault();
              $(this).addClass('input-error');
            }
            else {
              $(this).removeClass('input-error');
            }
          });

        });


      });

          </script>
          

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
            <![endif]-->

          </body>

          </html>