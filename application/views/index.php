<?php
if($this->session->userdata('user_nama_lengkap')=='')
{
    redirect('auth');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Amikom | Dashboard</title>
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

        <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>

        <?php if ($this->uri->segment(2)=='add' || $this->uri->segment(1)=='ppa'): ?>
          
          <script type="text/javascript" src="<?php echo base_url();?>assets/js/titik.js"></script>
          <script type="text/javascript" charset="utf-8">
                    function fnHitung() {
                    var angka = bersihPemisah(bersihPemisah(bersihPemisah(bersihPemisah(document.getElementById('inputku').value)))); //input ke dalam angka tanpa titik
                    }
          </script>
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
                $.ajax({type: "POST", url: "<?php echo base_url().'mahasiswa/cek_npm'; ?>", data: "mahasiswa_npm="+mahasiswa_npm, success:function(data)
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
          <?php endif ?>

          
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-user"></i>
                                <span><?php echo $this->session->userdata('user_nama_lengkap');?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                <li class="dropdown-header text-center">Account</li>

                                <li class="divider"></li>

                                    <li>
                                        <a href="<?php echo base_url();?>profile">
                                        <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        </li>

                                        <li class="divider"></li>

                                        <li>
                                            <?php echo anchor('auth/logout',"<i class='fa fa-ban fa-fw pull-right'></i> Logout");?>
                                        </li>
                                    </ul>

                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- menu kiri -->
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url();?>assets/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $this->session->userdata('user_nama_lengkap');?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" id="main-menu">
                        <li class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>">
                            <a href="<?php echo base_url().'dashboard'; ?>" title="Presentase Pendaftar Beasiswa">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

                       <li class="<?php if($this->uri->segment(1)=="mahasiswa" ){echo "active";}?>">
                        <a href="#" title="Semua Daftar Mahasiswa"><i class="fa fa-sitemap " ></i> Data Mahasiswa<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="<?php echo base_url().'mahasiswa'; ?>">Semua Mahasiswa <span class="fa arrow"></span></a>
                                
                            </li>
                            <li>
                                <a href="#" title="Daftar Mahasiswa yang memdaftar beasiswa">Mahasiswa Pendaftar<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?php echo base_url().'mahasiswa/ppa'; ?>">PPA</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url().'mahasiswa/bbp'; ?>">BBP-PPA</a>
                                    </li>
                                </ul>
                               
                            </li>
                            <li>
                                <a href="#" title="Daftar Mahasiswa yang Masuk Seleksi">Mahasiswa Beasiswa<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?php echo base_url().'mahasiswa/ppa_fix'; ?>">PPA</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url().'mahasiswa/bbp_fix'; ?>">BBP-PPA</a>
                                    </li>
                                </ul>
                               
                            </li>

                        </ul>
                      </li>  

                        <li class="<?php if($this->uri->segment(1)=="laporan"){echo "active";}?>">
                            <a href="<?php echo base_url().'laporan'; ?>" title="Export to Excel">
                                <i class="fa fa-file-text"></i> <span>Laporan</span>
                            </a>
                        </li>

                        <li class="<?php if($this->uri->segment(1)=="master"){echo "active";}?>">
                            <a href="<?php echo base_url().'master'; ?>">
                                <i class="fa fa-th"></i> <span>Data Master</span>
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
        <script src="<?php echo base_url();?>assets/js/plugins/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
            $(document).ready(function () {
                $('#dataTables-example1').dataTable();
            });
            $(document).ready(function () {
                $('#dataTables-example2').dataTable();
            });
            $(document).ready(function () {
                $('#dataTables-example3').dataTable();
            });
        </script>
        
            <script type="text/javascript">
         
            var save_method; //for save method string
            var table;
            $(document).ready(function() {
              table = $('#table').DataTable({
         
                "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
         
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?php echo site_url('person/ajax_list')?>",
                    "type": "POST"
                },
         
                //Set column definition initialisation properties.
                "columnDefs": [
                {
                  "targets": [ -1 ], //last column
                  "orderable": false, //set not orderable
                },
                ],
         
              });
            });
            
         
            function add_person()
            {
              save_method = 'add';
              $('#form')[0].reset(); // reset form on modals
              $('#modal_form').modal('show'); // show bootstrap modal
              $('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
            }
         
            function edit_person(id)
            {
              save_method = 'update';
              $('#form')[0].reset(); // reset form on modals
         
              //Ajax Load data from ajax
              $.ajax({
                url : "<?php echo site_url('person/ajax_edit/')?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data)
                {
         
                    $('[name="id"]').val(data.id);
                    $('[name="firstName"]').val(data.firstName);
                    $('[name="lastName"]').val(data.lastName);
                    $('[name="gender"]').val(data.gender);
                    $('[name="address"]').val(data.address);
                    $('[name="dob"]').val(data.dob);
         
                    $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                    $('.modal-title').text('Edit Person'); // Set title to Bootstrap modal title
         
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error get data from ajax');
                }
            });
            }
         
            function reload_table()
            {
              table.ajax.reload(null,false); //reload datatable ajax
            }
         
            function save()
            {
              var url;
              if(save_method == 'add')
              {
                  url = "<?php echo site_url('person/ajax_add')?>";
              }
              else
              {
                url = "<?php echo site_url('person/ajax_update')?>";
              }
         
               // ajax adding data to database
                  $.ajax({
                    url : url,
                    type: "POST",
                    data: $('#form').serialize(),
                    dataType: "JSON",
                    success: function(data)
                    {
                       //if success close modal and reload ajax table
                       $('#modal_form').modal('hide');
                       reload_table();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
            }
         
            function delete_person(id)
            {
              if(confirm('Are you sure delete this data?'))
              {
                // ajax delete data to database
                  $.ajax({
                    url : "<?php echo site_url('person/ajax_delete')?>/"+id,
                    type: "POST",
                    dataType: "JSON",
                    success: function(data)
                    {
                       //if success reload ajax table
                       $('#modal_form').modal('hide');
                       reload_table();
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        alert('Error adding / update data');
                    }
                });
         
              }
            }
         
          </script>
    </body>
</html>
