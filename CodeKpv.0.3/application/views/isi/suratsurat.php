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

                <form class="user" id="form1" method="POST" action=""<?=base_url();?>IsiFormSurat/data">
                  <div class="form-group">
                    <select class="form-control" name="surat">
                      <option value="pilih">--Pilih Surat--</option>
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
    <div id="badan">
      <?php 

      if(isset($_POST['surat']))
      {
        $page = $_POST['surat'];
        if ($page == "pilih") 
        {
          include "kosong.php";
        }
        else if($page == 1)
        {
          include "inputData.php";
        }
        else if($page == 2)
        {
          include "inputData.php";
        }
        else if($page == 3)
        { 
          include "kosong.php";
        }
      else
      {
        echo "<center style='padding:30% 0 0 50px;'><h3>Maaf. Halaman tidak di temukan !</h3></center>";
      }
    }
    else
    {
      require "kosong.php";
    }

    ?>
  </div>
</div>

</div>


</div>

</div>



<script src="<?=base_url()?>asset/js/jquery-2.1.4.min.js"></script>


<script type="text/javascript">

</script>