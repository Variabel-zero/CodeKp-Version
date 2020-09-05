 <!-- Begin Page Content -->
 <div class="container-fluid">

  <!-- Outer Row -->
  <div class="row ">

    <div class="col-lg-5">

      <div class="card o-hidden border-1">
        <div class="card-body p-1">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">

                <form class="user" method="POST" >
                  <div class="form-group">
                    <select class="form-control" name="surat">
                      <option>--Pilih Surat--</option>
                      <?php 
                      foreach ($surat as $row) {
                       ?>

                       <option value="<?=$row['id_surat'];?>"><?=$row['nama_surat'];?></option>

                       <?php 
                     }
                     ?>
                   </select>
                 </div>

                 <button type="submit" class="btn btn-primary">isi data</button>
               </form>

             </div>
           </div>
         </div>

       </div>

     </div>
     <!-- ============================================================= -->
   </div>
   <!-- ============================================================================= -->
   <div class="col-lg-7">
    <div class="badan">
      <?php 

      if(isset($_POST['surat'])){
        $page = $_POST['surat'];
        switch ($page) {
          case '1':
             echo '<div id="content"></div>';
          break;
          case '2':
          include "inputData.php";
          break;    
          case '3':
          include "kosong.php";
          break;    
          default:
          echo "<center style='padding:30% 0 0 50px;'><h3>Maaf. Halaman tidak di temukan !</h3></center>";
          break;
        }
      }else{
        require "kosong.php";
      }

      ?>

    </div>

    <div id="content">

    </div>


  </div>

</div>


</div>

</div>



<script src="<?=base_url()?>asset/js/jquery-2.1.4.min.js"></script>
<!-- <script type="text/javascript">
  function detail_peserta(id_ujian)
  {
    $('.form-group').removeClass('has-error');
    $('.help-block').empty();

    $.ajax({
      url:"<?php echo base_url();?>/home/ajax_detail_peserta",
      type:"POST",
      data: {
        id_ujian: id_ujian
      },
      //dataType:"JSON",
      success: function(data)
      {
        $("#tabel_detail_peserta").html(data);
        $('#modal_form_detail').modal('show');
        $('.modal-title').text('Detail Peserta Ujian');

      },
      error: function(jqXHR, textStatus, errorThrown)
      {
        alert('Error Pengambilan data ajax');
      }
    }
    
    );
  }
</script> -->

<script type="text/javascript">
  $(document).ready(function(){
    $('form').onclik('submit',function(e){
      e.preventDefault();
        loadData();
    })


    $('form').on('submit',function(e){
      e.preventDefault();
      $.ajax({
        type : $(this).attr('method'),
        url : $(this).attr('action'),
        data : $(this).serialize(),
        success:function(){
          loadData();
          resetFrom();
        }
      });
    })
  });


  function loadData(){
    $.get("<?=base_url()?>IsiFormSurat",function(data){
      $('#content').html(data);

    });
  }

  function resetFrom(){
    $('[type=text]').val('');
    $('[name=nama]').focus();
  }
</script>