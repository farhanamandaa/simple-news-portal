<section class="content-header">
      <h1>
        <!-- Page Header -->
        Daftar Komentar
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
    <div class="col-lg-10">
      <div class="clearfix" style="padding-bottom: 5px;">
        <button type="button" class="btn pull-right"><a href="?module=articles&aksi=tambahberita">Create Articles</a>
        </button>
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
                <th>Isi Komentar</th>
                <th>Nama User</th>
                <th>Judul Artikel</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($comments as $comment) : ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $comment['isi_komentar']; ?></td>
                  <td><?php echo $comment['nama_user']; ?></td>
                  <td><?php echo $comment['judul_artikel']; ?></td>
                  <td><a href="delete_comment?id=<?php echo $comment['id_komentar']; ?>"><span class="glyphicon glyphicon-trash"></span></td>
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