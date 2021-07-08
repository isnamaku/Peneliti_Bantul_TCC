<div class="container-fluid">
<font class="text-center" face="Century Gothic" size="8" color="#3a67ae"><strong><u>Pesan Masuk</u></strong></font>  
	<div class="card mt-3 p-2 mb-3">
		<table class="table table-bordered">
			<tr align="center">
				<th>No</th>
				<th>Nama Pengirim</th>
				<th>Email</th>
				<th>Alamat</th>
				<th>Judul / Subjek</th>
				<th>Isi Pesan</th>
				<th colspan="3">Aksi</th>
			</tr>

			<?php
				$no = 1;
				foreach ($pesan as $psn) :	
			?>

			<tr>
				<td><?php echo $no ++; ?></td>
				<td><?php echo $psn->nama; ?></td>
				<td><?php echo $psn->email; ?></td>
				<td><?php echo $psn->alamat; ?></td>
				<td><?php echo $psn->judul; ?></td>
				<td><?php echo $psn->isi_pesan; ?></td>
				<td><a href="https://mail.google.com/mail/u/0/#inbox" target='_blank' class="btn btn-primary">Balas</td>
				<td><?php echo anchor('admin/data_pesan/hapus/' .$psn->id_pesan,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>'); ?></td>
			</tr>

			<?php endforeach; ?>
		</table>
	</div>	
</div>