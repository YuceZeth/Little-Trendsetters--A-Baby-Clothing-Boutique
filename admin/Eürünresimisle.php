<!DOCTYPE html>
<html lang="en">
<?php
include("baglan.php")
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/sceditor.min.js"></script>
    <title>Yönetim Paneli</title>
    <link rel="shortcut icon" type="image/png" href="../images/logo.png"/>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="stylesheet" href="minified/themes/default.min.css" id="theme-style" />
          
        <script src="minified/sceditor.min.js"></script>
        <script src="minified/icons/monocons.js"></script>
        <script src="minified/formats/bbcode.js"></script>
        <style>
            form div {
                padding: .5em;
            }
        </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">    

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Alerts -->
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                        </li>
                    </ul>
                </nav>

                <!-- Begin Page Content -->
                <div class="card-body">
                <h2><font color="red"><center>Ürün Resim Ekle</center></font></h2>
                    <?php
                      $sorgu_bilgi = mysqli_query($conn,"select * from urunler");
                      $id_bilgi = @$_GET['id'];
                      $id_bilgi =  substr($id_bilgi, 64);   
                      $id =  substr($id_bilgi, 0, -64);
                      $urunler = array();
                      while ($bilgiler = mysqli_fetch_array($sorgu_bilgi)) { 
                        $urunler[] = $bilgiler['urun_isim'];
                      }
                    ?>

                        <form method='post' id='resimisle'>
                        <table>
                          <tr>
                            <td><font color='black'>Ürün İsim : 
                              <select name="urunler">
                                <?php $urunler = array_unique($urunler);  
                                foreach($urunler as $il): ?>
                                    <option value="<?php echo $il; ?>"><?php echo $il; ?></option>
                                <?php endforeach; ?></font>
                            </select>
                            </td>
                          </tr>
                          <tr>
                            <td><input type="file" name="image" id="image"></td>
                          </tr>
                        </table>
                        <?php
                        $kid = $_GET['id'];
                        ?>
                        <center><button id="submit">Gönder</button> <?php echo "<a href='Ürünler.php?id=".$kid."'><input type='button' value='Geri'></a>";?></center>
                        </form>

                </div>
                <script type="text/javascript">
                $(document).ready(function(){
                    $('#resimisle').on('submit', function(event){
                        event.preventDefault();
                        var formData = new FormData(this);
                        $.ajax({
                            url: "EürünresimEisle.php",
                            type: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(data){
                                alert(data);
                            }
                        });
                    });
                });
                </script>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>