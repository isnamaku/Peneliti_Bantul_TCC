<div class="container-fluid">
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<font class="text-center" face="Century Gothic" size="8" color="#3a67ae"><strong><u>DASHBOARD</u></strong></font>
                        
</div>
        <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah peneliti</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_asset; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Peneliti Eksternal</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_eks; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Peneliti Internal</div>
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $total_int; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah user</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_usr; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 

<!-- Content Row -->
<div class="row">
    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2">
            <canvas id="myPieChart"></canvas>
          </div>
          <div class="mt-4 text-center small">
              <span class="mr-2"><i class="fas fa-circle text-primary"></i> Internal</span>
              <span class="mr-2"><i class="fas fa-circle text-success"></i> Eksternal</span>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Jenjang Peneliti</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2">
            <canvas id="myPieChart2"></canvas>
          </div>
          <div class="mt-4 text-center small">
              <span class="mr-2"><i class="fas fa-circle text-primary"></i> Pertama</span>
              <span class="mr-2"><i class="fas fa-circle text-success"></i> Utama</span>
              <span class="mr-2"><i class="fas fa-circle text-warning"></i> Madya</span>
              <span class="mr-2"><i class="fas fa-circle text-dark"></i> Muda</span> 

          </div> 
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Jenis Kelamin</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2">
            <canvas id="myPieChart3"></canvas>
          </div>
          <div class="mt-4 text-center small">
              <span class="mr-2"><i class="fas fa-circle text-warning"></i> Perempuan</span>
              <span class="mr-2"><i class="fas fa-circle text-success"></i> Laki-Laki </span>
          </div>
        </div>
      </div>
    </div>

    </div>

</div>