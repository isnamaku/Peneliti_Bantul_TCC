<div class="container-fluid">
  <font class="text-center" face="Century Gothic" size="8" color="#3a67ae"><strong><u>Data Penelitian</u></strong></font>  
  <div class="card mt-3 p-2 mb-3">
	  <div>
			<button class="btn btn-sm btn-primary mt-3" data-toggle = "modal" data-target = "#tambah_penelitian" style="font-size: 20px;"><i class = "fas fa-plus fa-sm"></i> Input Penelitian</button>
		</div><br>
		<div class=" navbar-search navbar-right">
	    <?php echo form_open('admin/data_penelitian/search') ?>
				<div class="input-group">
	    		<input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
	         <div class="input-group-append">
	            <button class="btn btn-primary" type="submit"><i class="fas fa-search fa-sm"></i></button>
	          </div>
	      </div>
			<?php echo form_close() ?>
	  </div><br>
		<table id="example" class="table table-bordered mb-4">
			<tr>
				<th>No</th>
				<th>Nama Penelitian</th>
				<th>Nama Peneliti</th>
				<th>Kategori</th>
	      <th>Tahun</th>
				<th colspan="3">Aksi</th>
			</tr>

			<?php
				$no = 1;
				foreach ($penelitian as $pnlt) :	
			?>

			<tr>
				<td><?php echo $no ++; ?></td>
				<td><?php echo $pnlt->nama_penelitian; ?></td>
				<td><?php echo $pnlt->nama_peneliti; ?></td>
				<td><?php echo $pnlt->kategori; ?></td>
	      <td><?php echo $pnlt->tahun; ?></td>
	      <td><?php echo anchor('admin/data_penelitian/detail/' .$pnlt->id_penelitian, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
				<td><?php echo anchor('admin/data_penelitian/edit/' .$pnlt->id_penelitian, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?></td>
				<td><?php echo anchor('admin/data_penelitian/hapus/' .$pnlt->id_penelitian,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
			</tr>

			<?php endforeach; ?>
			
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_penelitian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PENELITIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_penelitian/tambah_aksi' ?>" method = "post" enctype = "multipart/form-data">
        	<div class="form-group">
        		<label>Nama Penelitian</label>
        		<input type="text" name="nama_penelitian" class="form-control">
        	</div>
            <div class="form-group">
        		<label>Nama Peneliti</label>
        		<input type="text" name="nama_peneliti" class="form-control">
        	</div>
          		<div class="form-group">	
        		<label>Kategori</label>
              <select class="form-control" name="kategori">
                <option>Kriya</option>
                <option>Kuliner</option>
                <option>Seni Budaya</option>
                
              </select>
        	</div>
             <div class="form-group">  
            <label>Tahun</label>
            <input type="text" name="tahun" class="form-control">
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