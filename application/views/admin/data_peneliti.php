<div class="container-fluid">
  <font class="text-center" face="Century Gothic" size="8" color="#3a67ae"><strong><u>Data Peneliti</u></strong></font>  
  <div class="card mt-3 p-2 mb-3">
  <div>
	   <button class="btn btn-sm btn-primary mt-3" data-toggle = "modal" data-target = "#tambah_peneliti" style="font-size: 20px;"><i class = "fas fa-plus fa-sm"></i> Input Peneliti</button>
  </div><br>
  <div class=" navbar-search navbar-right">
                        <?php echo form_open('admin/data_peneliti/search') ?>
						<div class="input-group">
                            <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
						<?php echo form_close() ?>
  </div><br>
	
	<table class="table table-bordered mb-4">
		<tr>
			<th>No</th>
			<th>Nama Peneliti</th>
			<th>Kategori</th>
      <th>Instansi</th>
			<th>Email</th>
			<th>No. HP</th>
      <th>Hasil Penelitian</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php
			$no = 1;
			foreach ($peneliti as $pnlt) :	
		?>

		<tr>
			<td><?php echo $no ++; ?></td>
			<td><?php echo $pnlt->nama_peneliti; ?></td>
			<td><?php echo $pnlt->kategori; ?></td>
      <td><?php echo $pnlt->instansi; ?></td>
			<td><?php echo $pnlt->email; ?></td>
			<td><?php echo $pnlt->no_hp; ?></td>
      <td><?php echo $pnlt->list_research; ?></td>
      <td><?php echo anchor('admin/data_peneliti/detail/' .$pnlt->id_peneliti, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
			<td><?php echo anchor('admin/data_peneliti/edit/' .$pnlt->id_peneliti, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?></td>
			<td><?php echo anchor('admin/data_peneliti/hapus/' .$pnlt->id_peneliti,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
		</tr>

		<?php endforeach; ?>
		
	</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_peneliti" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PENELITI</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_peneliti/tambah_aksi' ?>" method = "post" enctype = "multipart/form-data">
        	<div class="form-group">
        		<label>Nama Peneliti</label>
        		<input type="text" name="nama_peneliti" class="form-control">
        	</div>
          <div class="form-group">
            <label>KTP / NIK</label>
            <input type="text" name="ktpnik" class="form-control">
          </div>
          <div class="form-group">
            <label>Tempat, Tanggal Lahir</label>
            <input type="text" name="ttl" class="form-control">
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
              <select class="form-control" name="jenkel">
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
              </select>
          </div>
        	<div class="form-group">	
        		<label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
        	</div>
          <div class="form-group">
            <label>No. HP</label>
            <input type="text" name="no_hp" class="form-control">           
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">           
          </div>
          <div class="form-group">
            <label>Pendidikan</label>
            <input type="text" name="pendidikan" class="form-control">
          </div>
        	<div class="form-group">	
        		<label>Kategori</label>
              <select class="form-control" name="kategori">
                <option>Internal BAPPEDA</option>
                <option>Eksternal BAPPEDA</option>
              </select>
        	</div>
          <div class="form-group">
            <label>Jenjang Peneliti</label>
            <select class="form-control" name="jenjangpeneliti">
                <option>Peneliti Pertama</option>
                <option>Peneliti Muda</option>
                <option>Peneliti Madya</option>
                <option>Peneliti Utama</option>
                <option>Peneliti</option>
              </select>
          </div>
          <div class="form-group">  
            <label>Instansi</label>
            <input type="text" name="instansi" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat Instansi</label>
            <input type="text" name="alamat_ins" class="form-control">
          </div>          
          <div class="form-group">  
            <label>Hasil Penelitian</label>
            <input type="text" name="list_research" class="form-control">
          </div>  
         	<div class="form-group">
        		<label>Foto Profil</label>
        		<input type="file" name="gambar" class="form-control">        		
        	</div>         	      	
      </div>
      		<div class="modal-footer">
        		<button type="close" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        		<button type="submit" class="btn btn-primary">Simpan</button>
      		</div>
  		</form>
    </div>
  </div>
</div>