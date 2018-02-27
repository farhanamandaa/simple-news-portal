<div class="container">
	<div class="row">
		<div class="col-sm-1">
	</div>

		<div class="col-sm-7">
			<?php if (!empty($data_search)){  
			foreach ($data_search as $search) {
			?>
				<div class="wrap_body">
	  					<div class="gbr_body">
	  						<a href="<?php echo base_url(); ?>read/<?php echo $search['id_artikel']; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/uploads/<?php echo $search['nama_gambar']?> " width="220" height="50"></a>
	  					</div>
	  			<div class="judul_body">
	  				<a href="<?php echo base_url(); ?>read/<?php echo $search['id_artikel']; ?>"> <?php echo $search['judul_artikel']; ?></a>
	  			</div>
	  			<div class="isi_body">
	  				<?php echo ''.str_replace(array('<p>','</p>'),array(' ',' '),substr($search['isi_artikel'],0,100)).'.....'; ?>
	  			</div>
	  			<div class="tes_body">
	  				<?php  echo date('d-m-Y',strtotime($search['tanggal_artikel'])); ?>
	  			</div>
	  		</div>
			<?php } 

			}else{
				echo "404";
			}
			?>
		</div>