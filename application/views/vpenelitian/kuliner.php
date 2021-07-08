<div class="container-fluid">
  <font class="text-center" face="Century Gothic" size="8" color="#3a67ae"><strong><u>Penelitian Kategori Kuliner</u></strong></font>  
  	<div class="card p-2 mt-3 mb-3">
		<div class=" navbar-search navbar-right mt-3">
		    <?php echo form_open('kategorip/searchkriya') ?>
				<div class="input-group">
			        <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
			        <div class="input-group-append">
			            <button class="btn btn-primary" type="submit"><i class="fas fa-search fa-sm"></i></button>
			        </div>
		        </div>
			<?php echo form_close() ?>
		</div><br>
	
		<table class="table table-bordered mb-4">
			<tr>
				<th>No</th>
				<th>Nama Penelitian</th>
				<th>Nama Peneliti</th>
				<th>Kategori</th>
	            <th>Tahun</th>
				
			</tr>

			<?php
				$no = 1;
				foreach ($kuliner as $kul) :	
			?>

			<tr>
				<td><?php echo $no ++; ?></td>
				<td><?php echo $kul->nama_penelitian; ?></td>
				<td><?php echo $kul->nama_peneliti; ?></td>
				<td><?php echo $kul->kategori; ?></td>
	            <td><?php echo $kul->tahun; ?></td>
				</tr>

			<?php endforeach; ?>
			
		</table>
	</div>
</div>