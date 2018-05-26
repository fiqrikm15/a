<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>

<div class="container">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Car
                    <small>List</small>
                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
                </h1>
            </div>
            
            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>Merk</th>
                        <th>Plat Nomor</th>
                        <th>Warna</th>
                        <th>Tahun</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody id="show_data">
                    
                </tbody>
            </table>
        </div>
    </div>      
</div>

<!-- MODAL ADD -->
<form>
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Merk</label>
                    <div class="col-md-10">
                        <input type="text" name="merk" id="merk" class="form-control" placeholder="Merk">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Plat Nomor</label>
                    <div class="col-md-10">
                        <input type="text" name="plat" id="plat" class="form-control" placeholder="Plat Nomor">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Warna</label>
                    <div class="col-md-10">
                        <input type="text" name="warna" id="warna" class="form-control" placeholder="Warna">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tahun</label>
                    <div class="col-md-10">
                        <input type="text" name="tahun" id="tahun" class="form-control" placeholder="Tahun">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
            </div>
        </div>
        </div>
    </div>
</form>
<!--END MODAL ADD-->

<!-- MODAL ADD -->
<form>
    <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Mobil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <div class="form-group row">
                    <label class="col-md-2 col-form-label">Merk</label>
                    <div class="col-md-10">
                        <input type="text" name="id_edit" id="id_edit" class="form-control" placeholder="Merk">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Merk</label>
                    <div class="col-md-10">
                        <input type="text" name="merk_edit" id="merk_edit" class="form-control" placeholder="Merk">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Plat Nomor</label>
                    <div class="col-md-10">
                        <input type="text" name="plat_edit" id="plat_edit" class="form-control" placeholder="Plat Nomor">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Warna</label>
                    <div class="col-md-10">
                        <input type="text" name="warna_edit" id="warna_edit" class="form-control" placeholder="Warna">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Tahun</label>
                    <div class="col-md-10">
                        <input type="text" name="tahun_edit" id="tahun_edit" class="form-control" placeholder="Tahun">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
            </div>
        </div>
        </div>
    </div>
</form>
<!--END MODAL ADD-->

<!--MODAL DELETE-->
<form>
    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Ebook</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <strong>Apa kamu yakin ??</strong>
            </div>
            <div class="modal-footer">
            <input type="hidden" name="id_delete" id="id_delete" class="form-control">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
            </div>
        </div>
        </div>
    </div>
</form>
<!--END MODAL DELETE-->
    
<script type="text/javascript" src="<?php echo base_url().'Assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'Assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'Assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'Assets/js/dataTables.bootstrap4.js'?>"></script>   

<script type="text/javascript"> 
$(document).ready(function(){
        show_car();   //call function show all ebook
        
        $('#mydata').dataTable();
         
        //function show all ebook
        function show_car(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('car/get_all_data')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].merk+'</td>'+
                                '<td>'+data[i].plat+'</td>'+
                                '<td>'+data[i].warna+'</td>'+
                                '<td>'+data[i].thn+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'"  data-merk="'+data[i].merk+'" data-plat="'+data[i].plat+'" data-tahun="'+data[i].thn+'" data-warna="'+data[i].warna+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        $('#btn_save').on('click',function(){
            var merk = $('#merk').val();
            var plat = $('#plat').val();
            var warna = $('#warna').val();
            var tahun = $('#tahun').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('car/save_car')?>",
                dataType : "JSON",
                data : {merk: merk, plat:plat, warna:warna, tahun:tahun},
                success: function(data){
                    $('[name="merk"]').val("");
                    $('[name="plat"]').val("");
                    $('[name="warna"]').val("");
                    $('[name="tahun"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_car();
                }
            });
            return false;
        });

        $('#show_data').on('click','.item_edit',function(){
            var merk = $(this).data('merk');
            var plat = $(this).data('plat');
            var warna = $(this).data('warna');
            var tahun = $(this).data('tahun');
            var id = $(this).data('id');
            
            
            $('#Modal_Edit').modal('show');
            $('[name="merk_edit"]').val(merk);
            $('[name="plat_edit"]').val(plat);
            $('[name="tahun_edit"]').val(tahun);
            $('[name="warna_edit"]').val(warna);
            $('[name="id_edit"]').val(id);
        });

        $('#btn_update').on('click',function(){
            var merk = $('#merk_edit').val();
            var plat = $('#plat_edit').val();
            var warna        = $('#warna_edit').val();
            var tahun        = $('#tahun_edit').val();
            var id        = $('#id_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('car/update_car')?>",
                dataType : "JSON",
                data : {id:id, merk:merk, plat:plat, warna:warna, tahun:tahun},
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="merk_edit"]').val("");
                    $('[name="warna_edit"]').val("");
                    $('[name="plat_edit"]').val("");
                    $('[name="tahun_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_car();
                }
            });
            return false;
        });

        $('#show_data').on('click','.item_delete',function(){
            var id = $(this).data('id');
            
            $('#Modal_Delete').modal('show');
            $('[name="id_delete"]').val(id);
        });

        $('#btn_delete').on('click',function(){
            var id = $('#id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('car/delete_car')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_car();
                }
            });
            return false;
        });
});
</script>
</body>
</html>