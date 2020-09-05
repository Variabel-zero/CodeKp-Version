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

                <form class="user" method="post" action="">
                  <div class="form-group">
                    <input type="text" class="form-control" id="id_surat" name="id_surat"
                    placeholder="Masukkan id_surat">
                    <small class="text-danger pl-3"></small>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name"
                    placeholder="Masukkan nama" value="">
                    <small class="text-danger pl-3"></small>
                  </div>
                  <div class="form-group">
                    <select class="form-control">
                      <option>---Pilih Surat---</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    <small class="text-danger pl-3"></small>
                  </div>
                  <a href="#" class="btn btn-primary  btn-block" >
                    Ok
                  </a>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="col-lg-7">
        <div class="badan">
          <?php 
          if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
              case 'home':
              include "halaman/home.php";
              break;
              case 'tentang':
              include "halaman/tentang.php";
              break;    
              default:
              echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
              break;
            }
          }else{
            require "kosong.php";
          }

          ?>

        </div>

      </iframe>
    </div>
  </div>

</div>

</div>
<!-- /.container-fluid -->
