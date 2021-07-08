<div class="container-fluid mb-5">
	<!-- Tampilan Barang -->
	<div class="row text-center">

		<?php foreach ($eksternal as $pnlt) : ?>

			<div class="card ml-3" style="width: 16rem;">
  				<img class="m-2" style="height: 350px;" src="<?php echo base_url(). '/uploads/'.$pnlt->gambar; ?>" class="card-img-top" alt="...">
  				<div class="card-body">
    				<h5 class="card-title mb-3" style="font-family: Century Gothic;"><?php echo $pnlt->nama_peneliti; ?></h5>
    				<?php echo anchor('dashboard/detail/'. $pnlt->id_peneliti,'<div class = "btn btn-block btn-sm btn-success">Profil</div>'); ?>
  				</div>
		  </div>

			<?php endforeach; ?>
	</div>
</div>

