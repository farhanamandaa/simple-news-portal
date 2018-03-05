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
      <div class="judul_sidebar">
        <?php if (count($comments) > 0) { 
          foreach ($comments as $comment) { ?> 
         <div class="comment" id="comment">
          <div class="comment_name">
            <div class="comment_image">
              <p> <?php echo substr($comment['nama_user'],0,1); ?> </p>
            </div>
            <div class="down-arrow">
            </div>
            <p><?php echo $comment['nama_user'];?> <br>
            <span><?php echo $comment['tanggal_komentar'];?> </span> </p>
          </div>
          <div class="comment_text">
            <p><?php echo $comment['isi_komentar']; ?></p>
          </div>
          <div class="reply_form_" style="display:none">
            <form method="POST">
              <div class="form-group">
                Nama<br>
                <input type="text" name="nama_reply" placeholder="Name"><br>
                Komentar<br>
                <textarea name="komentar_reply" placeholder="Message.." rows="5"></textarea><br>
                <input type="submit" name="reply_comment_" value="Reply comment" class="reply">
              </div>
            </form>
          </div>
        </div>
        <?php } } ?>

        <h3>Leave a Reply</h3>
        <p>Please reply in my article <font color="red">*</font></p>
        <br>
        <form method="POST">
            <div class="form-group">
              Nama<br>
              <input type="text" name="nama" placeholder="Name" size="50" ><br>
              Komentar<br>
              <textarea name="komentar" placeholder="Message.." cols="55" rows="5" charswidth="23"></textarea><br>
              <input type="submit" name="comment" value="Post comment" class="reply">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>