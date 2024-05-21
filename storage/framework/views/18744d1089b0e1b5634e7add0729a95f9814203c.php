<?php $__env->startSection('konten'); ?>

<style>
    .kompetensi{
        text-decoration: none;
    }
</style>

<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-lg-1">
            <h1><?php echo e($data->judul); ?></h1>
            <h2>ブカシ市で最高の学校</h2>
            <div class="d-flex justify-content justify-content-lg-start">
                <a href="" class="btn-get-started">Get started</a>
                <a href="https://youtu.be/U0JvLzfx_PM" class="btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>
        <div class="col-lg-6 order-1 order lg-2 hero-img">
            <img width="100%" height="100%" style="object-fit: cover" src="<?php echo e(asset('public/image/'. $data->nama_banner)); ?>" alt="">
        </div>
    </div>
</div>

</section>

<main id="main">

    
<section id="clients" class="clients section-bg">
    <div class="container">
        <div class="row">
          <?php $__currentLoopData = $data_logo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="<?php echo e(asset('public/image/'. $item->logo_banner)); ?>" alt="" class="img-fluid">
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>



<section id="about" class="about">
    <div class="container">

        <div class="section-title">
            <h2><?php echo e($data_about->judul); ?></h2>
        </div>

        <div class="row content">
            <div class="col-lg-6">
                <p>
                    <?php echo e($data_about->content1); ?>

                </p>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
                <p>
                   <?php echo e($data_about->content2); ?>

                </p>
                <a href="#" class="btn-learn-more">Learn More</a>
            </div>
        </div>

    </div>
</section>


<section id="why-us" class="why-us section-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                <div class="content">
                    <h3>Kompetensi<strong>Keahlian</strong></h3>
                </div>

                <div class="accordion-list">
                    <ul>
                      <?php $i = 1 ?>
                      <?php $__currentLoopData = $data_kompetensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li>
                        <a data-bs-toggle="collapse" class="collapse kompetensi" data-bs-target="#accordion-list-1"><span><?php echo e($i++); ?></span><?php echo e($item->judul); ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                          <p>
                            <?php echo e($item->deskripsi); ?>

                          </p>
                        </div>
                      </li>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
        </div>
    </div>
    <div class="col-lg-5 d-flex  align-items-center justify-content-center order-1 order-lg-2"><img src="public/image/SMKN 1 bks.png" class="img-fluid" alt="">&nbsp;</div>
    </div>

</div>
</section>



<section id="skills" class="skills">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 d-flex align-items-center">
          <img src="public/image/medal-design-template-89182c980b9f3214cca1dca00b3d27b4_screen.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 content">
          <h3>Prestasi</h3>
          <p class="fst-italic">
            Prestasi yang pernah diraih oleh siswa/i SMK Negeri 1 Kota Bekasi diantaranya:
          </p>

          <div class="skills-content">
            <div class="row">

            <?php $__currentLoopData = $data_prestasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <p class="card-text"><?php echo e($item->judul); ?></p>
                </div>
              </div>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Skills Section -->

  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>EKSTRAKULIKULER</h2>
        <p>Berikut beberapa ekstrakulikuler</p>
      </div>

      <div class="faq-list">
        <ul>
          <?php $__currentLoopData = $data_ekstrakulikuler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <li data-aos="fade-up" data-aos-delay="100">
            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><?php echo e($item->judul); ?><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
              <p>
                <?php echo e($item->deskripsi); ?>

              </p>
            </div>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Jika ada kendala atau ada yang ingin menananyakan tentang kami silahkan hubungi lewat contact dibawah ini</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Jl. Bintara VIII No.2, RT.005/RW.003, Bintara, Kec. Bekasi Bar., Kota Bks, Jawa Barat 17134, Indonesia</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@smkn1kotabekasi.sch.id</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>02188951151</p>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6670.434777953216!2d106.95570043292562!3d-6.228851122215414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c89a57526f1%3A0xa850dc0a366b403c!2sSMKN%201%20Bekasi!5e0!3m2!1sen!2sbg!4v1673931379489!5m2!1sen!2sbg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="<?php echo e(route('simpan-pesan')); ?>" method="post" role="form" class="php-email-form">
            <?php echo csrf_field(); ?>
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success">
                    <?php echo e(session()->get('message')); ?>

                </div>
            <?php endif; ?>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name"  class="form-control" id="name" required>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"> <?php echo e($message); ?> </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
              <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="text-danger"> <?php echo e($message); ?> </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
              <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span class="text-danger"> <?php echo e($message); ?> </span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.front_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Latihan\resources\views/tampilan/index.blade.php ENDPATH**/ ?>