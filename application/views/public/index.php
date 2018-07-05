<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Amikom Yogyakata</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <meta name="description" content="SPK Beasiswa, STMIK Amikom Yogyakarta">
        <meta name="keywords" content="SPK Beasiswa, STMIK Amikom Yogyakarta">
        <meta name="author" content="Dian Nurma Arif">
        <link rel="shortcut icon" type="image/ico" href="<?php echo base_url();?>assets/ico/icon-amikom.png" />
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url();?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <!-- Theme style -->
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
       <script>
  $(document).ready(function()
  {
     $("#mahasiswa_npm").change(function()
     {  
        var mahasiswa_npm = $("#mahasiswa_npm").val();
        $("#pesan").html("<span class='fa fa-refresh'></span>Cek NPM ...");

        if(mahasiswa_npm=='')
        {
          $("#pesan").html("<span class='fa fa-remove'></span> NPM tidak boleh kosong");
          $("#mahasiswa_npm").css('border', '3px #C33 solid');
        }
        else
        $.ajax({type: "POST", url: "<?php echo base_url().'public/cek_npm'; ?>", data: "mahasiswa_npm="+mahasiswa_npm, success:function(data)
        { 
            if(data=='0')
              {
                  $("#pesan").html("<span class='fa fa-check'></span> sukses");
                $("#mahasiswa_npm").css('border', '3px #090 solid');
            }
              else
              {
                $("#pesan").html("<span class='fa fa-remove'></span> NPM telah digunakan");
                $("#mahasiswa_npm").css('border', '3px #C33 solid');
              }
              
        } });
     })


     $("#submit").click(function()
     {  
        var username = $("#mahasiswa_npm").val();
        $("#pesan").html("<img src='loading.gif'>Cek username ...");

        if(username=='')
        {
          $("#pesan").html('<img src="salah.png"> username tidak boleh kosong');
          $("#mahasiswa_npm").css('border', '3px #C33 solid');
        }
        else
        $.ajax({type: "POST", url: "validation.php", data: "username="+username, success:function(data)
        { 
          if(data==0)
            {
                $("#pesan").html('<img src="true.png">');
                $("#mahasiswa_npm").css('border', '3px #090 solid');
            }
              else
              {
                $("#pesan").html('<img src="salah.png"> username telah digunakan');
                $("#mahasiswa_npm").css('border', '3px #C33 solid');
              }
              
        } });
     })

     $("#tambahakun").validate({

        rules:{
                password:{required: true, minlength: 5}, 
                ulangipassword:{required: true, equalTo: "#nama"}
              },

        messages:{  
                   password:{required: '.Password harus diisi', minlength: '.Password minimal 5 karakter'},
                   ulangipassword:{required: '.Tidak boleh kosong', equalTo: '.Isi harus sama dengan Password'}
              },

        success: function(label)
        {
            label.text('OK!').addClass('valid');
        }

     });

  });
</script>
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="dashboard" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Amikom Yogyakarta
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
            </nav>
        </header>
        <!-- menu kiri -->
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" id="main-menu">

                        <li class="<?php if($this->uri->segment(1)=="tambah"){echo "active";}?>">
                            <a href="<?php echo base_url().'tambah'; ?>">
                                <i class="fa fa-th"></i> <span>Daftar</span>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(1)=="master"){echo "active";}?>">
                            <a href="<?php echo base_url().'auth'; ?>">
                                <i class="fa fa-th"></i> <span>Login</span>
                            </a>
                        </li>

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- menu kiri -->


            <?php echo $contents; ?>



            <div class="footer-main">
                Copyright &copy STMIK AMIKOM, 2016
            </div>
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        
        <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Director App -->
        <script src="<?php echo base_url();?>assets/js/Director/app.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/custom.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    </body>
</html>
