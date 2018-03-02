  		<div class="bungkus">
			<div class="judul_sidebar">
	  			<span class="label label-primary">Latest News</span> 
	  		</div>

	  		<?php foreach ($data_test as $test) : ?>
	  				<div class="wrap_body" >
	  					<div class="gbr_body">
	  						<a href="<?php echo base_url(); ?>read/<?php echo $test['id_artikel']; ?>"><img class="img-responsive" src="<?php echo base_url(); ?>assets/uploads/<?php echo $test['nama_gambar']?> " width="220" height="50"></a>
	  					</div>
			  			<div class="judul_body">
			  				<a href="<?php echo base_url(); ?>read/<?php echo $test['id_artikel']; ?>"> <?php echo $test['judul_artikel']; ?></a>
			  			</div>
			  			<div class="isi_body">
			  				<?php echo ''.str_replace(array('<p>','</p>'),array(' ',' '),substr($test['isi_artikel'],0,100)).'.....'; ?>
			  			</div>
			  			<div class="tes_body">
			  				<?php  echo date('d-m-Y',strtotime($test['tanggal_artikel'])); ?>
			  			</div>
	  				</div>
	  		<?php endforeach; ?>
	  	</div>

	  	<div class="text-center">
			<button type="button" class="btn btn-primary btn-lg " id="load_more" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing" data-val = "1">Load More</button>
		</div>

  	</div> <!-- end of col 7 -->

<script>
$(document).ready(function(){
    $('.btn').on('click',function(e){
    	e.preventDefault(); // prevent reload page
      	var page = $(this).data('val'); // set var page
      	$.ajax({
    		url: "Praktek/get_berita",
    		type:'GET',
    		data: {page:page},
    		beforeSend: function() {
    			$('.btn').button('loading');
    		},
    		success: function(data) {
    			$("#load_more").data('val',($('#load_more').data('val')+1));
    			setTimeout(function() {
    				$(".bungkus").append(data);
    			},2000);
    			setTimeout(function() {
  	 				$('.btn').button('reset');	
  	 			}, 2000);
  	 			if(data==""){
      				$("#load_more").remove();
    			}
    		}	 
  		});
    });
});

</script>