@extends('layouts.app')

@section('title')
    Store Profile Page
@endsection

@section('content')
  <!-- Page Content -->
    <div class="page-content page-profil">
      <section class="store-carousel">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-9" data-aos="zoom-in">
              <h5>Profile</h5>
              <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                  <li data-target="#storeCarousel" data-slide-to="3"></li>
                  <li data-target="#storeCarousel" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/images/toko1.jpeg" alt="Carousel Image" class="d-block w-100" style="height: 500px;" />
                  </div>
                  <div class="carousel-item">
                    <img src="/images/toko2.jpeg" alt="Carousel Image" class="d-block w-100" style="height: 500px;" />
                  </div>
                  <div class="carousel-item">
                    <img src="/images/toko3.jpg" alt="Carousel Image" class="d-block w-100" style="height: 500px;" />
                  </div>
                  <div class="carousel-item">
                    <img src="/images/toko4.jpeg" alt="Carousel Image" class="d-block w-100" style="height: 500px;" />
                  </div>
                  <div class="carousel-item">
                    <img src="/images/toko5.jpeg" alt="Carousel Image" class="d-block w-100" style="height: 500px;" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="profile-informations">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-12">
              <h5>Informations</h5>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-lg-12">
              <h5>Visi dan Misi</h5>
            </div>
          </div>
          <div class="row text-center">
            <div class="col-lg-12">
              <h5>Visi</h5>
              <ul style="text-align: justify;" >
                Menjadi agen minuman terkemuka yang menyediakan pilihan minuman berkualitas tinggi dan inovatif untuk memenuhi kebutuhan pelanggan, sambil memberikan pengalaman belanja yang luar biasa di toko Jamil Mukti.
              </ul>
            </div>
          </div>
          <div class="row text-center ">
            <div class="col-lg-12">
              <h5>Misi</h5>
              <ul style="text-align: justify;">
                1. Menghadirkan produk berkualitas tinggi yang memenuhi kebutuhan dan harapan pelanggan.<br/>
                2. Melakukan pengembangan terus-menerus untuk memperbaiki pelayanan kami.<br/>
                3. Memberikan pengalaman pelanggan yang luar biasa melalui pelayanan yang ramah dan responsif.<br/>
                4. Mendukung pertumbuhan dan perkembangan karyawan dengan menyediakan lingkungan kerja yang positif.<br/>
                5. Menerapkan keberlanjutan dan tanggung jawab sosial dalam setiap aspek operasional perusahaan.<br/>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <h5>Alamat</h5>
              <p>Jl. Radar Selatan Gang Bima IV Rt004/005 No.88, Jaticempaka. Pondok Gede.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <p>Kunjungi toko kami di: <a href="https://goo.gl/maps/MXjejqDJTQC3NRUh6?coh=178571&entry=tt">Google Maps</a></p>
            </div>
          </div>
            <div class="row">
              <div class="col-lg-12">
                <p>
                  Nomer Handphone/Whatsapp: 08128714140
                </p>
              </div>
            </div>
        </div>
      </section>
    </div>
@endsection