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
                    Data Operasional User Login
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
                                <h2>Table Konten<small>edit dan cetak</small></h2>
                                    <!--<button type="button" id="0" class="btn btn-dark" data-toggle="modal" data-target="#add"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                                    -->
                                    <div class="nav navbar-right panel_toolbox">

                                      <a href="login_print" target="BLANK" class="btn btn-info btn-sm" target="BLANK"><i class="fa fa-print"></i> Print</a>
                                    </div>
                                <div class="clearfix"></div>
                            </div>



<div id="viewdata"></div>

  </div>
      </div>
      </div>
      </p>

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
   url: "login_data.php",
   dataType: "html"
      }).done(function( msg ) {

   $( "#viewdata" ).html( msg );
      }).fail(function( jqXHR, textStatus ) {
   alert( "Request failed: " + textStatus );
      });
     }



//digawe updatedata
function updatedata(str){
   var nik = str;
   var nm = $('#nm'+str).val();
    var jk = $('#jk'+str).val();
   var nk = $('#nk'+str).val();
   var datas = "nik="+nik+"&nm="+nm+"&jk="+jk+"&nk="+nk;

    $.ajax({
       type: "POST",
       url: "login_update.php",
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
