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
            <p class="text-muted font-13 m-b-30">
                
            </p>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">+ Post</button>
            <table id="datatable" class="table  ">
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
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td class="text-center">
                    <a href="" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> Detail</a>
                    <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                    <a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

    <!-- modal postingan -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                        </label>
                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="gender" value="female"> Female
                        </label>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                    </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a href="<?=base_url()?>postingan" class="btn btn-primary">Cancel</a>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>

            </div>
        </div>
    </div>
    <!-- close modal postingan -->
</div>
    <!-- content -->
<?php  $this->load->view('partial/footer')?>