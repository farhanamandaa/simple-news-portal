<div class="container">
	<div class="row">
		<div class="col-sm-1">
  	</div>
		<div class="col-sm-7">
			<?php foreach ($details as $detail) : ?>
        <div class="tag">
          <span class="label label-default"><?php echo $detail['nama_kategori']; ?> </span>
        </div>
        <div class="judul_artikel"><?php echo $detail['judul_artikel']; ?></div>
            <div class="sub_judul_artikel">
                  By <b>Admin</b>  -  10 Oktober 2017
            </div>
              <div class="gambar_konten">
                <img class="img-responsive" src="<?php echo base_url(); ?>assets/uploads/<?php echo $detail['nama_gambar']; ?>" height="50%">
              </div>
      <div class="konten"><?php echo $detail['isi_artikel']; ?> </div>
      <?php endforeach ?>