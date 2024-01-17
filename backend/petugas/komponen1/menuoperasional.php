
<div class="navbar nav_title" style="border: 0;">
              <a  class="site_title"><span>PT.Gagas Mitra Jaya</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <a href="../operasional/index.php"><img src="../../images/logo1.jpg" alt="..." class="img-circle profile_img"></a>

              </div>
              <div class="profile_info">
                <span>Selamat Datang</span>
                <a href="index.php"><h2><?php echo $_SESSION['namapet']; ?>(Bag.Operasional)</h2></a>
              </div>
            </div>
            <!-- menu profile quick info -->
            
            <!-- /menu profile quick info -->

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
                  <li><a><i class="fa fa-edit"></i> Input Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inputproyek.php">Input Data Proyek</a></li>
                      <li><a href="inputpinjam.php">Input Peminjaman</a></li>
                    
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Daftar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="daftarpetugas.php">Daftar Petugas</a></li>
                      <li><a href="daftarpelanggan.php">Daftar Pelanggan</a></li>
                      <li><a href="daftarproyek.php">Daftar Proyek</a></li>
                      <li><a href="daftarpinjam.php">Daftar Peminjaman</a></li>
                      <li><a href="daftarbarang.php">Daftar Barang</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>