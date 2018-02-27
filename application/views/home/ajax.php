			<?php foreach ($data_ajax as $ajax) : ?>
	  				<div class="wrap_body" id="test">
	  					<div class="gbr_body">
	  						<a href="<?php echo base_url(); ?>read/<?php echo $ajax['id_artikel']; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/uploads/<?php echo $ajax['nama_gambar']?> " width="220" height="50"></a>
	  					</div>
			  			<div class="judul_body">
			  				<a href="<?php echo base_url(); ?>read/<?php echo $ajax['id_artikel']; ?>"> <?php echo $test['judul_artikel']; ?></a>
			  			</div>
			  			<div class="isi_body">
			  				<?php echo ''.str_replace(array('<p>','</p>'),array(' ',' '),substr($test['isi_artikel'],0,100)).'.....'; ?>
			  			</div>
			  			<div class="tes_body">
			  				<?php  echo date('d-m-Y',strtotime($ajax['tanggal_artikel'])); ?>
			  			</div>
	  				</div>
	  		<?php endforeach; ?>