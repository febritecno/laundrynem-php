<? require ("app/head.php"); ?>
<!--barang,konsumen,suplier -->


<? require 'utama.php'; ?>

    <? require ("app/body.php"); ?>

            <? require("app/side.php");?>
                
                <? require("app/nav.php"); ?>
        
<!--ojok ubah require blaa blaa .. ,kanggo load tampilan kui -->
            <div class="col-md-12 col-sm-12 col-xs-12">







<!-- page content -->

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>
                    Masukan Karyawan
                </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for..." id="c">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="t">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>






<!-- iki ubek2 kono-->

                <div class="container">
                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                
                                <h2>Tabel Konten<small>tambah, hapus dan cetak</small></h2>
                                   
                               
                                   
                                    <div class="nav navbar-right panel_toolbox">
      
       <a class ="btn btn-success btn-sm" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah</a>

                                <a href="karyawan1_print" target="BLANK" class="btn btn-info btn-sm" target="BLANK"><i class="fa fa-print"></i> Print</a>
                
                                    </div>
                                <div class="clearfix"></div>
                            </div>















<!-- isi nk kene -->
<!-- Modal -->
      <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
 <div class="modal-content">

 <form class="form-horizontal" novalidate>

   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
     <h4 class="modal-title" id="myModalLabel">Tulis Data Baru</h4>
   </div>

 <!--isi modal-->
               <div class="modal-body">
             
                   <div class="item form-group">
              <label for="nik">Nik <span class="required">*</span></label>
              <input type="number" class="form-control" id="nik" data-validate-length-range="5" data-validate-words="1" placeholder="wajib di isi 5 dikit [angka]" required="required">
                   </div>

                   <div class="form-group">
              <label for="nm">Nama Karyawan</label>
              <input type="text" class="form-control" id="nm">
                   </div>

                   <div class="form-group">
              <label for="al">Alamat Karyawan</label>
              <input type="text" class="form-control" id="al">
                   </div>

                   <div class="form-group">
              <label for="nt">Nomer Telpon</label>
              <input type="number" class="form-control" id="nt">
                   </div>


                   <div class="form-group">
              <label for="ps">Password<span>*</span></label>
              <input type="password" class="form-control" id="ps" data-validate-length-range="8" data-validate-words="1" placeholder="isi password akun" required="required">
                   </div>
</br>
  <div class="form-group">
              <label class="form-label" for="tu">Type User Karyawan : </label>
                    <select class="input-large" id="tu">
                          <option value="karyawan">Karyawan</option>
                        <option value="admin">Admin</option> 
                    </select>
              
                   </div>

            </br>      
                   <div class="form-group">
              <label class="form-label" for="jk">Jenis Kelamin : </label>
                    <select class="input-large" id="jk">
                          <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option> 
                    </select>
              
                   </div>
               
               </div>
<!--/isi modal-->

             
   <div class="modal-footer">
     <button type="submit" id="save" class="btn btn-primary">Save</button>
 </div>
  </form>
  </div>
      </div>
      </div>
      </p>
      <div id="viewdata"></div>
    </div>
<!-- modal akhir ->

                                <!- /isi nk kene -->
                            <!-- /tempat untuk menampilkan database -->
        
        </div>
            </div>
                </div>
                    </div>


                   </div>
                </div>


  <script type="text/javascript">

//fungsi refresh page saat ketika submit
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}

  //gawe tampiklan data
    function viewdata(){
      $.ajax({
   type: "GET",
   url: "karyawan1_data.php",
   dataType: "html"
      }).done(function( msg ) {

   $( "#viewdata" ).html( msg );
      }).fail(function( jqXHR, textStatus ) {
   alert( "Request failed: " + textStatus );
      });
     }





      $('#save').click(function(){
   var nik = $('#nik').val();
   var nm = $('#nm').val();
   var al = $('#al').val();
   var nt = $('#nt').val();
   var ps = $('#ps').val();
   var tu = $('#tu').val();
   var jk = $('#jk').val();
     
    
    
   var datas = "nik="+nik+"&nm="+nm+"&al="+al+"&nt="+nt+"&ps="+ps+"&tu="+tu+"&jk="+jk;

//gawe tambah data
   $.ajax({
       type: "POST",
       url: "karyawan1_tambah.php",
       data: datas,
       dataType: "html"
   }).done(function( msg ) {
       alert( msg );
       viewdata();
       
   }).fail(function() {
       alert( "Opss, Error yak?" );
   }).always(function() {
           new PNotify({
            title: ' Data Telah Tertambahkan',
             text: 'Data yang anda inginkan telah sukses ditambahkan.',
             type: 'info'
              });
           $('#add').modal('hide');

       window.onload = timedRefresh(5000);
   });
      });


// digawe hapus data
function deletedata(str){
   var nik = str;
   
   $.ajax({
       type: "POST",
       url: "karyawan1_delete.php",
       data: "nik="+nik,
       dataType: "html"
   }).done(function( msg ) {
       alert( msg );
       viewdata();
   }).fail(function() {
       alert( "Opss, Error yak?" );
   }).always(function() {
       new PNotify({
            title: ' Data Telah Terhapus',
             text: 'Data yang anda pilih telah terhapus.',
             type: 'error'
              });
   });


     }

    </script>




<script type="text/javascript">
$('#close').click({
 window.onload = timedRefresh(500);  
});

</script>

<? require("app/footer.php"); ?>