<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php  $this->load->view('partial/header')?>
    <!-- content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            
            <h2>Data Postingan <small>Berita</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Settings 1</a>
                      </li>
                      <li><a href="#">Settings 2</a>
                      </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <p class="text-muted font-13 m-b-30"></p>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#posting">+ Post</button>
            <table id="datatable" class="table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th class="text-center">Opsi</th>
                </tr>
                </thead>


                <tbody>
                <?php 
                $no=1;
                foreach ($berita as $key => $value) {?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $value['judul'];?></td>
                    <td><?php echo $value['tanggal'];?></td>
                    <td><?php echo $value['kategori'];?></td>
                    <td class="text-center">
                    <a href="<?php echo base_url('postingan/detail/' . $value['id_berita']) ?>" data-toggle="modal" data-target="#berita"  class=" btn btn-success btn-xs" class="tampil"><i class="fa fa-eye"></i> Detail</a>
                    <a id="<?php echo $value['id_berita']?>" class="btn btn-info btn-xs" class="edit"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="<?php echo base_url('postingan/hapus/' . $value['id_berita']) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

    <!-- modal postingan -->
    <div id="posting" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <!-- form postingan -->
            <div class="x_content">
                <br />
                <form id="berita" data-parsley-validate class="form-horizontal form-label-left" method="POST" >
                <?php if (!empty($editBerita)) { ?>
                <input name="id_berita" id="id_berita" type="hidden" >
                <?php }?>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Judul <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="judul" value="<?= !empty($editBerita[0]['judul']) ? $editBerita[0]['judul'] : ''; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="date" id="last-name" name="tanggal" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Select</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="kategori">
                            <option>Pilih Kategori</option>
                            <option value="teknologi">Teknologi</option>
                            <option value="news">News</option>
                            <option value="food">Food</option>
                            <option value="healty">Healty</option>
                            <option value="edukasi">Edukasi</option>
                          </select>
                        </div>
                      </div>

                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea name="konten" id="konten"></textarea>
                            </div>
                        </div>

                
            </div>
            <div class="modal-footer">
                <a href="<?=base_url()?>postingan" class="btn btn-primary">Cancel</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
            </form>

            </div>
        </div>
    </div>
    <!-- close modal postingan -->

    <!-- detail -->
    
    <!-- detail -->
</div>
    <!-- content -->
<?php  $this->load->view('partial/footer')?>
<script>
    $(function() {
        $(document).ready(function() {
            $('#konten').summernote();
            });
    });


    

    $("#berita").submit(function(e) {
      e.preventDefault();
      var id_berita = $('#id_berita').val();
      if (id_berita != null) {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('postingan/update') ?>",
          data:'',
          dataType: 'json',
          processData: false,
          contentType: false,
          success: function(data) {
            if (!data.status) {
              alert(data.return)
            } else {
              $.magnificPopup.close();
              swal({
                  title: "Success",
                  text: data.return,
                  type: "success",

                  confirmButtonClass: "btn-primary",
                  confirmButtonText: "OK",

                  closeOnConfirm: false,

                },
                function(isConfirm) {

                  if (isConfirm && data.url) {
                    window.location.href = "<?= base_url('postingan') ?>";
                  }
                });
            }
          }
        });
      } else {
        $.ajax({
          type: "POST",
          url: "<?php echo base_url('postingan/saveData') ?>",
          data: new FormData(this),
          dataType: 'json',
          processData: false,
          contentType: false,
          success: function(data) {
            if (!data.status) {
              alert(data.return)
            } else {
              
                    window.location.href = "<?= base_url('postingan') ?>";
                  
            }
          }
        });
      }
    });


  $(document).on('click', '.edit', function() {
      var id = $(this).attr('id');

            window.location.href = "<?php echo base_url() ?>postingan/edit/" + id
    });


    $(document).on('click', '.tampil', function() {
      var id = $(this).attr('id');

            window.location.href = "<?php echo base_url() ?>postingan/detail/" + id
    });



    



    
</script>