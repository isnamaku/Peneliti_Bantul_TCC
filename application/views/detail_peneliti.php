<div class="container-fluid">

	<div class="card mb-4">
	  <h5 class="card-header">Profil Peneliti</h5>
  		<div class="card-body">

  			<?php foreach ($peneliti as $pnlt) : ?>
  			<div class="row">
  				<div class="col-md-4">
  					<img src="<?php echo base_url(), '/uploads/'.$pnlt->gambar;  ?>" class ="card-img-top">
  				</div>
  				<div class="col-md-8">
  					<table class="table">
  						<tr>
  							<td>Nama Lengkap</td>
  							<td><strong><?php echo $pnlt->nama_peneliti; ?></strong></td>
  						</tr>
              <tr>
                <td>KTP / NIK</td>
                <td><strong><?php echo $pnlt->ktpnik; ?></strong></td>
              </tr>
              <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td><strong><?php echo $pnlt->ttl; ?></strong></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td><strong><?php echo $pnlt->jenkel; ?></strong></td>
              </tr>
  						<tr>
  							<td>Alamat</td>
  							<td><strong><?php echo $pnlt->alamat; ?></strong></td>
  						</tr> 
              <tr>
                <td>No. HP</td>
                <td><strong><?php echo $pnlt->no_hp; ?></strong></td>
              </tr>
              <tr>
                <td>Email</td>
                <td><strong><?php echo $pnlt->email; ?></div></strong></td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td><strong><?php echo $pnlt->pendidikan; ?></div></strong></td>
              </tr>
  						<tr>
  							<td>Kategori</td>
  							<td><strong><?php echo $pnlt->kategori; ?></strong></td>
  						</tr> 
              <tr>
              <tr>
                <td>Jenjang Peneliti</td>
                <td><strong><?php echo $pnlt->jenjangpeneliti; ?></strong></td>
              </tr> 
              <tr>
                <td>Instansi</td>
                <td><strong><?php echo $pnlt->instansi; ?></strong></td>
              </tr>
              <tr>
                <td>Alamat Instansi</td>
                <td><strong><?php echo $pnlt->alamat_ins; ?></strong></td>
              </tr>
              <tr>
                <td>Hasil Penelitian</td>
                <td><strong><?php echo $pnlt->list_research; ?></div></strong></td>
              </tr>					
  					</table>
    				<?php echo anchor('','<div class = "btn btn-sm btn-danger">Kembali</div>'); ?>  
  				</div>
  			</div>
    		<?php endforeach; ?>
  		</div>
	</div>