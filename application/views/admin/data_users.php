<div class="container-fluid">
<font class="text-center" face="Century Gothic" size="8" color="#3a67ae"><strong><u>Data User</u></strong></font> 
<div class="card mt-3 p-2 mb-3">
<div>
	<button class="btn btn-sm btn-primary mt-3" data-toggle = "modal" data-target = "#tambah_users" style="font-size: 20px;"><i class = "fas fa-plus fa-sm"></i> Input User</button>
</div><br>
<div class=" navbar-search navbar-right">
                        <?php echo form_open('admin/data_users/search') ?>
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
</div> <br>
		<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Pengguna</th>
			<th>Username</th>
			<th>Email</th>
			<th>No HP</th>
			<th>Role</th>
			
			<th colspan="3">Aksi</th>
		</tr>

		<?php
			$no = 1;
			foreach ($users as $usr) :	
		?>

		<tr>
			<td><?php echo $no ++; ?></td>
			<td><?php echo $usr->nama; ?></td>
			<td><?php echo $usr->username; ?></td>
			<td><?php echo $usr->email; ?></td>
			<td><?php echo $usr->nohp; ?></td>
			<td>
				<?php 
					if($usr->role_id == "1"){ echo "Admin";}
					else {echo "Pengunjung";}
			 	?>			
			</td>
	
			<td><?php echo anchor('admin/data_users/edit/' .$usr->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?></td>
			<td><?php echo anchor('admin/data_users/hapus/' .$usr->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
		</tr>

		<?php endforeach; ?>
		
	</table>
</div>	
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_users/tambah_aksi' ?>" method = "post" enctype = "multipart/form-data">
        	<div class="form-group">
        		<label>Nama</label>
        		<input type="text" name="nama" class="form-control">
        	</div>
			<div class="form-group">
        		<label>Username</label>
        		<input type="text" name="username" class="form-control">
        	</div>
          <div class="form-group">
        		<label>Email</label>
        		<input type="text" name="email" class="form-control">
        	</div>
          <div class="form-group">
        		<label>No HP</label>
        		<input type="text" name="nohp" class="form-control">
        	</div>
      
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label>Role</label>
             <select class="form-control" name="role_id">
                <option>1</option>
                <option>2</option>
              </select>
              <label> *1 = Admin, 2 = Pengunjung</label>
          </div>

          
      		<div class="modal-footer">
        		<button type="close" class="btn btn-danger" data-dismiss="modal">Kembali</button>
        		<button type="submit" class="btn btn-primary">Simpan</button>
      		</div>
  		</form>
    </div>
  </div>
</div>