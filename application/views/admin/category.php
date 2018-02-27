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
    <div class="col-lg-10">
      <?php if ($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php }elseif ($this->session->flashdata('error')){ ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
      <?php } ?> 

      <div class="clearfix" style="padding-bottom: 5px;">
        <button type="button" class="btn pull-right" data-toggle="modal" data-target="#tambah-data">Create Category
        </button>

          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                  <h4 class="modal-title">Tambah Data</h4>
              </div>
              <form class="form-horizontal" action="add_category" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" name="nama_kategori" placeholder="Tuliskan Nama">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>

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
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($categories as $category) : ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $category['nama_kategori']; ?></td>
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