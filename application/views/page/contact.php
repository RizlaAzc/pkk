<!-- ======= Contact Section ======= -->
<section id="kontak" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Kontak</h2>
      <p>Butuh Bantuan ? <span>Hubungi Kami</span></p>
    </div>

    <div class="mb-3">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://maps.google.com/maps?q=smk yaj&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" allowfullscreen></iframe>
    </div><!-- End Google Maps -->

    <div class="row gy-4">

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-map flex-shrink-0"></i>
          <div>
            <h3>Alamat Kami</h3>
            <p>Jl. Aridho No.01, RT.01/RW.04,
              Kel. Jatimulya, Kec. Cilodong,
              Kota Depok, Jawa Barat 16413</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item d-flex align-items-center">
          <i class="icon bi bi-envelope flex-shrink-0"></i>
          <div>
            <h3>Email Kami</h3>
            <p>abiafood@gmail.com</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-telephone flex-shrink-0"></i>
          <div>
            <h3>Hubungi Kami</h3>
            <p>+62 8123 4567 89</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-md-6">
        <div class="info-item  d-flex align-items-center">
          <i class="icon bi bi-share flex-shrink-0"></i>
          <div>
            <h3>Jam Buka</h3>
            <div><strong>Senin - Sabtu :</strong> 11:00 - 23:00,
              <strong>Minggu :</strong> Tutup
            </div>
          </div>
        </div>
      </div><!-- End Info Item -->

    </div>

    <form action="<?= base_url('home/kontak') ?>" method="post" role="form" class="form p-3 p-md-4" style="width: 100%; margin-top: 30px; background: #fff; box-shadow: 0 0 30px rgba(0, 0, 0, 0.08);">
      <div class="row">
        <div class="col-xl-6 form-group" style="padding-bottom: 20px;">
          <input style="border-radius: 0; height: 48px; box-shadow: none; font-size: 14px;" type="text" name="nama" class="form-control" id="name" placeholder="Nama Anda" required>
        </div>
        <div class="col-xl-6 form-group" style="padding-bottom: 20px;">
          <input style="border-radius: 0; height: 48px; box-shadow: none; font-size: 14px;" type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required>
        </div>
      </div>
      <div class="form-group" style="padding-bottom: 20px;">
        <input style="border-radius: 0; height: 48px; box-shadow: none; font-size: 14px;" type="text" class="form-control" name="subjek" id="subject" placeholder="Subjek" required>
      </div>
      <div class="form-group" style="padding-bottom: 20px;">
        <textarea style="padding: 10px 12px; border-radius: 0; box-shadow: none; font-size: 14px;" class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
      </div>
      <div class="my-3">
        <div class="loading" style="display: none; background: #fff; text-align: center; padding: 15px;">Memuat</div>
        <div class="error-message" style="display: none;  color: #fff; background: #df1529; text-align: left; padding: 15px; font-weight: 600;"></div>
        <div class="sent-message" style="display: none; color: #fff; background: #059652; text-align: center; padding: 15px; font-weight: 600;">Pesan Anda telah terkirim. Terima Kasih !</div>
      </div>
      <div class="text-center"><button type="submit" style="background: var(--color-primary); border: 0; padding: 12px 40px; color: #fff; transition: 0.4s; border-radius: 50px;">Kirim Pesan</button></div>
    </form><!--End Contact Form -->

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->