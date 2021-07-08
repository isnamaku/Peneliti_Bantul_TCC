<div class="container-fluid">
	<h3><i class="fas fa-edit mb-2"></i> EDIT DATA PENELITIAN</h3>

	<?php foreach($penelitian as $pnlt ) { ?>

		<form action="<?php echo base_url().'admin/data_penelitian/update' ?>" method="post">
			<div class="form-group mb-2">
				<label>Nama Penelitian</label>
				<input type="text" name="nama_penelitian" class="form-control" value="<?php echo $pnlt->nama_penelitian; ?>">
			</div>
			<div class="form-group mb-2">
				<label>Nama Peneliti</label>
				<input type="text" name="nama_peneliti" class="form-control" value="<?php echo $pnlt->nama_peneliti; ?>">
			</div>
			<div class="form-group mb-2">
				<label>Kategori</label>
				<select class="form-control" name="kategori" value="<?php echo $pnlt->kategori; ?>">
                	<option>Kriya</option>
                    <option>Kuliner</option>
              		<option>Seni Budaya</option>
              	</select>
			</div>
			<div class="form-group mb-2">
				<label>Tahun</label>
				<input type="text" name="tahun" class="form-control" value="<?php echo $pnlt->tahun; ?>">
			</div>
			<a href="<?php echo base_url('admin/data_penelitian'); ?>" class="btn btn-danger btn-sm mt-3">Kembali</a>
			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
		</form>
		<br><br>
	<?php } ?>
</div>