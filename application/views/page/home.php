  <!-- ======= Hero Section ======= -->
  <section id="beranda" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <?= $this->session->flashdata('pesan') ?>
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Nikmati Makanan<br>Sehat dan Lezat Anda</h2>
          <p style="text-align: justify;" data-aos="fade-up" data-aos-delay="100">ABIA Food merupakan restoran makanan yang dimana semua orang dapat memesan makanan secara online maupun offline, dan Anda dapat melakukan reservasi tempat pada restoran kami.
            <br>
            <b style="font-size: 8px;">Catatan : Silakan membawa minuman Anda sendiri, dikarenakan kami tidak menyediakan minuman ;)</b>
          </p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#pesan" class="btn-book-a-table" style="">Booking Tempat</a>
            <!-- <a href="<?= base_url('pesan') ?>" class="btn-book-a-table">Pesan Makanan</a> -->
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="<?= base_url('assets/img/ABIAlogo.png') ?>" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->