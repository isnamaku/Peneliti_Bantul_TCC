<div class="container-fluid">
  <div class="card mb-4">
    <h5 class="card-header">Detail Penelitian</h5>
      <div class="card-body">

        <?php foreach ($penelitian as $pnlt) : ?>

        <div class="row">
          <div class="col-md-8">
            <table class="table">
              <tr>
                <td>Nama Penelitian</td>
                <td><strong><?php echo $pnlt->nama_penelitian; ?></strong></td>
              </tr>
              <tr>
                <td>Nama Peneliti</td>
                <td><strong><?php echo $pnlt->nama_peneliti; ?></strong></td>
              </tr>
              <tr>
                <td>Kategori</td>
                <td><strong><?php echo $pnlt->kategori; ?></strong></td>
              </tr>
              <tr>
                <td>Tahun</td>
                <td><strong><?php echo $pnlt->tahun; ?></strong></td>
              </tr>
            </table>
            <a href="<?php echo base_url('admin/data_penelitian'); ?>" class="btn btn-danger btn-sm mt-3">Kembali</a> 
          </div>
        </div>
        <?php endforeach; ?>
      </div>
  </div>
</div>