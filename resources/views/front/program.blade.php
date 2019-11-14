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
            <h2>BANTU ANAK BURUH TANI  </h2>
            
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/portfolio/4 penyakit.jpg" alt="">
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
            <h2>RIZMA PENDERITA MENINGITIS</h2>
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/portfolio/miningitis.jpg" alt="">
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
            <h2>BANTU ANAK DRIVER OJOL</h2>

            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/portfolio/kanker otak.jpg" alt="">
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
            <h2>BANTU KORBAN GEMPA AMBON </h2>
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/portfolio/Donasi_Ambon.jpg" alt="">
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
             <h2>PEDULI ALIANSI SESAMA</h2>
            
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/portfolio/hati cucu rusak.jpg " alt="">
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
                <h2>BANTU SEMBUH DARI GIZI BURUK</h2>     
            <img class="img-fluid" src="{{ asset('bootstrap')}}/img/portfolio/gizi_ buruk.jpg" alt="">
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
                <img class="img-fluid rounded mb-5" src="{{ asset('bootstrap')}}/img/portfolio/hero.jpeg" alt="" width="300" height="300">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">
                @foreach ($program as $p)
                  {{$p -> deskripsi}}
                  @endforeach
                 </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login"><button class="btn btn-primary" >

                 
                 DONASI SEKARANG
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
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/portfolio/hero.jpeg" alt="" width="300" height="300">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Di usia 1 tahun 4 bulan, adik kita, Rizma kerap kali muntah dan lemas. Dengan kondisi tak sadarkan diri, ia dirujuk ke Jakarta. 
                Di sana, dik Rizma divonis TB Meningitis, yang menyebabkan cairan otaknya bocor.
                 Tidak hanya itu, ternyata ada benjolan yang menutupi 80% lubang hidungnya!
                Untuk sembuh, dik Rizma butuh jalani operasi 2 kali. Berarti, akan ada kebutuhan di luar BPJS dan akomodasi yang harus ditutupi keluarganya! 
                Belum lagi, dik Rizma terkena Epilepsy, dan butuh jalani pengobatan 2 tahun!</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                
                 <a href="/auths/login"><button class="btn btn-primary" > 
                 
                 DONASI SEKARANG
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
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/portfolio/hero.jpeg" alt="" width="300" height="300">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Pak Ade Kusna sedang mengalami cobaan berat. Anak pertamanya, Gyandra (10 tahun) terkena kanker otak stadium 4.
                Sejak umur 9 tahun, Andra (begitu ia disapa) sudah merasakan kalau penglihatannya kabur. Beberapa kali ia kesulitan saat tes membaca, sampai akhirnya tidak bisa melihat lagi.
                Pak Ade dan istrinya, Bu Titing, berinisiatif membawa Andra ke dokter mata RS Cicendo, Bandung. Ternyata pengelihatan Andra terganggu karena ada tekanan dari otak. Dokter mata memberi rujukan ke RS Hasan Sadikin, Bandung. Setelah melakukan CT scan, ternyata Andra divonis kanker otak stadium 4.
                Sampai saat ini Andra sudah menjalani 4 kali operasi dalam satu bulan. Kepalanya sempat membesar karena efek tekanan otaknya yang tinggi. Ia sempat dinyatakan meninggal karena detak jantungnya berhenti. Namun kuasa-Nya membuat Andra bangkit kembali untuk bertarung melawan kanker ganas ini.
                Kini Andra harus mengalami kelumpuhan karena saraf tangan dan kaki kirinya tidak berfungsi. Selain itu, ia juga tidak mampu berbicara.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login"><button class="btn btn-primary"> 
                 
                 DONASI SEKARANG
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
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/portfolio/hero.jpeg" alt="" width="300" height="300">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Gempa besar dengan magnitudo 6,8 mengguncang Ambon, Maluku pada Kamis (26/9) pagi pukul 06.46 WIB. 
                Kekuatan gempa kemudian dimutakhirkan oleh BNPB menjadi magnitudo 6,5. Meskipun tidak berpotensi Tsunami, gempa ini membuat panik warga Ambon yang merasakan.
                Berdasarkan laporan BNPB per 29 September, 30 orang telah meninggal dunia, 156 korban luka-luka, dan 136.780 jiwa harus mengungsi.
                Warga sempat panik sehingga sebagian mengungsi ke tempat yang lebih tinggi. Bahkan warga yang tinggal di pesisir pantai saat ini sudah mengungsi ke perbukitan, karena beredar isu tsunami yang dipicu gempa bumi. ACT hingga saat ini terus melakukan pemantauan untuk kondisi terbaru di Ambon dan sekitarnya.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login"><button class="btn btn-primary"> 
                  
                 DONASI SEKARANG
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
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/portfolio/hero.jpeg" alt="" width="300" height="300">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Azria (11 Bulan) sudah sakit Sirosis Hepatitis (Kerusakaan Organ Hati) 7 bulan lamanya. Penyakitnya menyebabkan perut adik kita bengkak besar dan tubuhnya menguning sampai matanya. 
                Ditambah, orangtua Azria sudah bercerai. Semenjak itu, ayahnya tak lagi berjuang di sampingnya. Azria akhirnya diurus ibu dan neneknya.
                Selagi Azria dirawat ibu, nenek yang berusia 55 tahun akhirnya memutuskan untuk kembali bekerja jadi tulang punggung keluarga, demi menghidupi keluarga dan susu Azria. 
                Tiap hari, nenek mengetok rumah tetangga satu per satu. Tak kenal pagi dan malam, ia tak henti menawarkan jasanya untuk cuci pakaian, bermodalkan harapan untuk kesembuhan Azria.
                Namun, tak bisa dipungkiri, penghasilan nenek 300rb per minggu tak mampu tutupi kebutuhan Azria yang sangat besar. Alhasil, Azria belum bisa berobat dan nenek hanya bisa menangis tiap kali cucunya tiba-tiba alami sesak nafas. 
                Untuk sembuh, Azria butuh jalani rawat jalan. Tak hanya itu, ia masih butuh susu khusus dan alat oksigen jika sewaktu-waktu tak bisa bernafas!  </p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login" ><button class="btn btn-primary" >
                  
                 DONASI SEKARANG
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
                <img class="img-fluid rounded mb-5" src="{{ asset('/bootstrap')}}/img/portfolio/hero.jpeg" alt="" width="300" height="300">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Satu bulan setelah lahir, Sahrul tidak mengalami gejala apa pun yang membuat orang tuanya curiga. Imunisasi pun rutin dilakukan.
                Pak Anang dan Bu Mimin baru tahu anaknya terkena gizi buruk saat petugas Puksesmas memeriksa kondisi tubuhnya secara langsung.
                Kini berat badan Sahrul hanya 3.280 gram, panjang 56 cm. Tubuhnya semakin kurus. Kaki tangannya mengecil, tipis menyatu dengan tulang. Tulang rusuknya juga sangat terlihat jelas.
                Sahrul pun disarankan dirawat rumah sakit terdekat. Ia dirawat selama 16 hari namun kondisinya  masih belum normal sampai saat ini.
                Selain itu, Sahrul juga menderita TBC. Orang tuanya tak tahu harus mencari biaya pengobatan di mana karena Sahrul tak henti-hentinya batuk.
                Sebelumnya Pak Anang berjualan sate dengan penghasilan tak seberapa. Namun usahanya harus berhenti ketika Sahrul sakit. Ia sampai harus menjual motor nya yang untuk berjualan demi memenuhi biaya Sahrul berobat.</p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Tutup
                </button>
                 <a href="/auths/login"><button class="btn btn-primary"> 
                  
                 DONASI SEKARANG
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
