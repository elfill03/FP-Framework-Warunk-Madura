@extends('superAdmin.layout.default')

@section('title')
  Dashboard | Warunk Madura
@endsection

@section('content')
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
@endsection
