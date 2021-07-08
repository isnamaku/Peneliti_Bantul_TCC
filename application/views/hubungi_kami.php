<div class="container-fluid mb-4">
   <font class="ml-3" face="Century Gothic" size="6" color="#3a67ae"><strong><u>Tulis Pesan</u></strong></font>
    <div class="card ml-3 mr-3">
      <div class="card-body">
        <form action="<?php echo base_url(). 'hubungi_kami/tambah_pesan' ?>" method = "post" enctype = "multipart/form-data">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control"> 
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control">
            </div>          
            <div class="form-group">
              <label>Judul / Subjek</label>
              <input type="text" name="judul" class="form-control">
            </div>
            <div class="form-group">  
              <label>Isi Pesan</label>
              <textarea name="isi_pesan" class="form-control"></textarea>
            </div>  
            <?php echo $this->session->flashdata('message'); ?>
            <br>                 
            <div>
              <button type="submit" class="btn btn-primary">Kirim</button>
              <a href="<?php echo base_url('kontak'); ?>" class="btn btn-danger" data-dismiss="modal">Kembali</a>
            </div>
        </form>
      </div>
    </div>
</div>