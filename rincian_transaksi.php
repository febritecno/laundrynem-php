<? require ("app/head.php"); ?>

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
                    Data Rincian Transaksi
                </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
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
                                <h2>Tabel Konten<small>tambah, edit, hapus dan cetak</small></h2>
                                    <!--<button type="button" id="0" class="btn btn-dark" data-toggle="modal" data-target="#add"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                                    -->
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a href="#add" data-toggle="modal" data-target="#add"><i class="fa fa-download"></i></a>
                                        <li><a href="rincian_transaksi_print" target="BLANK"><i class="fa fa-print"></i></a>
                                            
                                        <li><a href="menu"><i class="fa fa-times"></i></a>
                                        </li>
                                    </ul>
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
              <label for="ir">ID Rincian Transaksi<span class="required">*</span></label>
              <input type="number" class="form-control" id="ir" data-validate-length-range="3" data-validate-words="1" placeholder="wajib di isi 3 dikit [angka]" required="required">
                   </div>

                   <div class="form-group">
              <label for="jl">Jumlah</label>
              <input type="number" class="form-control" id="jl">
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

                        <br />
                        <br />
                        <br />

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
   url: "rincian_transaksi_data.php",
   dataType: "html"
      }).done(function( msg ) {

   $( "#viewdata" ).html( msg );
      }).fail(function( jqXHR, textStatus ) {
   alert( "Request failed: " + textStatus );
      });
     }

      $('#save').click(function(){
   var ir = $('#ir').val();
   var jl = $('#jl').val();
    
   var datas = "ir="+ir+"&jl="+jl;

//gawe tambah data
   $.ajax({
       type: "POST",
       url: "rincian_transaksi_tambah.php",
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
       window.onload = timedRefresh(5000);
   });
      });


// digawe hapus data
function deletedata(str){
   var ir = str;
   
   $.ajax({
       type: "POST",
       url: "rincian_transaksi_delete.php",
       data: "ir="+ir,
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



//digawe updatedata
function updatedata(str){
   var ir = str;
   var jl = $('#jl'+str).val();
    
   var datas = "ir="+ir+"&jl="+jl;
    
    $.ajax({
       type: "POST",
       url: "rincian_transaksi_update.php",
       data: datas,
       dataType: "html"
   }).done(function( msg ) {
       alert( msg );
       viewdata();
   }).fail(function() {
       alert( "Opss, Error yak?" );
   }).always(function() {
       new PNotify({
            title: ' Data Telah Di Update',
             text: 'Data yang anda pilih telah diperbarui.',
             type: 'notice'
              });
   });
}

    </script>

<? require("app/footer.php"); ?>