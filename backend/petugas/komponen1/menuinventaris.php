
<div class="navbar nav_title" style="border: 0;">
              <a  class="site_title"><span>PT.Gagas Mitra Jaya</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <a href="../inventaris/index.php"><img src="../../images/logo1.jpg" alt="..." class="img-circle profile_img"></a>

              </div>
              <div class="profile_info">
                <span>Selamat Datang</span>
                <a href="index.php"><h2><?php echo $_SESSION['namapet']; ?>(Bag.Inventaris)</h2></a>
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
                      <li><a href="inputbarang.php">Input Barang</a></li>
                      <li><a href="inputbrgklr.php">Input Data Barang Keluar </a></li>
                      <li><a href="inputbrgmsk.php">Input Data Barang Masuk</a></li>
                      <li><a href="inputpengadaan.php">Input Data Pengadaan Barang  </a></li>
                    
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Daftar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="daftarbarang.php">Daftar Barang</a></li>
                       <li><a href="daftarbrgkel.php">Daftar Barang Keluar</a></li>
                       <li><a href="daftarbrgmas.php">Daftar Barang Masuk</a></li>
                      <li><a href="daftarpengadaan.php">Daftar Pengadaan Barang</a></li>
                      <li><a href="daftarpinjam.php">Daftar Peminjaman Barang</a></li>
                      <li><a href="daftarpetugas.php">Daftar Petugas</a></li>
                      <li><a href="daftarproyek.php">Daftar Proyek</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>