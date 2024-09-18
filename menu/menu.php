<?php
session_start();

if (isset($_SESSION['username']) and isset($_SESSION['password'])) {
} else {
  header("Location: ../index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="web icon" type="png" href="../assets/img/choco title.png">
  <title>
    DB Toko Cokelat
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="...">
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

  <!-- Bootstrap core CSS -->
  <link href="assetsas/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assetsas/css/dashboard.css" rel="stylesheet">
  <script src="assetsas/js/jquery.min.js"></script>

</head>
<style>
  .chocolate-image>img {
    width: 280px;
  }
</style>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header active bg-gradient-primary">
      <a class="navbar-brand m-0 " target="_blank">
        <img src="../assets/img/choco.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white ">Database KR</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="menu.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="?data=infopemasok">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Pemasok</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="?data=infopasokan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Pasokan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="?data=infoproduk">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Produk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="?data=infopelanggan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Pelanggan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="?data=infopenjualan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Penjualan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="?data=detailpenjualan">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Detail Penjualan</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../functions/logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  <?php
  $satu = isset($_GET['data']) ? $_GET['data'] : '';
  ?>
  <?php
  if ($satu == 'infoproduk') {
    include('infodataproduk.php');
  } elseif ($satu == 'tambahproduk') {
    include('tambahdataproduk.php');
  } else if ($satu == 'editproduk') {
    include('editdataproduk.php');
  } else if ($satu == 'hapusproduk') {
    include('hapusdataproduk.php');
  } elseif ($satu == 'infopemasok') {
    include('infodatapemasok.php');
  } elseif ($satu == 'tambahpemasok') {
    include('tambahdatapemasok.php');
  } else if ($satu == 'editpemasok') {
    include('editdatapemasok.php');
  } else if ($satu == 'hapuspemasok') {
    include('hapusdatapemasok.php');
  } elseif ($satu == 'infopasokan') {
    include('infodatapasokan.php');
  } elseif ($satu == 'tambahpasokan') {
    include('tambahdatapasokan.php');
  } else if ($satu == 'editpasokan') {
    include('editdatapasokan.php');
  } else if ($satu == 'hapuspasokan') {
    include('hapusdatapasokan.php');
  } else if ($satu == 'infopelanggan') {
    include('infodatapelanggan.php');
  } elseif ($satu == 'tambahpelanggan') {
    include('tambahdatapelanggan.php');
  } else if ($satu == 'editpelanggan') {
    include('editdatapelanggan.php');
  } else if ($satu == 'hapuspelanggan') {
    include('hapusdatapelanggan.php');
  } else if ($satu == 'infopenjualan') {
    include('infodatapenjualan.php');
  } elseif ($satu == 'tambahpenjualan') {
    include('tambahdatapenjualan.php');
  } else if ($satu == 'editpenjualan') {
    include('editdatapenjualan.php');
  } else if ($satu == 'hapuspenjualan') {
    include('hapusdatapenjualan.php');
  } else if ($satu == 'detailpenjualan') {
    include('infodetailpenjualan.php');
  } elseif ($satu == 'tambahdetailpenjualan') {
    include('tambahdetailpenjualan.php');
  } else if ($satu == 'hapusdetailpenjualan') {
    include('hapusdetailpenjualan.php');
  } else { ?>
    <div class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <h1 class="container-fluid py-1 px-3">Selamat Datang di Dashboard Toko Cokelat KR</h1>
      <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url(https://images.pexels.com/photos/65882/chocolate-dark-coffee-confiserie-65882.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);">
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
          <div class="row gx-4 mb-2">
            <div class="col-auto">
              <div class="avatar avatar-xl position-relative">
                <img src="../assets/img/KR_Chocolate.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
              </div>
            </div>
            <div class="col-auto my-auto">
              <div class="h-100">
                <h5 class="mb-1">
                  Toko Cokelat KR
                </h5>
                <p class="mb-0 font-weight-normal text-sm">
                  "Taklukkan Duniamu dengan Manisnya Cokelat."
                </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            </div>
          </div>
          <div class="row">
            <div class="row">
              <div class="col-12 col-xl-4">
                <div class="card card-plain h-100">
                  <div class="card-body p-3">
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder">Feedback</h6>
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                          <img src="../assets/img/marie.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Anne Marie</h6>
                          <p class="mb-0 text-xs">"Pelayanannya sangat ramah dan bersih"</p>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                          <img src="../assets/img/team-4.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Peterson</h6>
                          <p class="mb-0 text-xs">"Produk Cokelatnya bagus dan berkualitas tinggi"</p>
                        </div>
                      </li>
                    </ul>
                    <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Foto</h6>
                    <div class="chocolate-image">
                      <img src="https://images.unsplash.com/photo-1623053045271-e53d909ef33b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="chocolater" class="border-radius-lg shadow">
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-4">
                <div class="card card-plain h-100">
                  <div class="card-header pb-0 p-3">
                    <div class="row">
                    </div>
                  </div>
                  <div class="card-body p-3">
                    <p class="text-sm">
                      Toko Cokelat KR adalah destinasi istimewa bagi para pecinta cokelat yang mencari pengalaman menyenangkan dalam mengeksplorasi berbagai varian cokelat berkualitas tinggi. Dengan semangat inovatif dan komitmen pada kualitas, toko ini menyajikan koleksi cokelat yang lezat dan berkualitas.
                    </p>
                    <hr class="horizontal gray-light my-4">
                    <ul class="list-group">
                      <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Induk Perusahaan:</strong> &nbsp; KR Corporation</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; (62) 832 546 753</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; kcorporation@outlook.com</li>
                      <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; Indonesia</li>
                      <li class="list-group-item border-0 ps-0 pb-0">
                        <strong class="text-dark text-sm">Social:</strong> &nbsp;
                        <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                          <i class="fab fa-facebook fa-lg"></i>
                        </a>
                        <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                          <i class="fab fa-twitter fa-lg"></i>
                        </a>
                        <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                          <i class="fab fa-instagram fa-lg"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-4">
                <div class="card card-plain h-100">
                  <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Top Produk</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-group">
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                        <div class="avatar me-3">
                          <img src="https://admin.itsnicethat.com/images/I2WzcYN88t87pJpFhXNDaVpofaQ=/184009/format-webp%7Cwidth-2880/bulletproof_cadbury_dairy_milk_rebrand_graphic_design_itsnicethatGLO_Logo.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Cadbury</h6>
                          <p class="mb-0 text-xs">Dairy Milk</p>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                          <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/toblerone_toblerone-white--100-gr-_full01.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Toblerone</h6>
                          <p class="mb-0 text-xs">White Chocolate</p>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                          <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//92/MTA-32177530/silverqueen_silver-queen-dark-chocolate-65gr-pcs_full01.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Silverqueen</h6>
                          <p class="mb-0 text-xs">Dark Chocolate</p>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                        <div class="avatar me-3">
                          <img src="https://i.guim.co.uk/img/media/ca89ee35d457a81f331778b7dabb7d4c50bcb4c9/157_0_3058_1836/master/3058.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=3479dc21a5a06dbbf26c48bc803b70a1" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Cadbury</h6>
                          <p class="mb-0 text-xs">Roses</p>
                        </div>
                      </li>
                      <li class="list-group-item border-0 d-flex align-items-center px-0">
                        <div class="avatar me-3">
                          <img src="https://images-cdn.ubuy.co.id/633aafa1385a6d623225542b-godiva-chocolatier-patisserie-dessert.jpg" alt="kal" class="border-radius-lg shadow">
                        </div>
                        <div class="d-flex align-items-start flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Godiva</h6>
                          <p class="mb-0 text-xs">Chocolatier</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-10 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              dibuat oleh
              <a href="https://github.com/SammyBangun" class="font-weight-bold" target="_blank">Kahlil Bangun</a>
              untuk proyek akhir pemrograman web.
              <br>
              <p>konten yang ada di website ini hanyalah rekayasa !</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  <?php } ?>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg "></main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">UI Configurator</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->

        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Pilih diantara 2 tipe ini.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Ambil elemen ikon sidenav
      var iconSidenav = document.getElementById("iconSidenav");

      // Ambil elemen sidenav
      var sidenav = document.getElementById("sidenav-main");

      // Tambahkan event listener untuk ikon sidenav
      iconSidenav.addEventListener("click", function() {
        // Toggle kelas 'd-none' pada sidenav untuk menyembunyikan/menampilkan
        sidenav.classList.toggle("d-none");
      });
    });
  </script>


  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="assetsas/js/jquery.min.js"><\/script>')
</script>
<script src="assetsas/js/bootstrap.min.js"></script>
</body>

</html>

<script>
  window.setTimeout(function() {
    $('.alert').fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 1500);
</script>

</html>