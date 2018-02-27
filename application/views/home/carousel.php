<div class="container">
	<div class="row">
		<div class="col-sm-1">
  		</div>

  		<div class="col-sm-7"> 		
			<div class="wrapper">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			            <!-- Indicators -->
			        <ol class="carousel-indicators">
			            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			            <li data-target="#myCarousel" data-slide-to="1"></li>
			            <li data-target="#myCarousel" data-slide-to="2"></li>
			        </ol>
			        <div class="carousel-inner">
			        	<?php 
			        		$counter = 0;
			        		foreach ($data_carousel as $carousel) { 
			        			if($counter==0) { ?>
			        				<div class="item active">
			              				<a href ="<?php echo base_url(); ?>read/<?php echo $carousel['id_artikel']; ?>"> <img src="<?php echo base_url();?>assets/uploads/<?php echo $carousel['nama_gambar']?> " width="960" height="540"> </a> 
			              					<div class="carousel-caption">
			              						<a href ="<?php echo base_url(); ?>read/<?php echo $carousel['id_artikel']; ?>" ><h3><?php echo $carousel['judul_artikel'] ;?></h3></a>
			              					</div>
			              			</div>
			              		<?php } else { ?>
			              			<div class="item">
			              				<a href ="<?php echo base_url(); ?>read/<?php echo $carousel['id_artikel']; ?>"> <img src="<?php echo base_url();?>assets/uploads/<?php echo $carousel['nama_gambar']?> " width="960" height="540"> </a> 
			              					<div class="carousel-caption">
			              						<a href ="<?php echo base_url(); ?>read/<?php echo $carousel['id_artikel']; ?>" ><h3><?php echo $carousel['judul_artikel'] ;?></h3></a>
			              					</div>
			              			</div>		
			        		 <?php }
			        		 $counter++;
			        		 } ?> 
			        	
			        </div>
			            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			            	<span class="glyphicon glyphicon-chevron-left"></span>
			            	<span class="sr-only">Previous</span>
			            </a>
			            <a class="right carousel-control" href="#myCarousel" data-slide="next">
			            	<span class="glyphicon glyphicon-chevron-right"></span>
			                <span class="sr-only">Next</span>
			            </a>
			    </div>
			</div>