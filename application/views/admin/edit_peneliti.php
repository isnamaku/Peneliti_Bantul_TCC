<div class="container-fluid">
	<h3><i class="fas fa-edit mb-2"></i> EDIT DATA PENELITI</h3>

	<?php foreach ($peneliti as $pnlt ) : ?>

		<form method="post" action="<?php echo base_url().'admin/data_peneliti/update' ?>">
			<div class="for-group mb-2">
				<label>Nama Peneliti</label>
				<input type="text" name="nama_peneliti" class="form-control" value="<?php echo $pnlt->nama_peneliti; ?>">
			</div>
			<div class="for-group mb-2">
				<label>KTP / NIK</label>
				<input type="text" name="ktpnik" class="form-control" value="<?php echo $pnlt->ktpnik; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Tempat, Tanggal Lahir</label>
				<input type="text" name="ttl" class="form-control" value="<?php echo $pnlt->ttl; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Jenis Kelamin</label>
				<select type="text" name="jenkel" class="form-control" value="<?php echo $pnlt->jenkel; ?>">
					<option>Laki-laki</option>
                  	<option>Perempuan</option>
              	</select>
			</div>
			<div class="for-group mb-2">
				<label>Alamat</label>
				<input type="hidden" name="id_peneliti" class="form-control" value="<?php echo $pnlt->id_peneliti; ?>">				
				<input type="text" name="alamat" class="form-control" value="<?php echo $pnlt->alamat; ?>">
			</div>
			<div class="for-group mb-2">
				<label>No. HP</label>
				<input type="text" name="no_hp" class="form-control" value="<?php echo $pnlt->no_hp; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo $pnlt->email; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Pendidikan</label>
				<input type="text" name="pendidikan" class="form-control" value="<?php echo $pnlt->pendidikan; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Kategori</label>
				<select class="form-control" name="kategori" value="<?php echo $pnlt->kategori; ?>">
                	<option>Internal BAPPEDA</option>
                	<option>Eksternal BAPPEDA</option>
              	</select>
			</div>
			<div class="for-group mb-2">
				<label>Jenjang Peneliti</label>
				<Select type="text" name="jenjangpeneliti" class="form-control" value="<?php echo $pnlt->jenjangpeneliti; ?>">
					<option>Peneliti Pertama</option>
	                <option>Peneliti Muda</option>
	                <option>Peneliti Madya</option>
	                <option>Peneliti Utama</option>
	                <option>Peneliti</option>
	            </Select>
			</div>
			<div class="for-group mb-2">
				<label>Instansi</label>
				<input type="text" name="instansi" class="form-control" value="<?php echo $pnlt->instansi; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Alamat Instansi</label>
				<input type="text" name="alamat_ins" class="form-control" value="<?php echo $pnlt->alamat_ins; ?>">
			</div>
			<div class="for-group mb-2">
				<label>Hasil Penelitian</label>
				<input type="text" name="list_research" class="form-control" value="<?php echo $pnlt->list_research; ?>">
			</div>
			<a href="<?php echo base_url('admin/data_peneliti'); ?>" class="btn btn-danger btn-sm mt-3">Kembali</a>
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
		</form>
		<br><br>


	<?php endforeach; ?>
</div>