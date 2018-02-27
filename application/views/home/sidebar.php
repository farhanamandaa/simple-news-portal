<div class="col-sm-3">
  <div class="judul_sidebar">
    <span class="label label-primary">Latest News</span>
  </div>
  <?php foreach ($data_sidebar as $sidebar) : ?>

  <div class="wrap">
    <div class="gbr_sidebar">
      <img class="img-responsive" src="<?php echo base_url(); ?>assets/uploads/<?php echo $sidebar['nama_gambar']; ?>"  width="106" height="35"> 
    </div>
    <div class="isi_sidebar"><a href="<?php echo base_url(); ?>read/<?php echo $sidebar['id_artikel']; ?>"> <?php echo $sidebar['judul_artikel']; ?></a>
    </div>
    <div class="tes">
      
    </div>
  </div>
  <?php endforeach; ?>
</div>

<div class="col-sm-1">
</div>
</div>
<!-- end of row --> 
</div>
<!-- end of container -->

