  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Instansi</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Referensi</a></li>
                      <li class="breadcrumb-item active">Instansi</li>
                  </ol>
              </div>
          </div>
      </div><!-- /.container-fluid -->
  </section>

  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      <div class="card-header">
                          <button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus-circle mr-1"></i>Tambah Data</button>

                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                          <form action="<?= base_url(); ?>dashboard/delete" method="post">
                              <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th style="width: 8%;">No</th>
                                          <th>Aksi</th>
                                          <th>Instansi</th>
                                          <th>Deskripsi</th>

                                      </tr>
                                  </thead>
                                  <tbody>

                                      <?php $no = 1;
                                        foreach ($instansi as $i) { ?>
                                          <tr>

                                              <td><?= $no++ ?></td>
                                              <td>
                                                  <a href="" data-toggle="modal" data-target="#ubahData<?= $i['id']; ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                                  <a href="<?php echo base_url() . 'dashboard/hapus/' . $i['id'] ?> " onClick='return confirm("Apakah anda yakin ingin menghapus data ini?")' class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
                                              </td>
                                              <td><?= $i['instansi'] ?></td>
                                              <td>
                                                  <?= $i['deskripsi'] ?>

                                              </td>


                                          </tr>
                                      <?php } ?>
                                  </tbody>

                              </table>
                          </form>
                      </div>
                      <!-- /.card-body -->
                  </div>
                  <!-- /.card -->


                  <!-- /.card -->
              </div>
              <!-- /.col -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
  </section>

  <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
          <div class="modal-content">
              <div class="modal-header bg-info">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">

                  <form action="<?= base_url(); ?>dashboard/insert" method="post">
                      <div class="card-body">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Instansi</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="instansi" placeholder="Masukakn Nama Instansi">
                          </div>

                          <div class="form-group">
                              <label for="exampleFormControlTextarea1">Deskripsi</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Deskripsi" name="deskripsi"></textarea>
                          </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                  </form>
              </div>
          </div>

      </div>
  </div>
  <?php foreach ($instansi1 as $d) { ?>

      <div class="modal fade" id="ubahData<?= $d['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <form action="<?= base_url(); ?>dashboard/edit" method="post">
                          <div class="card-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Instansi</label>
                                  <input type="hidden" value="<?= $d['id'] ?>" name="id">
                                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?= $d['instansi'] ?>" name="instansi">
                              </div>

                              <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Deskripsi</label>
                                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"><?= $d['deskripsi'] ?></textarea>
                              </div>
                          </div>
                          <!-- /.card-body -->

                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                  </div>

              </div>
          </div>
      </div>
  <?php } ?>