@extends('index')
@section('Menu')
     <!-- Hero Start -->
     <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">E-Store</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">Temukan barang elektronik anda dengan mudah.</h1>
                    <p class="fs-4 text-white mb-lg-4">E-Store menyediakan barang elektronik dengan harga murah dan memberikan pelayanan yang memuaskan.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                      
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="https://assets-a1.kompasiana.com/items/album/2018/12/17/pc-laptop-smartphone-5c17ac45c112fe11a921fb95.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">Tentang Kami</h6>
                        <h1 class="display-5 text-uppercase mb-0">Kami menyediakan barang elektronik apapun yang anda cari.</h1>
                    </div>
                    <h4 class="text-body mb-4">Dapatkan penawaran harga terbaik pada toko kami.</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Misi Kami</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Visi Kami</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">Misi kami adalah membantu anda dalam menemukan elektronik yang murah dan berkualitas,dan menyediakan servis-servis yg akan membantu castemer dalam perawatan elektroiknya</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Visi kami,Membuat seluruh masyarakat layak dapat menggunakan elektronik,dan dapat menjakau mayarakat luas untuk produk-produk kami</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Layanan</h6>
                <h1 class="display-5 text-uppercase mb-0">Menyediakan Berbagai Layanan</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <div>
                            <h5 class="text-uppercase mb-3">24 jam nonstop</h5>
                            <p>Kami bersiap melayani anda selama 24jam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <div>
                            <h5 class="text-uppercase mb-3">Gratis ongkir</h5>
                            <p>Kami memberikan gratis ongkir untuk wilayah jabodetabek dan bandung</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <div>
                            <h5 class="text-uppercase mb-3">Garansi 1 tahun</h5>
                            <p>Bila barang rusak atau cacat, segera hubungi call center kami</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <div>
                            <h5 class="text-uppercase mb-3">Cicilan tanpa bunga</h5>
                            <p>yang lagi bokeh kami menyediakan cicilan yang bisa di pilih tenornya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Products Start -->
  
    <!-- Products End -->


    <!-- Offer Start -->

    <!-- Offer End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pricing Plan</h6>
                <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Garansi</h2>
                        <h6 class="text-body mb-5">The Best Garansi</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;"></small>24<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Jam</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Sedia selalu</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Garansi Full</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Ada bunga</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Tidak di percaya</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5">
                        <h2 class="text-uppercase">Diskon</h2>
                        <h6 class="text-body mb-5">The Best Diskon</h6>
                        <div class="text-center bg-dark p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">50</small>%<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">
                                    </small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Lebih Murah</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Terpercaya</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Membuat kantong lebih hemat</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Mahal</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Cicilan Tanpa Bunga</h2>
                        <h6 class="text-body mb-5">The Best Cicilan</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;"></small>0%<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">Bunga
                                    </small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Bisa hemat</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Terjangkau</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Terpercaya</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Mempermudah</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Team Members</h6>
                <h1 class="display-5 text-uppercase mb-0">CEO FONDER</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4RhCfG9nfS-VdyXIq4OH7xqACaZhtdopfzA&usqp=CAU" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Rezeky Ramadhan S</h5>
                        <p class="m-0">CEO</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="https://i.pinimg.com/736x/1a/8d/7a/1a8d7a7ba4bb9b6d2a7de25f336c292b.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Riwan Wiranata</h5>
                        <p class="m-0">CEO</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSB44HIxcorA2LGg324bmCwMb8Z6GWTIzWOucNE4TmGqr8Qhl8ls7gu8egT0zRW2SLYz_o&usqp=CAU" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">ROMI SATRIO WICAKSONO</h5>
                        <p class="m-0">CEO</p>
                    </div>
                </div>
            
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-white p-5">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="https://us.123rf.com/450wm/imwaltersy/imwaltersy2004/imwaltersy200403872/145360996-pasay-ph-may-19-liqui-moly-female-model-at-trans-sport-show-on-may-19-2018-in-pasay.jpg?ver=6" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>Saya sangat puas sekali,walaupun saya pelangan baru,tapi pelayanannya sangat ramah dan pengirimannnya sangat cepat</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Karina</h5>
                            <span>Mahasiswi</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="https://img.wattpad.com/acf6d9128c7f4a188f606e928aa5b0c86b7492fb/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f774a50723365505533656b5a76413d3d2d3532343333313934322e313530623639383032393531306463633835333131393138333434312e6a7067?s=fit&w=720&h=720" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>Sangat Amanah,saya sudah hampir 2thn langganan Tokoh ini,saya sudah mencoba semua fiturnya dan sangat memuaskan</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Albret</h5>
                            <span>Mahasiswa</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
   
@endsection
