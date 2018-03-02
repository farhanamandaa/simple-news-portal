<div class="container">
	<div class="row">
		<div class="col-sm-1">
  		</div>

	  	<div class="col-sm-7">
	  		<div class="bungkus">
				<div class="judul_sidebar">
		  			<span class="label label-primary">Latest News</span> 
		  		</div>

		  		<?php foreach ($category as $cat) : ?>
		  				<div class="wrap_body">
		  					<div class="gbr_body">
		  						<a href="<?php echo base_url(); ?>read/<?php echo $cat['id_artikel']; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/uploads/<?php echo $cat['nama_gambar']?> " width="220" height="50"></a>
		  					</div>
		  			<div class="judul_body">
		  				<a href="<?php echo base_url(); ?>read/<?php echo $cat['id_artikel']; ?>"> <?php echo $cat['judul_artikel']; ?></a>
		  			</div>
		  			<div class="isi_body">
		  				<?php echo ''.str_replace(array('<p>','</p>'),array(' ',' '),substr($cat['isi_artikel'],0,100)).'.....'; ?>
		  			</div>
		  		</div>
		  		<?php endforeach; ?>
		  	</div>
	  	</div>