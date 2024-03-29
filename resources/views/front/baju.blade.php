@extends('layout.frontend')

@section('content')

<section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"> Mari Sebar Kebaikan </h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <h2>CLOVERLEAF 1</h2>
            
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/kaos1.png" alt="" width="250" height="250">
          </div>
        </div>

        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <h2>CLOVERLEAF 2</h2>
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/kaos2.png" alt="" width="250" height="250">
          </div>
        </div>

        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <h2>CLOVERLEAF 3</h2>

            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/kaos1.png" alt="" width="250" height="250">
          </div>
        </div>

        <!-- Portfolio Item 4 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <h2>CLOVERLEAF 4</h2>
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/kaos1.png" alt="" width="250" height="250">
          </div>
        </div>

        <!-- Portfolio Item 5 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"> </i>
              </div>
            </div>
             <h2>CLOVERLEAF 5</h2>
            
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/kaos2.png " alt="" width="250" height="250">
          </div>
        </div>

        <!-- Portfolio Item 6 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
                <h2>CLOVERLEAF 6</h2>     
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/kaos1.png" alt="" width="250" height="250">
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
  </section>

   <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Jadi Pahlawan</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{ asset('bootstrap')}}/img/kaos1.png" alt="" width="250" height="250">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                   <form method="get">
                    @method('post')
                    {{csrf_field()}}
                  <label name="angka1"> RP.150.000 X
                  <input type="text" name="angka2">
                  <input type="submit" name="submit" value="=">

                  <?php

                  $jumlah="";
                  if (isset($_POST['jumlah_kali'])) {
                    $jumlah = $_POST['angka1'] * $_POST['angka2'];
                  }
                    
                   ?>
                   <input type="text" name="jumlah" disabled value="<?php echo $jumlah;?>">
                   <input typ
               
                 </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login"><button class="btn btn-primary" >

                 
                 PESAN
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Jadi Pahlawan</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/kaos2.png" alt="" width="250" height="250">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"> <form method="get">
                    @method('post')
                    {{csrf_field()}}
                  <label name="angka1"> RP.150.000 X
                  <input type="text" name="angka2">
                  <input type="submit" name="submit" value="=">

                  <?php

                  $jumlah="";
                  if (isset($_POST['jumlah_kali'])) {
                    $jumlah = $_POST['angka1'] * $_POST['angka2'];
                  }
                    
                   ?>
                   <input type="text" name="jumlah" disabled value="<?php echo $jumlah;?>">
                   <input typ</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                
                 <a href="/auths/login"><button class="btn btn-primary" > 
                 
                 PESAN
                </button></a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Jadi Pahlawan</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/kaos1.png" alt="" width="250" height="250">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"> <form method="get">
                    @method('post')
                    {{csrf_field()}}
                  <label name="angka1"> RP.150.000 X
                  <input type="text" name="angka2">
                  <input type="submit" name="submit" value="=">

                  <?php

                  $jumlah="";
                  if (isset($_POST['jumlah_kali'])) {
                    $jumlah = $_POST['angka1'] * $_POST['angka2'];
                  }
                    
                   ?>
                   <input type="text" name="jumlah" disabled value="<?php echo $jumlah;?>">
                   <input typ</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login"><button class="btn btn-primary"> 
                 
                 PESAN
                </button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Jadi Pahlawan</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/kaos1.png" alt="" width="250" height="250">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"> <form method="get">
                    @method('post')
                    {{csrf_field()}}
                  <label name="angka1"> RP.150.000 X
                  <input type="text" name="angka2">
                  <input type="submit" name="submit" value="=">

                  <?php

                  $jumlah="";
                  if (isset($_POST['jumlah_kali'])) {
                    $jumlah = $_POST['angka1'] * $_POST['angka2'];
                  }
                    
                   ?>
                   <input type="text" name="jumlah" disabled value="<?php echo $jumlah;?>">
                   <input typ</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login"><button class="btn btn-primary"> 
                  
                 PESAN
                </button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Jadi Pahlawan</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/kaos2.png" alt="" width="250" height="250">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                   <form method="get">
                    @method('post')
                    {{csrf_field()}}
                  <label name="angka1"> RP.150.000 X
                  <input type="text" name="angka2">
                  <input type="submit" name="submit" value="=">

                  <?php

                  $jumlah="";
                  if (isset($_POST['jumlah_kali'])) {
                    $jumlah = $_POST['angka1'] * $_POST['angka2'];
                  }
                    
                   ?>
                   <input type="text" name="jumlah" disabled value="<?php echo $jumlah;?>">
                   <input typ
                 </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login" ><button class="btn btn-primary" >
                  
                 PESAN
                </button></a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Jadi Pahlawan</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/kaos1.png" alt="" width="250" height="250">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                  <form method="get">
                    @method('post')
                    {{csrf_field()}}
                  <label name="angka1"> RP.150.000 X
                  <input type="text" name="angka2">
                  <input type="submit" name="submit" value="=">

                  <?php

                  $jumlah="";
                  if (isset($_POST['jumlah_kali'])) {
                    $jumlah = $_POST['angka1'] * $_POST['angka2'];
                  }
                    
                   ?>
                   <input type="text" name="jumlah" disabled value="<?php echo $jumlah;?>">
                   <input type="submit" name="jumlah" value="Hitung">
                  </form>
                </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login"><button class="btn btn-primary"> 
                  
                 PESAN
                </button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

 

 @endsection
        
                        <!--ENDKONTEN1-->
