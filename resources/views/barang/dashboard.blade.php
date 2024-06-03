<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link
      href="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.css') }}"
      rel="stylesheet"
    />
    <link href="{{ asset('plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link
      href="{{ asset('plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('plugins/metismenu/css/metisMenu.min.css') }}"
      rel="stylesheet"
    />
    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-extended.css') }}" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" />
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/header-colors.css') }}" />
    <title>Dashboard | Warunk Madura</title>
  </head>

  <body>
    <!--wrapper-->
    <div class="wrapper">
      <!--sidebar wrapper -->
      <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <img
              src="{{ asset('images/logo-icon.png') }}"
              class="logo-icon"
              alt="logo icon"
            />
          </div>
          <div>
            <h4 class="logo-text">Warunk Madura</h4>
          </div>
          <div class="toggle-icon ms-auto">
            <i class="bx bx-arrow-to-left"></i>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="{{ route('dashboard') }}">
              <div class="parent-icon"><i class="bx bx-home-circle"></i></div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
          <li class="menu-label">Cabang Toko</li>
          <li>
            <a href="widgets.html">
              <div class="parent-icon"><i class="bx bx-store"></i></div>
              <div class="menu-title">Lihat Toko</div>
            </a>
          </li>
          <li>
            <a href="widgets.html">
              <div class="parent-icon"><i class="bx bx-user"></i></div>
              <div class="menu-title">Data Admin</div>
            </a>
          </li>
          <li class="menu-label">Data Barang</li>
          <li>
            <a href="{{ route('barangmasuk') }}">
              <div class="parent-icon"><i class="bx bx-package"></i></div>
              <div class="menu-title">Barang Masuk</div>
            </a>
          </li>
          <li>
            <a href="widgets.html">
              <div class="parent-icon"><i class="bx bx-cube"></i></div>
              <div class="menu-title">Barang Keluar</div>
            </a>
          </li>
          <li class="menu-label">LAPORAN</li>
          <li>
            <a href="{{ route('laporanpemasukan') }}">
              <div class="parent-icon"><i class="bx bx-detail"></i></div>
              <div class="menu-title">Laporan Pemasukan</div>
            </a>
          </li>
          <li>
            <a href="widgets.html">
              <div class="parent-icon"><i class="bx bx-detail"></i></div>
              <div class="menu-title">Laporan Pengeluaran</div>
            </a>
          </li>
        </ul>
        <!--end navigation-->
      </div>
      <!--end sidebar wrapper -->
      <!--start header -->
      <header>
        <div class="topbar d-flex align-items-center">
          <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class="bx bx-menu"></i></div>
            <div class="top-menu ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown dropdown-large">
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="header-notifications-list"></div>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-large">
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="header-message-list"></div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="user-box dropdown">
              <a
                class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="{{ asset('images/avatars/avatar-2.png') }}"
                  class="user-img"
                  alt="user avatar"
                />
                <div class="user-info ps-3">
                  <p class="user-name mb-0">Nama User</p>
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="javascript:;"
                    ><i class="bx bx-user"></i><span>Profile</span></a
                  >
                </li>
                <li>
                  <div class="dropdown-divider mb-0"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="javascript:;"
                    ><i class="bx bx-log-out-circle"></i><span>Logout</span></a
                  >
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <!--end header -->
      <!--start page wrapper -->
      <div class="page-wrapper">
        <div class="page-content">
          <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
              <div
                class="card radius-10 border-start border-0 border-3 border-info"
              >
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <p class="mb-0 text-secondary">Total Data ...?</p>
                      <h4 class="my-1 text-info">4805</h4>
                    </div>
                    <div
                      class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"
                    >
                      <i class="bx bxs-cart"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div
                class="card radius-10 border-start border-0 border-3 border-danger"
              >
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <p class="mb-0 text-secondary">Total Data ...?</p>
                      <h4 class="my-1 text-danger">84,245</h4>
                    </div>
                    <div
                      class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"
                    >
                      <i class="bx bxs-wallet"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div
                class="card radius-10 border-start border-0 border-3 border-success"
              >
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <p class="mb-0 text-secondary">Total Data ...?</p>
                      <h4 class="my-1 text-success">34.6</h4>
                    </div>
                    <div
                      class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"
                    >
                      <i class="bx bxs-bar-chart-alt-2"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div
                class="card radius-10 border-start border-0 border-3 border-warning"
              >
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <p class="mb-0 text-secondary">Total Data ...?</p>
                      <h4 class="my-1 text-warning">8.4</h4>
                    </div>
                    <div
                      class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"
                    >
                      <i class="bx bxs-group"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end row-->

          <div class="row d-flex justify-content-center mt-5">
            <div class="col-12 col-lg-10">
              <div class="card radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <h6 class="mb-0">Grafik Pemasukan & Pengeluaran</h6>
                    </div>
                  </div>
                  <div
                    class="d-flex align-items-center ms-auto font-13 gap-2 my-3"
                  >
                    <span class="border px-1 rounded cursor-pointer"
                      ><i class="bx bxs-circle me-1" style="color: #14abef"></i
                      >Pemasukan</span
                    >
                    <span class="border px-1 rounded cursor-pointer"
                      ><i class="bx bxs-circle me-1" style="color: #ffc107"></i
                      >Pengeluaran</span
                    >
                  </div>
                  <div class="chart-container-1">
                    <canvas id="chart1"></canvas>
                  </div>
                </div>
                <div
                  class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top"
                >
                  <div class="col">
                    <div class="p-3">
                      <h5 class="mb-0">200</h5>
                      <small class="mb-0">Total Pemasukan</small>
                    </div>
                  </div>
                  <div class="col">
                    <div class="p-3">
                      <h5 class="mb-0">200</h5>
                      <small class="mb-0">Total Pengeluaran</small>
                    </div>
                  </div>
                  <div class="col">
                    <div class="p-3">
                      <h5 class="mb-0">50</h5>
                      <small class="mb-0">Cabang Toko</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end row-->
        </div>
      </div>
      <!--end page wrapper -->
      <!--start overlay-->
      <div class="overlay toggle-icon"></div>
      <!--end overlay-->
      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top"
        ><i class="bx bxs-up-arrow-alt"></i
      ></a>
      <!--End Back To Top Button-->
      <footer class="page-footer">
        <p class="mb-0">Copyright © 2024. Warunk Madura.</p>
      </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->
    <div class="switcher-wrapper">
      <div class="switcher-btn"><i class="bx bx-cog bx-spin"></i></div>
      <div class="switcher-body">
        <div class="d-flex align-items-center">
          <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
          <button
            type="button"
            class="btn-close ms-auto close-switcher"
            aria-label="Close"
          ></button>
        </div>
        <hr />
        <h6 class="mb-0">Theme Styles</h6>
        <hr />
        <div class="d-flex align-items-center justify-content-between">
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="lightmode"
              checked
            />
            <label class="form-check-label" for="lightmode">Light</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="darkmode"
            />
            <label class="form-check-label" for="darkmode">Dark</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="flexRadioDefault"
              id="semidark"
            />
            <label class="form-check-label" for="semidark">Semi Dark</label>
          </div>
        </div>
        <hr />
        <div class="form-check">
          <input
            class="form-check-input"
            type="radio"
            id="minimaltheme"
            name="flexRadioDefault"
          />
          <label class="form-check-label" for="minimaltheme"
            >Minimal Theme</label
          >
        </div>
        <hr />
        <h6 class="mb-0">Header Colors</h6>
        <hr />
        <div class="header-colors-indigators">
          <div class="row row-cols-auto g-3">
            <div class="col">
              <div class="indigator headercolor1" id="headercolor1"></div>
            </div>
            <div class="col">
              <div class="indigator headercolor2" id="headercolor2"></div>
            </div>
            <div class="col">
              <div class="indigator headercolor3" id="headercolor3"></div>
            </div>
            <div class="col">
              <div class="indigator headercolor4" id="headercolor4"></div>
            </div>
            <div class="col">
              <div class="indigator headercolor5" id="headercolor5"></div>
            </div>
            <div class="col">
              <div class="indigator headercolor6" id="headercolor6"></div>
            </div>
            <div class="col">
              <div class="indigator headercolor7" id="headercolor7"></div>
            </div>
            <div class="col">
              <div class="indigator headercolor8" id="headercolor8"></div>
            </div>
          </div>
        </div>
        <hr />
        <h6 class="mb-0">Sidebar Colors</h6>
        <hr />
        <div class="header-colors-indigators">
          <div class="row row-cols-auto g-3">
            <div class="col">
              <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
            </div>
            <div class="col">
              <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
            </div>
            <div class="col">
              <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
            </div>
            <div class="col">
              <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
            </div>
            <div class="col">
              <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
            </div>
            <div class="col">
              <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
            </div>
            <div class="col">
              <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
            </div>
            <div class="col">
              <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
