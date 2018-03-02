<?php
switch ($this->input->get('action')) {
  case 'tambahberita': ?>
    <section class="content container-fluid">
      <?php echo FCPATH; ?>
      <div class="row">
        <div class="col-lg-10">
          <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Artikel Baru</h3>
            </div>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="add_articles">
              <div class="box-body">
                <div class="form-group">
                  <label for="judul" class="col-sm-2 control-label">Judul Artikel</label>
                  <div class="col-sm-10">
                    <input type="judul" name="judul_artikel" class="form-control" id="judul" placeholder="Judul">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-2">
                      <select class="form-control" name="id_kategori">
                        <?php foreach ($categories as $category): ?>
                          <option value="<?php echo $category['id_kategori']; ?>"> <?php echo $category['nama_kategori']; ?> </option>
                        <?php endforeach; ?>
                      </select>
                   </div>
                 </div>
                 <div class="form-group">
                    <label for="judul" class="col-sm-2 control-label">Upload Gambar</label>
                      <div class="col-sm-2">
                        <input name="foto" type="file" accept="image/*" id="gambar"/>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="judul" class="col-sm-2 control-label">Isi Artikel</label>
                      <div class="col-sm-10">
                        <textarea id="editor1" name="isi_artikel" rows="10" cols="80"></textarea>
                      </div>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" name="save" class="btn btn-info pull-right">Submit Articles</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php break;

    case 'editberita': ?>
    <section class="content container-fluid">
      <?php var_dump($detail); ?>
      <div class="row">
        <div class="col-lg-10">
          <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Artikel Baru</h3>
            </div>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="update_articles?id=<?php echo $detail['id_artikel']; ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="judul" class="col-sm-2 control-label">Judul Artikel</label>
                  <div class="col-sm-10">
                    <input type="judul" name="judul_artikel" class="form-control" id="judul" placeholder="Judul" value="<?php echo $detail['judul_artikel']; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                    <div class="col-sm-2">
                      <select class="form-control" name="id_kategori">
                        <?php foreach ($categories as $category): ?>
                          <option value="<?php echo $category['id_kategori']; ?>" <?php if ($category['id_kategori']== $detail['id_kategori']) echo 'selected=selected'; ?>  > <?php echo $category['nama_kategori']; ?> </option>
                        <?php endforeach; ?>
                      </select>
                   </div>
                 </div>
                 <div class="form-group">
                    <label for="judul" class="col-sm-2 control-label">Gambar</label>
                      <div class="col-sm-10">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/uploads/<?php echo $detail['nama_gambar']; ?>" width="220" height="50">
                      </div>
                  </div>
                 <div class="form-group">
                    <label for="judul" class="col-sm-2 control-label">Upload Gambar</label>
                      <div class="col-sm-2">
                        <input name="foto" type="file" accept="image/*" id="gambar"/>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="judul" class="col-sm-2 control-label">Isi Artikel</label>
                      <div class="col-sm-10">
                        <textarea id="editor1" name="isi_artikel" rows="10" cols="80"><?php echo $detail['isi_artikel']; ?></textarea>
                      </div>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" name="save" class="btn btn-info pull-right">Submit Articles</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>      
      <?php break;

    default: ?> 
    <section class="content-header">
      <h1>
        <!-- Page Header -->
        Daftar Artikel
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-lg-11">
      <div class="clearfix" style="padding-bottom: 5px;">
        <a href="?module=articles&action=tambahberita"><button type="button" class="btn pull-right">Create Articles
        </button></a>
      </div>
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Artikel</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($articles as $article) : ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $article['judul_artikel']; ?></td>
                  <td><?php echo $article['tanggal_artikel']; ?></td>
                  <td><?php echo $article['nama_kategori']; ?></td>
                  <td><a href="?module=articles&action=editberita&id=<?php echo $article['id_artikel']; ?>"><span class="glyphicon glyphicon-edit"></span> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="delete_articles?id=<?php echo $article['id_artikel']; ?>"><span class="glyphicon glyphicon-trash"></span></td>
                </tr>
              <?php 
              $no++;
              endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

    <?php 
  break;

}
?>
