  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>
  
  <script type="text/javascript">
  // Pie Chart Example

var ctx2 = document.getElementById("myPieChart2");
var myPieChart2 = new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: ["Peneliti Pertama", "Peneliti Utama","Peneliti Madya", "Peneliti Muda"],
    datasets: [{
      data: [<?php echo $this->db->query("select jenjangpeneliti from tb_peneliti where jenjangpeneliti='Peneliti Pertama'")->num_rows(); ?>, <?php echo $this->db->query("select jenjangpeneliti from tb_peneliti where jenjangpeneliti='Peneliti Utama'")->num_rows(); ?>, <?php echo $this->db->query("select jenjangpeneliti from tb_peneliti where jenjangpeneliti='Peneliti Madya'")->num_rows(); ?>, <?php echo $this->db->query("select jenjangpeneliti from tb_peneliti where jenjangpeneliti='Peneliti Muda'")->num_rows(); ?>],
      backgroundColor: ['#4e73df', '#1cc88a','#ffc107','#5a5c69'],
      hoverBackgroundColor: ['#2e59d9',  '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    cutoutPercentage: 60,
  },
});
var ctx = document.getElementById("myPieChart");

var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Internal", "Eksternal"],
    datasets: [{
      data: [<?php echo $this->db->query("select kategori from tb_peneliti where kategori='Internal BAPPEDA'")->num_rows(); ?>, <?php echo $this->db->query("select kategori from tb_peneliti where kategori='Eksternal BAPPEDA'")->num_rows(); ?>],
      backgroundColor: ['#4e73df', '#1cc88a'],
      hoverBackgroundColor: ['#2e59d9',  '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },

  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

var ctx3 = document.getElementById("myPieChart3");
var myPieChart3 = new Chart(ctx3, {
  type: 'doughnut',
  data: {
    labels: [ "Laki-Laki","Perempuan"],
    datasets: [{
      data: [<?php echo $this->db->query("select jenkel from tb_peneliti where jenkel='Laki-laki'")->num_rows(); ?>, <?php echo $this->db->query("select jenkel from tb_peneliti where jenkel='Perempuan'")->num_rows(); ?>],
      backgroundColor: [ '#1cc88a','#f6c23e'],
      hoverBackgroundColor: ['#1cc88a','#f6c23e'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },


  
  //,  '#17a673',
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});


  </script>

</body>

</html>