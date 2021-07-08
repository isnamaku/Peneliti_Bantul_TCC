<div class="container-fluid">
	<h3><i class="fas fa-edit mb-2"></i> EDIT USER</h3>

	<?php foreach ($users as $usr ) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_users/update' ?>">
			<div class="for-group mb-2">
				<label>Nama Pengguna</label>
				<input type="text" name="nama" class="form-control" value="<?php echo $usr->nama; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="<?php echo $usr->username; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $usr->email; ?>">
			</div>
			<div class="for-group mb-2">
				<label>No HP</label>
				<input type="text" name="nohp" class="form-control" value="<?php echo $usr->nohp; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Password</label>
				<input type="text" name="password" class="form-control" value="<?php echo $usr->password; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Role ID</label>
				<select  class="form-control" name="role_id" value="<?php $usr->role_id; ?>">
	                <option>Admin</option>
	                <option>Pengunjung</option>
              	</select>
			</div>
			
			<a href="<?php echo base_url('admin/data_users'); ?>" class="btn btn-danger btn-sm mt-3">Kembali</a>
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
		</form>
		<br><br>
	<?php endforeach; ?>
</div>