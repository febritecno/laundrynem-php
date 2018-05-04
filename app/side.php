  <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                        </div>
                        <div class="menu_section">
                            <h3>GENERAL</h3>
                            <ul class="nav side-menu">
                            <li><a href = "menu"><i class="fa fa-home"></i> Home</a>

                                <li><a><i class="fa fa-edit"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="konsumen">Data Konsumen</a>
                                        </li>
                                        <li><a href="transaksi">Data Transaksi</a>
                                        </li>
                                        <li><a href="rincian_transaksi">Data Rincian Transaksi</a>
                                        </li>
                                        <li><a href="tarif">Data Tarif</a>
                                        </li>
                                        <li><a href="jenis_laundry">Data Jenis Laundry</a>
                                        </li>
                                    </ul>
                                </li>

                          <li><a><i class="fa fa-cubes"></i> Barang <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="barang">Data Barang</a>
                                        </li>
                                        <li><a href="pembelian">Data Pembelian</a>
                                        </li>
                                        <li><a href="rincian_pembelian">Data Rincian Pembelian</a>
                                        </li>
                                        <li><a href="suplier">Data Suplier</a>
                                        </li>
                                        <li><a href="pemakaian_barang">Data Pemakaian barang</a>
                                        </li>
                                    </ul>
                        </li>
                                <li><a><i class="fa fa-desktop"></i> Profil Laundry <span class="label label-primary pull-right">info</span></a>
                                </li>
                            </ul>
                        </div>


<?
if ($_SESSION['typeuser']=="admin")
   {
    
                        echo '<div class="menu_section">';
                            echo '<h3>Panel Karyawan Admin <span class="label label-danger pull-right"></span></h3>';
                            echo '<ul class="nav side-menu">';
    
                            echo '<li><a href="karyawan1"><i class="fa fa-user"></i> Karyawan <span class="label label-warning pull-right">Tambah !!</span></a>';
                                  echo '</li>';

                                echo '<li><a><i class="fa fa-users"></i> Edit Member <span class="fa fa-chevron-down"></span></a>';
                                   echo '<ul class="nav child_menu" style="display: none">';
                                       echo '<li><a href="karyawan">Edit Data Karyawan</a>';
                                      echo  '</li>';
                                      echo  '<li><a href="login">Edit Data Login</a>';
                                       echo '</li>';                                    
                                  echo  '</ul>';
                                  echo '</li>';

                                echo '<li><a><i class="fa fa-database"></i> Setting <span class="fa fa-chevron-down"></span></a>';
                                  echo  '<ul class="nav child_menu" style="display: none">';
                                        echo '<li><a href="backup">Backup & Restore Database</a>';
                                        echo '</li>';
                                        echo '<li><a href="profil">About Manager</a>';
                                        echo '</li>';
                                        echo '</ul>';
                                        echo '</li>';
                                       echo '</ul>';
                                        echo '</div>';
  }                     
?>

                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>