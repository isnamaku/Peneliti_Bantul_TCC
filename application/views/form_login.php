<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block">
                <img style="height: 450px; width: 360px;" src="<?php echo base_url('assets/img/lg.gif')?>" class="img-fluid" alt="">
              </div>
              <div class="col-lg-7">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mt-5 mb-4">Welcome Back!</h1>
                  </div>

                  <?php echo $this->session->flashdata('message'); ?>
                  <form method="post" action="<?php echo base_url('auth/login'); ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username..." name="username"value="<?= set_value('username'); ?>">
                      <?php echo form_error('username', '<div class = "text-danger small ml-2">','</div'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password.." name="password">
                      <?php echo form_error('password', '<div class = "text-danger small ml-2">','</div>'); ?>                     
                    </div>
                    
                    <button type="submit" class="btn btn-primary form-control">Login</button>

                    </a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>